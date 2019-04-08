<?php

namespace HPro\Ticket\Enities;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use HPro\User\Enities\User;
use HPro\Event\Enities\Event;
use HPro\Category\Enities\Ticket_type;

class Ticket extends Model
{
	use SoftDeletes;

	protected $table = 'tickets';

	protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];
    
    protected $guarded = [];

    public $timestamps = true;



    public  $rules =
	[
		'title'        => 'required',
        'price'        => 'required',
        'quality'        => 'required',
		'start_selling'        => 'required',
	];

	public $messages = 
	[
        'title.required' => 'Tên không được để trống!',
        'price.required' => 'Giá không được để trống!',
        'quality.required' => 'Số lượng vé không được để trống!',
		'start_selling.required' => 'Ngày bắt đầu bán không được để trống!',
	];


    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function event()
    {
        return $this->belongsTo(Event::class,'event_id');
    }

    public function type()
    {
        return $this->belongsTo(Ticket_type::class,'ticket_type_id');
    }

}

