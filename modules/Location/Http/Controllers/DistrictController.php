<?php
namespace HPro\Location\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\Location\Enities\District;
use HPro\Location\Enities\City;
use Validator;

class DistrictController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(District $model, Request $request)
    {
        $this->model    = $model;
        $this->middleware('auth');
    }
    
    
    // Thành phố
    public function getList(Request $request){
        $data = District::all();
        return view('Location::district.list',compact('data'));
    }

    public function getCreate(Request $request){
        $cities = City::all();
        $districts = District::all();
        return view('Location::district.create',compact('cities','districts'));
    }

    public function postCreate(Request $request){

        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = $request->all();
        $insert = new District($data);
        $insert->save();
        $request->session()->flash('status', 'Thêm mới thành công!');
        return redirect()->route('get.list.district');
    }

    public function getEdit(Request $request, $id){
        $cities = City::all();
        $data = District::find($id);
        $districts = District::all();
        return view('Location::district.edit',compact('data','cities','districts'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = District::find($id);
        $data->update($request->all());
        $data->save();
        $request->session()->flash('status', 'Chỉnh sửa thành công!');
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        $data = District::find($id);
        $data->delete();
        $request->session()->flash('alert', 'Xóa thành công!');
        return redirect()->back();
    }

}