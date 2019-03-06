<?php

namespace HPro\Location\Enities;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use HPro\Location\Enities\City;
use HPro\Location\Enities\Ward;

class District extends Model
{
    use SoftDeletes;

    protected $table = 'districts';

    protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];
    
    protected $guarded = [];

    public $timestamps = true;



    public  $rules =
    [
        'title'        => 'required',
        'description'        => '',
        'city_id'        => 'required',
    ];

    public $messages = 
    [
        'title.required' => 'Tên không được để trống!',
        'city_id.required' => 'Vui lòng chọn thành phố!',
    ];


    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function ward(){
        return $this->hasMany(Ward::class,'district_id','id');
    }

    public function city(){
        return $this->belongsTo(City::class,'city_id');
    }

}

