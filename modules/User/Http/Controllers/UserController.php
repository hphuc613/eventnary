<?php
namespace HPro\User\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\Role\Enities\Roles;
use HPro\User\Enities\User;
use Validator;

class UserController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(User $model, Request $request)
    {
        $this->model    = $model;
        $this->middleware('auth');
    }
    
    
    public function getList(Request $request){
        $data = User::all();
        return view('User::user.list',compact('data'));
    }


    public function getCreate(Request $request){
        $roles = Roles::all();
        return view('User::user.create',compact('roles'));
    }

    public function postCreate(Request $request){

        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->role_id = $request->role_id;
        $data->password = bcrypt($request->password);
        $data->save();
        $request->session()->flash('status', 'Thêm mới thành công!');
        return redirect()->route('get.list.user');
    }

    public function getEdit(Request $request, $id){
        $roles = Roles::all();
        $data = User::find($id);
        return view('User::user.edit',compact('data','roles'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,[
            'name'        => 'required',
            'phone'       => 'required|numeric|unique:users,phone,' . $id,
            'email'       => 'required|e-mail|unique:users,email,' . $id,
            'role_id'     => 'required',
        ],$this->model->messages);

        $data = User::find($id);
        $data->update($request->all());
        // $data->password = bcrypt($request->input('password'));
        // $data->update();

        $request->session()->flash('status', 'Chỉnh sửa thành công!');
        return redirect()->back();
    }

    public function postImageEdit(Request $request, $id)
    {

        $data = User::find($id);

        if($request->file('image') && $data->image != null){
            $fileImage = 'upload/image/user/'.$data->image;
            if(file_exists($fileImage))
            {
                unlink($fileImage);

            }

            $image = $data->id.'-'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move('upload/image/user',$image);
            $data->image = $image;
            $data->update();
          
            $request->session()->flash('status', 'Thay đổi thành công!');

        }elseif($request->file('image') != null){
            
            $image = $data->id.'-'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move('upload/image/user',$image);
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
        $data = User::find($id);

        if($data->image != null){
            $fileImage = 'upload/image/user/'.$data->image;
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