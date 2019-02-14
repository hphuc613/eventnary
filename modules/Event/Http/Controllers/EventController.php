<?php
namespace HPro\Event\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class EventController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(){
        # parent::__construct();
    }
    public function list(Request $request){
        return view('Event::frontend.event.event_list');
    }

    public function detail(Request $request){
        return view('Event::frontend.event.event_detail');
    }
}