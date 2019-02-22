<?php

namespace HPro\User\Enities;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use HPro\Role\Enities\Roles;

class User extends Model
{
	use SoftDeletes;

	protected $table = 'users';

	protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];
    
    protected $guarded = [];

    public $timestamps = true;



    public  $rules =
	[
		'name'        => 'required',
        'phone'        => 'required|unique:users|integer|max:10,',
        'email'        => 'required|unique:users',
        'password'        => 'required|min:6',
		'role_id'        => 'required',
	];

	public $messages = 
	[
        'name.required' => 'Tên không được để trống!',
        'phone.required' => 'Số điện thoại không được để trống!',
        'phone.unique' => 'Số điện thoại không được trùng!',
        'phone.integer' => 'Số điện thoại không đúng định dạng!',
        'email.required' => 'Email không được để trống!',
        'email.unique' => 'Email không được trùng!',
        'password.required' => 'Mật khẩu không được để trống!',
        'password.min' => 'Mật khẩu phải từ 6 ký tự!',
		'role_id.required' => 'Vai trò không được để trống!',
	];


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

}

