<?php
namespace HPro\Role\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\Role\Enities\Roles;
use Validator;

class RoleController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Roles $model, Request $request)
    {
        $this->model    = $model;
        $this->middleware('auth');
    }
    
    
    public function getList(Request $request){
        $data = Roles::all();
        return view('Role::role.list',compact('data'));
    }


    public function getCreate(Request $request){
        $roles = Roles::all();
        return view('Role::role.create',compact('roles'));
    }

    public function postCreate(Request $request){

        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = $request->all();
        $insert = new Roles($data);
        $insert->save();
        $request->session()->flash('status', 'Thêm mới thành công!');
        return redirect()->back();
    }

    public function getEdit(Request $request, $id){
        $roles = Roles::all();
        $data = Roles::find($id);
        return view('Role::role.edit',compact('data','roles'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = Roles::find($id);
        $data->update($request->all());
        $data->save();
        $request->session()->flash('status', 'Chỉnh sửa thành công!');
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        $data = Roles::find($id);
        $data->delete();
        $request->session()->flash('alert', 'Xóa thành công!');
        return redirect()->back();
    }

   
}