<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    protected $guarded;

    function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }


    function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    

}
