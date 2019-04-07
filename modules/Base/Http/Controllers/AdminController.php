<?php
namespace HPro\Base\Http\Controllers;

use Mail;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */


    public function __construct(){
        # parent::__construct();
    }
    public function getTestMail(Request $request){
        return view('Base::email.form');
    }

    public function postTestMail(Request $request){

        $array = array(
            'name'=>$request->name, // to $name
            'email'=>$request->email, // $email
            'content'=>$request->content //$content
        );
        Mail::to($request->email)
            ->cc($request->email)
            ->bcc($request->email)
            ->send(new OrderShipped($array));

        /*Mail::send(
            'Base::email.view_send', // email view --> ok
            $array , // data to email view blade
            function($message){//Caí hàm này k có $request!
                $message->to($request->email, 'Visitor') //send to email address --> biến nhận tại đây --> nếu k tổn tại sẽ k gửi dc !!
                    ->subject('Visitor Feedback!');
            }); //sau khi chạy hết func này mới có $email hiểu k? Dạ h em hiểu r
        // BB ku
        */
        Session::flash('flash_message', 'Send message successfully!');

        return view('Base::email.form');
    }
}