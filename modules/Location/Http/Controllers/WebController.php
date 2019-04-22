<?php
namespace HPro\Location\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\Location\Enities\Ward;
use HPro\Location\Enities\District;
use HPro\Location\Enities\City;
use HPro\Role\Enities\Roles;
use Validator;

class WebController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Ward $model, Request $request)
    {
        $this->model    = $model;
    }
    
    

    public function ajaxOptionDistrict($id){
        $data = District::where('city_id',$id)->get();
        echo "<option value='' >--Chọn--</option>";
        foreach ($data as $key => $val) {
            echo '<option value="'.$val->id.'" >'.$val->title.'</option>';
        }
    }

    public function ajaxOptionWard($id)
    {
        $data = Ward::where('district_id',$id)->get();
        echo "<option value='' >--Chọn--</option>";
        foreach ($data as $key => $val) {
            echo '<option value="'.$val->id.'" >'.$val->title.'</option>';
        }
    }
    
}