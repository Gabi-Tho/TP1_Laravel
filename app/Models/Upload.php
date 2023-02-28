<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'path',
        'user_id',
    ];

    public function uploadHasUser(){

        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }


}
