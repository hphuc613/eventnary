<?php
namespace HPro\Base\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(){
        # parent::__construct();
    }
    public function outdex(Request $request){
        return view('Home::outdex');
    }
}