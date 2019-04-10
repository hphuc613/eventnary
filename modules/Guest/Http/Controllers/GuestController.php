<?php
namespace HPro\Guest\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\Role\Enities\Roles;
use HPro\Guest\Enities\Guest;
use HPro\Event\Enities\Event;
use Validator;

class GuestController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Guest $model, Request $request)
    {
        $this->model    = $model;
        $this->middleware('auth');
    }
    
    
    public function getList($id)
    {
        $event = Event::find($id);
        $data = Guest::where('event_id',$id)->orderBy('created_at','DESC')->get();
        return view('Guest::guest.create',compact('data','event'));
    }

   
}