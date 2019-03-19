<?php
namespace HPro\Home\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\Role\Enities\Roles;
use HPro\User\Enities\User;
use HPro\Event\Enities\Event;
use Validator;

class AccountController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(User $model, Request $request)
    {
        $this->model    = $model;
    }

     public function postCreate(Request $request){

        $this->validate($request,$this->model->rules,[
                        'phone.unique'      =>   'Số điện thoại của bạn dường như đã được sử dụng!',
                        'phone.numeric'     =>   'Số điện thoại của bạn không đúng định dạng!',
                        'email.unique'      =>   'Email của bạn dường như đã được sử dụng!',
                        'email.e-mail'      =>   'Vui lòng nhập đúng địa chỉ email!',

                        ]);
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->role_id = $request->role_id;
        $data->password = bcrypt($request->password);
        $data->save();

        $request->session()->flash('status', 'Tạo tài khoản thành công!');
        return redirect()->back();
    }


    public function getEditProfile(Request $request, $id)
    {
        $data = User::find($id);
        $event = Event::where('user_id',$data->id)->orderBy('created_at','DESC')->get();
        return view('Home::profile.profile',compact('data','event'));
    }

    public function postEditProfile(Request $request, $id){
        $this->validate($request,[
            'name'        => 'required',
            'phone'       => 'required|numeric|unique:users,phone,' . $id,
            'email'       => 'required|e-mail|unique:users,email,' . $id,
        ],[
            'name.required'     =>   'Vui lòng nhập tên của bạn',
            'phone.unique'      =>   'Số điện thoại của bạn dường như đã được sử dụng!',
            'phone.numeric'     =>   'Số điện thoại của bạn không đúng định dạng!',
            'email.unique'      =>   'Email của bạn dường như đã được sử dụng!',
            'email.e-mail'      =>   'Vui lòng nhập đúng địa chỉ email!',
        ]);

        $data = User::find($id);
        $data->update($request->all());
        // $data->password = bcrypt($request->input('password'));
        // $data->update();
        $request->session()->flash('status', 'chỉnh sửa thành công!');
        return redirect()->back();
    }


   
}