<?php

namespace HPro\Role\Enities;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roles extends Model
{
	use SoftDeletes;

	protected $table = 'roles';

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

