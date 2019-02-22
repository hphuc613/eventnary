<?php
namespace HPro\Event\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\Event\Enities\Event;
use Validator;

class EventController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Event $model, Request $request)
    {
        $this->model    = $model;
    }
    
    
    public function getList(Request $request){
        $data = Event::all();
        return view('Event::event.list',compact('data'));
    }


    public function getCreate(Request $request){
        return view('Event::event.create');
    }

    public function postCreate(Request $request){

        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = $request->all();
        $insert = new Event($data);
        $insert->save();
        $request->session()->flash('status', 'Thêm mới thành công!');
        return redirect()->route('get.list.role');
    }

    public function getEdit(Request $request, $id){
        $data = Event::find($id);
        return view('Event::event.edit',compact('data'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = Event::find($id);
        $data->update($request->all());
        $data->save();
        $request->session()->flash('status', 'Chỉnh sửa thành công!');
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        $data = Event::find($id);
        $data->delete();
        $request->session()->flash('alert', 'Xóa thành công!');
        return redirect()->back();
    }

   
}