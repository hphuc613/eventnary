<?php
namespace HPro\User\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\User\Enities\User;
use Validator;

class AdminController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(User $model, Request $request)
    {
        $this->model    = $model;
    }
    
    

   
}