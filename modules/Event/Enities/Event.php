<?php

namespace HPro\Event\Enities;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
		'description'        => '',
	];

	public $messages = 
	[
		'title.required' => 'Tên không được để trống!',
	];


    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

}

