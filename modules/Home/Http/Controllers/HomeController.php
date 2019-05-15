<?php
namespace HPro\Home\Http\Controllers;

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
use HPro\User\Enities\User;
use Illuminate\Support\Facades\Auth as Auth;

class HomeController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Event $model, Request $request)
    {
        $this->model    = $model;
    }
    
    
    public function getHome(Request $request){
        $events = Event::Where('status',1)->orderBy('created_at','DESC')->get();
        return view('Home::home.home',compact('events'));
    }

    public function getHomeLogin(Request $request){
        if(Auth::guard('collaborator')->check()){
            return redirect()->back();
        }else
            return view('Home::home.login');
    }

    public function postHomeLogin(Request $request){
        
        $login = [
                        'email' => $request->input('account'),
                        'password' => $request->input('password'),
                        'role_id' => 2
                    ];

        $login2 = [
                        'phone' => $request->input('account'),
                        'password' => $request->input('password'),
                        'role_id' => 2
                    ];

        $login3 = [
                        'email' => $request->input('account'),
                        'password' => $request->input('password'),
                        'role_id' => 1
                    ];

        $login4 = [
                        'phone' => $request->input('account'),
                        'password' => $request->input('password'),
                        'role_id' => 1
                    ];
        
        if (Auth::guard('collaborator')->attempt($login) or Auth::guard('collaborator')->attempt($login2)
            or Auth::guard('collaborator')->attempt($login3) or Auth::guard('collaborator')->attempt($login4)) {
            return redirect()->route('get.home.index');
        }else{
            $request->session()->flash('alert', 'Sai tên đăng nhập hoặc mật khẩu!');
            return redirect()->back()->withInput();
        }
    }

    public function postCurrentLogin(Request $request){
        
        $login = [
                        'email' => $request->input('account'),
                        'password' => $request->input('password'),
                        'role_id' => 2
                    ];

        $login2 = [
                        'phone' => $request->input('account'),
                        'password' => $request->input('password'),
                        'role_id' => 2
                    ];

        $login3 = [
                        'email' => $request->input('account'),
                        'password' => $request->input('password'),
                        'role_id' => 1
                    ];

        $login4 = [
                        'phone' => $request->input('account'),
                        'password' => $request->input('password'),
                        'role_id' => 1
                    ];
        
        if (Auth::guard('collaborator')->attempt($login) or Auth::guard('collaborator')->attempt($login2)
            or Auth::guard('collaborator')->attempt($login3) or Auth::guard('collaborator')->attempt($login4)) {
            return redirect()->back();
        }else{
            $request->session()->flash('alert', 'Sai tên đăng nhập hoặc mật khẩu!');
            return redirect()->back()->withInput();
        }
    }

    

    public function getHomeLogout(Request $request){
        Auth::guard('collaborator')->logout();
        return redirect()->route('get.home.index');
    }


   

    // public function getInfoEvent(Request $request){
    //     $data = Event::all();
    //     return view('Event::frontend.list',compact('data'));
    // }


    // public function getCreate(Request $request){
    //     $cities = City::all();
    //     $event_type = Event_type::all();
    //     return view('Event::event.create',compact('cities','event_type'));
    // }

    // public function postCreate(Request $request){


    //     $this->validate($request,$this->model->rules,$this->model->messages);
    //     $data = $request->all();
    //     $insert = new Event($data);
    //     $insert->save();

    //     $event = Event::orderBy('created_at','DESC')->first();
    //     $image = $event->id.'-'.$request->file('current_image')->getClientOriginalName();
    //     $request->file('current_image')->move('upload/image/event',$image);
    //     $event->current_image = $image;
    //     $event->update();
    //     //$request->session()->flash('status', 'Thêm mới thành công!');
    //     return redirect()->route('get.create.ticket',$event->id);
    // }

    // public function getEdit(Request $request, $id){
    //     $data = Event::find($id);
    //     $cities = City::all();
    //     $districts = District::all();
    //     $wards = Ward::all();
    //     $event_type = Event_type::all();
    //     return view('Event::event.edit',compact('data','cities','districts','wards','event_type'));
    // }

    // public function postEdit(Request $request, $id){
    //     $this->validate($request,$this->model->rules,$this->model->messages);
    //     $data = Event::find($id);
    //     $data->update($request->all());
    //     $data->save();

    //     if($request->file('current_image')){
    //         $image = $data->id.'-'.$request->file('current_image')->getClientOriginalName();
    //         $request->file('current_image')->move('upload/image/event',$image);
    //         $data->current_image = $image;
    //         $data->update();
    //     }
    //     $request->session()->flash('status', 'Chỉnh sửa thành công!');
    //     return redirect()->back();
    // }

    // public function delete(Request $request, $id)
    // {
    //     $data = Event::find($id);
    //     $ticket = Ticket::where('event_id',$id)->get();
    //     foreach ($ticket as $key => $val) {
    //         $val->delete();
    //     }
    //     $images = Image_event::where('event_id',$id)->get();
    //     foreach ($images as $key => $val) {
    //         $val->delete();
    //     }
    //     $data->delete();
    //     $request->session()->flash('alert', 'Xóa thành công!');
    //     return redirect()->back();
    // }


    // public function getListGallery($id)
    // {
    //     $event = Event::find($id);
    //     $data = Image_event::where('event_id',$id)->get();
    //     return view('Event::image.gallery',compact('data','event'));
    // }

    // public function postListGallery(Request $request){

    //     $this->validate($request,$this->model->rules,$this->model->messages);
    //     $image = $request->input('event_id').'-'.$request->file('title')->getClientOriginalName();
    //     $request->file('title')->move('upload/image/event/multible',$image);

    //     $data = new Image_event();
    //     $data->title = $image;
    //     $data->event_id = $request->input('event_id');
    //     $data->save();

    //     return redirect()->back();
    //  }

    // public function deleteGallery(Request $request,$id)
    // {
    //     $data = Image_event::find($id);
    //     $data->delete();
    //     $request->session()->flash('alert', 'Xóa thành công!');
    //     return redirect()->back();
    // }

   
}