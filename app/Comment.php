<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $guarded = []; //comme le fillable

    public function user(){
        return $this ->belongsTo('App\User');
    }
    public function commentable(){
        return $this ->morphTo(); // pour dire que ce model comementrendu aura plusieur model parent
    }

    public function comments(){
        return $this ->morphMany('App\Comment', 'commentable' )->latest(); // a suite de morphto
    }
}
