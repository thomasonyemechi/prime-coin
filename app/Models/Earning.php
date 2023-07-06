<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Earning extends Model
{
    use HasFactory;
    protected $guarded;

    public function downliner()
    {
        return $this->belongsTo(User::class, 'downline');
    }
}
