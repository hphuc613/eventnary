<?php
namespace HPro\User\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\Role\Enities\Roles;
use HPro\User\Enities\User;
use Validator;

class CollaboratorController extends Controller{
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
        $page = 8;
        $data = User::where('role_id',2)->paginate(8);
        return view('User::collaborator.list',compact('data'))
                ->with('i', ($request->input('page', 1) - 1) * $page);
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


   
}