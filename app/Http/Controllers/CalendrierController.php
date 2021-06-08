<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendrierController extends Controller
{
    public function affiche_calendrier(){
        return view("visiteur.calendrier");
    }
}
