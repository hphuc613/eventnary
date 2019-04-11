<?php

namespace HPro\Category\Enities;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guest_group extends Model
{
	use SoftDeletes;

	protected $table = 'guest_groups';

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

    public function user(){
        return $this->hasMany(User::class,'role_id','id');
    }

}

