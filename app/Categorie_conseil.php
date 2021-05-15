<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie_conseil extends Model
{
    protected $fillable = [
        'nom_categorie',
    ];
    
public function conseils()
{
    return $this->hasMany('App\Conseil');
}
}
