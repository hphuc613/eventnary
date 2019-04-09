<?php
namespace HPro\Ticket\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\Event\Enities\Event;
use HPro\Event\Enities\Image_event;
use HPro\Category\Enities\Event_type;
use HPro\Ticket\Enities\Ticket;
use HPro\Ticket\Enities\Ticket_detail;
use HPro\Customer\Enities\Customer;
use HPro\User\Enities\User;
use HPro\Guest\Enities\Guest;
use Validator;

use Mail;
use App\Mail\OrderShipped;

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

    public function getEditTicket(Request $request, $slug_event)
    {
        $event = Event::where('slug',$slug_event)->first();
        $data = Ticket::where('event_id',$event->id)->get();
        $ticket = Ticket::where('event_id',$event->id)->first();
        return view('Ticket::frontend.ticket.ticket_edit',compact('data','ticket','event'));

    }

    public function postEditTicket(Request $request,$id)
    {
        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = Ticket::find($id);
        $data->update($request->all());
        $data->save();
        $request->session()->flash('status', 'Chỉnh sửa thành công!');
        return redirect()->back();
    }

    public function deleteTicket(Request $request, $slug_event)
    {
        $event = Event::where('slug',$slug_event)->first();
        $data = Ticket::where('event_id',$event->id)->first();
        $data->delete();
        $request->session()->flash('alert', 'Xóa thành công!');
        return redirect()->back();
    }


    public function postGetTicket(Request $request, $id)
    {

        $this->validate($request,[
                                'name'        => 'required',
                                'phone'       => 'required',
                                'email'       => 'e-mail',
                                ]
                                ,[
                                'name.required' => 'Thông tin vé: Tên không được để trống!',
                                'phone.required' => 'Thông tin vé: Số điện thoại không được để trống!',
                                'email.e-mail' => 'Nhập chưa đúng định dạng email!',
                                ]);


        $ticket = Ticket::find($id);
        $ticket->quality = $ticket->quality - $request->quality;

        $ticket_detail = new Ticket_detail();
        $ticket_detail->name = $request->name;
        $ticket_detail->phone = $request->phone;
        $ticket_detail->email = $request->email;
        $ticket_detail->ticket_id = $ticket->id;
        $ticket_detail->quality = $request->quality;
        $ticket_detail->total_price = $request->quality*$ticket->price;
        $ticket_detail->buy_date = date('Y-m-d');
        $ticket_detail->payment_method = $request->payment;

        $guest = new Guest();
        $guest->name = $request->name;
        $guest->phone = $request->phone;
        $guest->email = $request->email;
        $guest->event_id = $ticket->event->id;

        $ticket_detail->save();
        $guest->save();
        $ticket->update();

        $array = array(
            'name'=> $request->name,
            'email'=> $request->email,
            'ticket'=> $ticket->title,
            'quality'=> $request->quality,
            'price'=> $request->quality*$ticket->price,
            'type' => $ticket->type->title,
            'event'=> $ticket->event->title,
            'event_id'=> $ticket->event->id,
            'address' => $ticket->event->address.', '.$ticket->event->ward->title.', '.$ticket->event->ward->district->title.', '.$ticket->event->ward->district->city->title,
        );
        Mail::to($request->email)
            ->cc($request->email)
            ->bcc($request->email)
            ->send(new OrderShipped($array));

        $request->session()->flash('status', 'Mua vé thành công! Bạn hãy đợi Email từ chúng tôi!');
        return redirect()->back();
    }
   
}