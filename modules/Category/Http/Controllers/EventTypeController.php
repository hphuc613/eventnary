<?php
namespace HPro\Category\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\Category\Enities\Event_type;
use Validator;

class EventTypeController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Event_type $model, Request $request)
    {
        $this->model    = $model;
        $this->middleware('auth');
    }
    
    
    public function getList(Request $request){
        $data = Event_type::all();
        return view('Category::event.list',compact('data'));
    }


    public function getCreate(Request $request){
        return view('Category::event.create');
    }

    public function postCreate(Request $request){

        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = $request->all();
        $insert = new Event_type($data);
        $insert->save();
        $request->session()->flash('status', 'Thêm mới thành công!');
        return redirect()->route('get.list.eventtype');
    }

    public function getEdit(Request $request, $id){
        $data = Event_type::find($id);
        return view('Category::event.edit',compact('data'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = Event_type::find($id);
        $data->update($request->all());
        $data->save();
        $request->session()->flash('status', 'Chỉnh sửa thành công!');
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        $data = Event_type::find($id);
        $data->delete();
        $request->session()->flash('alert', 'Xóa thành công!');
        return redirect()->back();
    }


}