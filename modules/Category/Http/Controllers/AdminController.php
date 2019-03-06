<?php
namespace HPro\Location\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\Location\Enities\District;
use Validator;

class AdminController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->model    = $model;
    }
    
    public function ajaxOptionDistrict($id){
    	$data = District::where('city_id',$id)->get();
    	echo "<option value='' >--Chọn--</option>";
    	foreach ($data as $key => $val) {
    		echo '<option value="'.$val->id.'" >'.$val->title.'</option>';
    	}
    }
   
}