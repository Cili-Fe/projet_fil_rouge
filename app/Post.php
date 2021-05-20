<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'titre', 'message','user_id',
    ];
    public function user(){
        return $this ->belongsTo('App\User');
    }

    public function comments(){
        return $this ->morphMany('App\Comment', 'commentable' )->latest();
    }
}
