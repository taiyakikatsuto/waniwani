<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;


    //Userとのリレーション
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
