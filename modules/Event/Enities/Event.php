<?php

namespace HPro\Event\Enities;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use HPro\Location\Enities\Ward;
use HPro\Ticket\Enities\Ticket;
use HPro\User\Enities\User;

class Event extends Model
{
	use SoftDeletes;

	protected $table = 'events';

	protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];
    
    protected $guarded = [];

    public $timestamps = true;



    public  $rules =
	[
        'title'        => 'required',
        'start_date'        => 'required',
        'address'        => 'required',
        'phone_contact'        => 'required',
        'ward_id'        => 'required',

	];

	public $messages = 
	[
        'title.required' => 'Tên sự kiện không được để trống!',
        'start_date.required' => 'Chưa nhập thời gian bắt đầu!',
        'address.required' => 'Địa chỉ không được để trống!',
        'phone_contact.required' => 'Số điện thoại liên hệ không được để trống!',
        'ward_id.required' => 'Hãy chọn quận huyện/tỉnh thành!',
	];


    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class,'ward_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function ticket()
    {
        return $this->hasMany(Ticket::class,'event_id');
    }

}

