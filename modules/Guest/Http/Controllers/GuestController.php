<?php
namespace HPro\Guest\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\Role\Enities\Roles;
use HPro\Guest\Enities\Guest;
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
    
    
    

   
}