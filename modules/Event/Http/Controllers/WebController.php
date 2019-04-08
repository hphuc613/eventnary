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

class WebController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Event $model, Request $request)
    {
        $this->model    = $model;
    }
    
    
    public function getListEvent(Request $request){
        $data = Event::where('status',1)->orderBy('id','DESC')->paginate(5);
        return view('Event::frontend.event.event_list',compact('data'));
    }

    public function getInfoEvent(Request $request, $id){
        $data = Event::find($id);
        $gallery = Image_event::where('event_id',$id)->get();
        $ticket_free = Ticket::where('event_id',$id)->where('ticket_type_id',1)->where('status',1)->first();
        $ticket_fee = Ticket::where('event_id',$id)->where('ticket_type_id',2)->where('status',1)->first();
        return view('Event::frontend.event.event_detail',compact('data','gallery','ticket_free','ticket_fee'));
    }

    public function searchEvent(Request $request)
    {
        $data = Event::join('wards','wards.id','=','events.ward_id')
                            ->join('districts','districts.id','=','wards.district_id')
                            ->join('cities','cities.id','=','districts.city_id')

                            ->select('events.id','events.title','events.ward_id','events.status','events.user_id','events.current_image','events.start_date','events.end_date','events.description')
                            ->Where('wards.title','like','%'.$request->key.'%')
                            ->orWhere('districts.title','like','%'.$request->key.'%')
                            ->orWhere('cities.title','like','%'.$request->key.'%')

                            ->orwhere('events.title','like','%'.$request->key.'%')
                            ->orWhere('events.title',$request->key)
                            ->where('status',1)->paginate(5);

        return view('Event::frontend.event.event_list',compact('data'));
    }

    public function getCreateEvent(Request $request)
    {   
        $cities = City::get();
        $type = Event_type::get();
        return view('Event::frontend.event.event_create',compact('cities','type'));
    }

    public function postCreateEvent(Request $request){


        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = $request->all();
        $insert = new Event($data);
        $insert->save();

        $event = Event::orderBy('created_at','DESC')->first();
            if($request->file('current_image')){
            $image = $event->id.'-'.$request->file('current_image')->getClientOriginalName();
            $request->file('current_image')->move('upload/image/event',$image);
            $event->current_image = $image;
            $event->slug = $event->id.'-'.slug($event->title);
            $event->update();
        }else{
            $event->slug = $event->id.'-'.slug($event->title);
            $event->update();   
        }
        
        $request->session()->flash('status', 'Thêm mới thành công!');
        return redirect()->route('get.create.ticket_home',$event->slug);
    }

    public function getEditEvent(Request $request, $slug, $id)
    {   
        $data = Event::find($id);
        $type = Event_type::get();
        $cities = City::get();
        $districts = District::where('city_id',$data->ward->district->city->id)->get();
        $wards = Ward::where('district_id',$data->ward->district->id)->get();
        return view('Event::frontend.event.event_edit',compact('cities','wards','districts','type','data'));
    }

    public function postEditEvent(Request $request, $slug, $id){

        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = Event::find($id);
        $data->update($request->all());

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

    public function getListGalleryEvent($id)
    {
        $event = Event::find($id);
        $data = Image_event::where('event_id',$id)->get();
        return view('Event::image.event_gallery',compact('data','event'));
    }

    public function postListGalleryEvent(Request $request){

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

    public function deleteGalleryEvent(Request $request,$id)
    {
        $data = Image_event::find($id);
        $data->delete();
        $request->session()->flash('alert', 'Xóa thành công!');
        return redirect()->back();
    }

    public function getChartEvent(Request $request, $id)
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
            
            return view('Event::frontend.event.event_chart',compact('data','total_ticket_free','total_ticket_fee','ticket_free','ticket_free_sell','ticket_fee','ticket_fee_sell'));
        }


        if($ticket_free && $ticket_fee == null){
            $ticket_free_sell = Ticket_detail::where('ticket_id',$ticket_free->id)->get();
            $total_ticket_free = $ticket_free->quality;
            $ticket_free_sell=$ticket_free_sell->sum('quality');

            $total_ticket_fee = 50;
            $ticket_fee_sell= 50;
         
            return view('Event::frontend.event.event_chart',compact('data','total_ticket_free','total_ticket_fee','ticket_free','ticket_free_sell','ticket_fee','ticket_fee_sell'));
        }


        if($ticket_free==null && $ticket_fee){
            $ticket_fee_sell = Ticket_detail::where('ticket_id',$ticket_fee->id)->get();
            $total_ticket_fee = $ticket_fee->quality;
            $ticket_fee_sell=$ticket_fee_sell->sum('quality');

            $total_ticket_free = 50;
            $ticket_free_sell= 50;
         
            return view('Event::frontend.event.event_chart',compact('data','total_ticket_free','total_ticket_fee','ticket_free','ticket_free_sell','ticket_fee','ticket_fee_sell'));
        }

        if($ticket_free==null && $ticket_fee==null){
            $total_ticket_free = 50;
            $ticket_free_sell= 50;
            $total_ticket_fee = 50;
            $ticket_fee_sell= 50;
         
            return view('Event::frontend.event.event_chart',compact('data','total_ticket_free','total_ticket_fee','ticket_free','ticket_free_sell','ticket_fee','ticket_fee_sell'));
        }



    }
    
    

   
}