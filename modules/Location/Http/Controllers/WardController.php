<?php
namespace HPro\Location\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\Location\Enities\Ward;
use HPro\Location\Enities\District;
use HPro\Location\Enities\City;
use HPro\Role\Enities\Roles;
use Validator;

class WardController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Ward $model, Request $request)
    {
        $this->model    = $model;
        $this->middleware('auth');
    }
    
    
    // Thành phố
    public function getList(Request $request){
        $data = Ward::all();
        return view('Location::ward.list',compact('data'));
    }

    public function getCreate(Request $request){
        $cities = City::all();
        $districts = District::all();
        $wards = Ward::all();
        return view('Location::ward.create',compact('cities','districts','wards'));
    }

    public function postCreate(Request $request){

        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = $request->all();
        $insert = new Ward($data);
        $insert->save();
        $request->session()->flash('status', 'Thêm mới thành công!');
        return redirect()->route('get.list.ward');
    }

    public function getEdit(Request $request, $id){
        $data = Ward::find($id);
        $cities = City::all();
        $districts = District::all();
        $wards = Ward::all();
        return view('Location::ward.edit',compact('data','cities','districts','wards'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = Ward::find($id);
        $data->update($request->all());
        $data->save();
        $request->session()->flash('status', 'Chỉnh sửa thành công!');
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        $data = Ward::find($id);
        $data->delete();
        $request->session()->flash('alert', 'Xóa thành công!');
        return redirect()->back();
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