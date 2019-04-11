<?php
namespace HPro\Category\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\Category\Enities\Guest_group;
use Validator;

class GuestGroupController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Guest_group $model, Request $request)
    {
        $this->model    = $model;
        $this->middleware('auth');
    }
    


    public function getCreate(Request $request){
        $guest_group = Guest_group::orderBy('created_at')->get();
        return view('Category::guest_group.create',compact('guest_group'));
    }

    public function postCreate(Request $request){

        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = $request->all();
        $insert = new Guest_group($data);
        $insert->save();
        $request->session()->flash('status', 'Thêm mới thành công!');
        return redirect()->back();
    }

    public function getEdit(Request $request, $id){
        $guest_group = Guest_group::orderBy('created_at')->get();
        $data = Guest_group::find($id);
        return view('Category::guest_group.edit',compact('data','guest_group'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = Guest_group::find($id);
        $data->update($request->all());
        $data->save();
        $request->session()->flash('status', 'Chỉnh sửa thành công!');
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        $data = Guest_group::find($id);
        $data->delete();
        $request->session()->flash('alert', 'Xóa thành công!');
        return redirect()->back();
    }


}