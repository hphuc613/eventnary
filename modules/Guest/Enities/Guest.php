<?php

namespace HPro\Guest\Enities;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use HPro\Event\Enities\Event;

class Guest extends Model{
    
	use SoftDeletes;

	protected $table = 'guests';

	protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];
    
    protected $guarded = [];

    public $timestamps = true;



    public  $rules =
	[
		'name'        => 'required',
        'phone'       => 'required|numeric',
        'email'       => 'required|e-mail',
        'password'    => 'required|min:6',
	];


	public $messages = 
	[
        'name.required'     =>   'Tên không được để trống!',
        'phone.required'    =>   'Số điện thoại không được để trống!',
        'phone.numeric'     =>   'Số điện thoại không đúng định dạng!',
        'email.required'    =>   'Email không được để trống!',
        'email.e-mail'      =>   'Vui lòng nhập đúng địa chỉ email!',
        'password.required' =>   'Mật khẩu không được để trống!',
        'password.min'      =>   'Mật khẩu phải từ 6 ký tự!',
	];
   
    public function authorize()
    {
        return true;
    }


    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function event(){
        return $this->belongsTo(Roles::class,'event_id');
    }

}

