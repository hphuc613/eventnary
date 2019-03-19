<?php
namespace HPro\Customer\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\Role\Enities\Roles;
use HPro\Customer\Enities\Customer;
use Validator;

class CustomerController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Customer $model, Request $request)
    {
        $this->model    = $model;
        $this->middleware('auth');
    }
    
    
    public function getList(Request $request){
        $page = 8;
        $data = Customer::paginate(8);
        return view('Customer::customer.list2',compact('data'))
                ->with('i', ($request->input('page', 1) - 1) * $page);
    }


    public function getCreate(Request $request){
        $roles = Roles::all();
        return view('Customer::customer.create',compact('roles'));
    }

    public function postCreate(Request $request){

        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = new Customer();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->role_id = $request->role_id;
        $data->password = bcrypt($request->password);
        $data->save();
        $request->session()->flash('status', 'Thêm mới thành công!');
        return redirect()->route('get.list.customer');
    }

    public function getEdit(Request $request, $id){
        $roles = Roles::all();
        $data = Customer::find($id);
        return view('Customer::customer.edit',compact('data','roles'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,[
            'name'        => 'required',
            'phone'       => 'required|numeric|unique:Customers,phone,' . $id,
            'email'       => 'required|e-mail|unique:Customers,email,' . $id,
            'role_id'     => 'required',
        ],$this->model->messages);

        $data = Customer::find($id);
        $data->update($request->all());
        // $data->password = bcrypt($request->input('password'));
        // $data->update();

        $request->session()->flash('status', 'Chỉnh sửa thành công!');
        return redirect()->back();
    }

    public function postImageEdit(Request $request, $id)
    {

        $data = Customer::find($id);

        if($request->file('image') && $data->image != null){
            $fileImage = 'upload/image/Customer/'.$data->image;
            if(file_exists($fileImage))
            {
                unlink($fileImage);

            }

            $image = $data->id.'-'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move('upload/image/Customer',$image);
            $data->image = $image;
            $data->update();
          
            $request->session()->flash('status', 'Thay đổi thành công!');

        }elseif($request->file('image') != null){
            
            $image = $data->id.'-'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move('upload/image/Customer',$image);
            $data->image = $image;
            $data->update();
            
            $request->session()->flash('status', 'Thay đổi thành công!');

        }elseif($request->file('image') == null){

            $request->session()->flash('alert', 'Vui lòng nhập hình mới!');
        }

        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        $data = Customer::find($id);

        if($data->image != null){
            $fileImage = 'upload/image/Customer/'.$data->image;
            if(file_exists($fileImage))
            {
                unlink($fileImage);

            }
        }
        
        $data->delete();
        $request->session()->flash('alert', 'Xóa thành công!');
        return redirect()->back();
    }

   
}