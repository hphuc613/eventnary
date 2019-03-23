<?php

namespace HPro\Customer\Enities;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use HPro\Role\Enities\Roles;
use HPro\User\Enities\User;

class Customer extends Model{
    
	use SoftDeletes;

	protected $table = 'customers';

	protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];
    
    protected $guarded = [];

    public $timestamps = true;



    public  $rules =
	[
		'name'        => 'required',
        'phone'       => 'required|numeric|unique:users',
        'phone'       => 'required|numeric|unique:users',
        'email'       => 'required|e-mail|unique:users',
        'password'    => 'required|min:6',
		'role_id'     => 'required',
	];


	public $messages = 
	[
        'name.required'     =>   'Tên không được để trống!',
        'phone.required'    =>   'Số điện thoại không được để trống!',
        'phone.unique'      =>   'Số điện thoại không được trùng!',
        'phone.numeric'     =>   'Số điện thoại không đúng định dạng!',
        'email.required'    =>   'Email không được để trống!',
        'email.unique'      =>   'Email không được trùng!',
        'email.e-mail'      =>   'Vui lòng nhập đúng địa chỉ email!',
        'password.required' =>   'Mật khẩu không được để trống!',
        'password.min'      =>   'Mật khẩu phải từ 6 ký tự!',
		'role_id.required'  =>   'Chọn vai trò!',
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

    public function role(){
        return $this->belongsTo(Roles::class,'role_id');
    }

    public function user(){
        return $this->hasOne(User::class,'user_id');
    }

}

