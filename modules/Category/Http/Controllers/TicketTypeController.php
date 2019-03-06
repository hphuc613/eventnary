<?php
namespace HPro\Category\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HPro\Category\Enities\Ticket_type;
use Validator;

class TicketTypeController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Ticket_type $model, Request $request)
    {
        $this->model    = $model;
    }
    
    
    public function getList(Request $request){
        $data = Ticket_type::all();
        return view('Category::ticket.list',compact('data'));
    }


    public function getCreate(Request $request){
        return view('Category::ticket.create');
    }

    public function postCreate(Request $request){

        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = $request->all();
        $insert = new Ticket_type($data);
        $insert->save();
        $request->session()->flash('status', 'Thêm mới thành công!');
        return redirect()->route('get.list.tickettype');
    }

    public function getEdit(Request $request, $id){
        $data = Ticket_type::find($id);
        return view('Category::ticket.edit',compact('data'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,$this->model->rules,$this->model->messages);
        $data = Ticket_type::find($id);
        $data->update($request->all());
        $data->save();
        $request->session()->flash('status', 'Chỉnh sửa thành công!');
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        $data = Ticket_type::find($id);
        $data->delete();
        $request->session()->flash('alert', 'Xóa thành công!');
        return redirect()->back();
    }

   
}