<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conseil extends Model
{
    protected $fillable = [
        'titre', 'description', 'file','categorie_conseil_id',
    ];

    
public function categorie_conseil()
{
    return $this->belongsTo('App\Categorie_conseil');
}
}
