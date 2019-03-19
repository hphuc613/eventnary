<?php
namespace HPro\Ticket\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\Event\Enities\Event;
use HPro\Event\Enities\Image_event;
use HPro\Location\Enities\City;
use HPro\Location\Enities\District;
use HPro\Location\Enities\Ward;
use HPro\Category\Enities\Event_type;
use HPro\Ticket\Enities\Ticket;
use Validator;

class WebController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Ticket $model, Request $request)
    {
        $this->model    = $model;
    }
    
    public function getCreateTicket(Request $request,$slug_event)
    {   
        $event = Event::where('slug',$slug_event)->first();
        $data = Ticket::where('event_id',$event->id)->get();
        return view('Ticket::frontend.ticket.ticket_create',compact('event','data'));
    }

    public function postCreateTicket(Request $request)
    {   
        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = $request->all();
        $insert = new Ticket($data);
        $insert->save();
        $request->session()->flash('status', 'Thêm mới thành công!');
        return redirect()->back();
    }



   
}