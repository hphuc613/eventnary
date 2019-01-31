<?php
namespace HPro\Home\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HomeController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(){
        # parent::__construct();
    }
    public function index(Request $request){
        return view('Home::home.home');
    }
}