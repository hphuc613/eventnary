<?php
namespace HPro\Guest\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\Role\Enities\Roles;
use HPro\Guest\Enities\Guest;
use HPro\Event\Enities\Event;
use HPro\Ticket\Enities\Ticket_detail;
use Validator;

class WebController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Guest $model, Request $request)
    {
        $this->model    = $model;
    }
    
    
    public function getCreateGuest($id)
    {
        Authecation();
        $event = Event::find($id);
        $data = Guest::where('event_id',$id)->orderBy('created_at','DESC')->get();
        $representers = Guest::where('event_id',$id)->where('guest_group_id',1)->get();
        return view('Guest::frontend.create',compact('data','event','representers'));
    }

    public function postCreateGuest(Request $request, $id)
    {
        $this->validate($request,$this->model->rules,$this->model->messages);

        if($request->represent_id == null){
            $data = $request->all();
            $data['guest_group_id'] = 1;
            $insert = new Guest($data);
            $insert->save();
            $request->session()->flash('status', 'Thêm mới thành công!');
            return redirect()->back();
        }else{
            $quality = Ticket_detail::find($request->represent_id);
            $quality = $quality->quality;
            $guest = Guest::where('represent_id',$request->represent_id)->get();
            if(count($guest)<$quality){
                $data = $request->all();
                $insert = new Guest($data);
                
                $insert->save();
                
                $request->session()->flash('status', 'Thêm mới thành công!');
                return redirect()->back();
            }else{
                $request->session()->flash('alert', 'Không thêm được nữa vì đã đủ số lượng vé!');
                return redirect()->back();
            }
        }
    }

    public function getEditGuest($id, $event_id)
    {
        Authecation();
        $event = Event::find($event_id);
        $data = Guest::where('event_id',$event->id)->orderBy('created_at','DESC')->get();
        $representers = Guest::where('event_id',$event->id)->where('guest_group_id',1)->get();
        $guest = Guest::find($id);
        return view('Guest::frontend.edit',compact('data','event','representers','guest'));
    }

    public function postEditGuest(Request $request, $id, $event_id)
    {
        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = Guest::find($id);
        $data->update($request->all());
        $request->session()->flash('status', 'Chỉnh sửa thành công!');
        return redirect()->back();
    }

    public function getDeleteGuest(Request $request, $id)
    {
        Authecation();
        $data = Guest::find($id);
        if($data->id == $data->represent_id){
            
            $request->session()->flash('alert', 'Không thể xóa người đại diện!');
            return redirect()->back();
        }else{
            $data->delete();
            $request->session()->flash('alert', 'Xóa thành công!');
            return redirect()->back();
        }
    }



   
}