<?php
namespace HPro\Dashboard\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;

class AdminController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(){
        // $this->middleware('auth');
    }

    public function index(Request $request){
        return view('Dashboard::home.home');
    }

    public function getLogin(Request $request){

        return view('Dashboard::login.login');
    }

    public function postLogin(Request $request){

        $login = [
                        'email' => $request->input('email'),
                        'password' => $request->input('password'),
                        'role_id' => 1
                    ];
        
        if (Auth::guard()->attempt($login , $request->has('remember'))) {
            return redirect()->route('home.admin');
        }else{
            $request->session()->flash('alert','Nhập sai Email hoặc Mật khẩu!');
            return redirect()->back();
        }
    }

}