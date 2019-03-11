<?php
namespace HPro\Base\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BaseController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(){
        # parent::__construct();
        $this->middleware('auth');
    }
    public function index(Request $request){
        return view('Base::index');
    }
}