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
        $data = Event::where('title','like','%'.$request->key.'%')
                            ->orWhere('title',$request->key)->paginate($page);
            return view('Event::event.list',compact('data'))
                        ->with('i', ($request->input('page', 1) - 1) * $page);
    }

   
}