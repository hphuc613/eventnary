<?php
namespace HPro\Ticket\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\Ticket\Enities\Ticket;
use HPro\Event\Enities\Event;
use Validator;

class TicketController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Ticket $model, Request $request)
    {
        $this->model    = $model;
    }
    
    public function getCreate(Request $request, $id_event){
        $event = Event::find($id_event);
        $data = Ticket::where('event_id',$id_event)->get();
        return view('Ticket::ticket.create',compact('event','data'));
    }

    public function postCreate(Request $request){

        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = $request->all();
        $insert = new Ticket($data);
        $insert->save();
        $request->session()->flash('status', 'Thêm mới thành công!');
        return redirect()->back();
    }

    public function getEdit(Request $request, $id){
        $ticket = Ticket::find($id);
        $data = Ticket::where('event_id',$ticket->event_id)->get();
        return view('Ticket::ticket.edit',compact('data','ticket'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = Ticket::find($id);
        $data->update($request->all());
        $data->save();
        $request->session()->flash('status', 'Chỉnh sửa thành công!');
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        $data = Ticket::find($id);
        $data->delete();
        $request->session()->flash('alert', 'Xóa thành công!');
        return redirect()->back();
    }

   
}