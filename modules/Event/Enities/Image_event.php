<?php

namespace HPro\Event\Enities;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use HPro\Location\Enities\Ward;
use HPro\Ticket\Enities\Ticket;
use HPro\Event\Enities\Event;

class Image_event extends Model
{
	use SoftDeletes;

	protected $table = 'image_events';

	protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];
    
    protected $guarded = [];

    public $timestamps = true;



    public  $rules =
	[
		'title'        => 'required',
		'description'        => '',
	];

	public $messages = 
	[
		'title.required' => 'Không có hình được chọn',
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


}

