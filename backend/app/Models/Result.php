<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'model_id',
        'play_type',
        'point',
        'bitten',
        'file_name',
    ];

    //Userとのリレーション
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
