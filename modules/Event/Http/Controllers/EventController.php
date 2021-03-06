<?php
namespace HPro\Event\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\Event\Enities\Event;
use HPro\Event\Enities\Image_event;
use HPro\Location\Enities\City;
use HPro\Location\Enities\District;
use HPro\Location\Enities\Ward;
use HPro\Category\Enities\Event_type;
use HPro\Ticket\Enities\Ticket;
use HPro\Ticket\Enities\Ticket_detail;
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
        $this->middleware('auth');
    }
    
    public function getList(Request $request){
        $page = 6;
        $data = Event::orderBy('id','DESC')->paginate($page);
        return view('Event::event.list',compact('data'))
                ->with('i', ($request->input('page', 1) - 1) * $page);
    }


    public function getCreate(Request $request){
        $cities = City::all();
        $event_type = Event_type::all();
        return view('Event::event.create',compact('cities','event_type'));
    }

    public function postCreate(Request $request){


        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = $request->all();
        $insert = new Event($data);
        $insert->save();


        $event = Event::orderBy('created_at','DESC')->first();

        $image = $event->id.'-'.$request->file('current_image')->getClientOriginalName();
        $request->file('current_image')->move('upload/image/event',$image);
        $event->current_image = $image;
        $event->slug = $event->id.'-'.slug($event->title);
        $event->update();
        
        $request->session()->flash('status', 'Thêm mới thành công!');
        return redirect()->route('get.create.ticket',$event->id);
    }

    public function getEdit(Request $request, $id){
        $data = Event::find($id);
        $cities = City::get();
        $districts = District::where('city_id',$data->ward->district->city->id)->get();
        $wards = Ward::where('district_id',$data->ward->district->id)->get();
        $event_type = Event_type::all();
        return view('Event::event.edit',compact('data','cities','districts','wards','event_type'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = Event::find($id);
        $data->update($request->all());
        $data->save();

        if($request->file('current_image')){
            $image = $data->id.'-'.$request->file('current_image')->getClientOriginalName();
            $request->file('current_image')->move('upload/image/event',$image);
            $data->current_image = $image;
            $data->update();
        }
        $data->slug = $data->id.'-'.slug($data->title);
        $data->update();

        $request->session()->flash('status', 'Chỉnh sửa thành công!');
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        $data = Event::find($id);
        $ticket = Ticket::where('event_id',$id)->get();
        foreach ($ticket as $key => $val) {
            $val->delete();
        }
        $images = Image_event::where('event_id',$id)->get();
        foreach ($images as $key => $val) {
            $val->delete();
        }
        $data->delete();
        $request->session()->flash('alert', 'Xóa thành công!');
        return redirect()->back();
    }


    public function getListGallery($id)
    {
        $event = Event::find($id);
        $data = Image_event::where('event_id',$id)->get();
        return view('Event::image.gallery',compact('data','event'));
    }

    public function postListGallery(Request $request){

        if($request->file('title')){
            $image = $request->input('event_id').'-'.$request->file('title')->getClientOriginalName();
            $request->file('title')->move('upload/image/event/multible',$image);

            $data = new Image_event();
            $data->title = $image;
            $data->event_id = $request->input('event_id');
            $data->save();
        }else{
            $request->session()->flash('alert', 'Chưa có hình nào để tải lên!');
        }

        return redirect()->back();
     }

    public function deleteGallery(Request $request,$id)
    {
        $data = Image_event::find($id);
        $data->delete();
        $request->session()->flash('alert', 'Xóa thành công!');
        return redirect()->back();
    }

    public function getChart(Request $request, $id)
    {
        $data = Event::find($id);

        $ticket_free = Ticket::where('event_id',$id)->where('ticket_type_id',1)->first();
        $ticket_fee = Ticket::where('event_id',$id)->where('ticket_type_id',2)->first();

        if($ticket_free && $ticket_fee){
            $ticket_free_sell = Ticket_detail::where('ticket_id',$ticket_free->id)->get();
            $total_ticket_free = $ticket_free->quality;
            $ticket_free_sell=$ticket_free_sell->sum('quality');


            $ticket_fee_sell = Ticket_detail::where('ticket_id',$ticket_fee->id)->get();
            $total_ticket_fee = $ticket_fee->quality;
            $ticket_fee_sell=$ticket_fee_sell->sum('quality');
            
            return view('Event::event.chart',compact('data','total_ticket_free','total_ticket_fee','ticket_free','ticket_free_sell','ticket_fee','ticket_fee_sell'));
        }


        if($ticket_free && $ticket_fee == null){
            $ticket_free_sell = Ticket_detail::where('ticket_id',$ticket_free->id)->get();
            $total_ticket_free = $ticket_free->quality;
            $ticket_free_sell=$ticket_free_sell->sum('quality');

            $total_ticket_fee = 50;
            $ticket_fee_sell= 50;
         
            return view('Event::event.chart',compact('data','total_ticket_free','total_ticket_fee','ticket_free','ticket_free_sell','ticket_fee','ticket_fee_sell'));
        }


        if($ticket_free==null && $ticket_fee){
            $ticket_fee_sell = Ticket_detail::where('ticket_id',$ticket_fee->id)->get();
            $total_ticket_fee = $ticket_fee->quality;
            $ticket_fee_sell=$ticket_fee_sell->sum('quality');

            $total_ticket_free = 50;
            $ticket_free_sell= 50;
         
            return view('Event::event.chart',compact('data','total_ticket_free','total_ticket_fee','ticket_free','ticket_free_sell','ticket_fee','ticket_fee_sell'));
        }

        if($ticket_free==null && $ticket_fee==null){
            $total_ticket_free = 50;
            $ticket_free_sell= 50;
            $total_ticket_fee = 50;
            $ticket_fee_sell= 50;
         
            return view('Event::event.chart',compact('data','total_ticket_free','total_ticket_fee','ticket_free','ticket_free_sell','ticket_fee','ticket_fee_sell'));
        }



    }
}