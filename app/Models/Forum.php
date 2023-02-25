<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'article',
        'forum_user_id',
    ];

    public function ArticleHasUser(){
        return $this->hasOne('App\Models\User', 'id', 'forum_user_id');
    }


}
