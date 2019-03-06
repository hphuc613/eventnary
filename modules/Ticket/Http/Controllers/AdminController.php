<?php
namespace HPro\Role\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\Role\Enities\Roles;
use Validator;

class AdminController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Roles $model, Request $request)
    {
        $this->model    = $model;
    }
    
    
   
}