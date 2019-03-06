<?php

namespace HPro\Location\Enities;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use HPro\Location\Enities\District;
use HPro\Event\Enities\Event;

class Ward extends Model
{
    use SoftDeletes;

    protected $table = 'wards';

    protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];
    
    protected $guarded = [];

    public $timestamps = true;



    public  $rules =
    [
        'title'        => 'required',
        'description'        => '',
        'district_id'   => 'required',
    ];

    public $messages = 
    [
        'title.required' => 'Tên không được để trống!',
        'district_id.required' => 'Vui lòng chọn quận huyện!',
    ];


    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function district(){
        return $this->belongsTo(District::class,'district_id');
    }

    public function event(){
        return $this->hasMany(Event::class,'ward_id','id');
    }
}

