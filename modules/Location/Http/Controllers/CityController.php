<?php
namespace HPro\Location\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\Location\Enities\City;
use HPro\Role\Enities\Roles;
use Validator;

class CityController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(City $model, Request $request)
    {
        $this->model    = $model;
        $this->middleware('auth');
    }
    
    
    // Thành phố
    public function getList(Request $request){
        $data = City::all();
        return view('Location::city.list',compact('data'));
    }

    public function getCreate(Request $request){
        $cities = City::all();
        return view('Location::city.create',compact('cities'));
    }

    public function postCreate(Request $request){

        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = $request->all();
        $insert = new City($data);
        $insert->save();
        $request->session()->flash('status', 'Thêm mới thành công!');
        return redirect()->back();
    }

    public function getEdit(Request $request, $id){
        $data = City::find($id);
        $cities = City::all();
        return view('Location::city.edit',compact('data','cities'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = City::find($id);
        $data->update($request->all());
        $data->save();
        $request->session()->flash('status', 'Chỉnh sửa thành công!');
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        $data = City::find($id);
        $data->delete();
        $request->session()->flash('alert', 'Xóa thành công!');
        return redirect()->back();
    }
}