<?php
namespace HPro\Event\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\Event\Enities\Event;
use Validator;

class AdminController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Event $model, Request $request)
    {
        $this->model    = $model;
    }
    
    public function getSearchEvent(Request $request){
        $page = 8;

        $data = Event::join('wards','wards.id','=','events.ward_id')
                            ->join('districts','districts.id','=','wards.district_id')
                            ->join('cities','cities.id','=','districts.city_id')

                            ->select('events.id','events.title','events.ward_id','events.status','events.user_id','events.current_image','events.start_date','events.end_date')
                            ->Where('wards.title','like','%'.$request->key.'%')
                            ->orWhere('districts.title','like','%'.$request->key.'%')
                            ->orWhere('cities.title','like','%'.$request->key.'%')

                            ->orwhere('events.title','like','%'.$request->key.'%')
                            ->orWhere('events.title',$request->key)->orderBy('events.created_at','DESC')->paginate($page);


        return view('Event::event.list',compact('data'))
                    ->with('i', ($request->input('page', 1) - 1) * $page);
    }

    public function statusWait(Request $request)
    {
        $page = 8;

        $data = Event::where('status',2)->orderBy('created_at','DESC')->paginate($page);

        return view('Event::event.list',compact('data'))
                    ->with('i', ($request->input('page', 1) - 1) * $page);
    }

    public function statusActive(Request $request)
    {
        $page = 8;

        $data = Event::where('status',1)->orderBy('created_at','DESC')->paginate($page);

        return view('Event::event.list',compact('data'))
                    ->with('i', ($request->input('page', 1) - 1) * $page);
    }

    public function statusStop(Request $request)
    {
        $page = 8;

        $data = Event::where('status',0)->orderBy('created_at','DESC')->paginate($page);

        return view('Event::event.list',compact('data'))
                    ->with('i', ($request->input('page', 1) - 1) * $page);
    }

   
}