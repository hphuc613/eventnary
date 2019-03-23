<?php

namespace HPro\Ticket\Enities;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use HPro\User\Enities\User;
use HPro\Event\Enities\Event;
use HPro\Category\Enities\Ticket_type;

class Ticket_detail extends Model
{
	use SoftDeletes;

	protected $table = 'ticket_details';

	protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];
    
    protected $guarded = [];

    public $timestamps = true;



    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class,'ticket_id');
    }

}

