<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie_conseil;
use App\Conseil;
class ConseilController extends Controller
{
    public function conseil(){
        $conseils=Conseil::latest()->get();
        $categories=Categorie_conseil::all();
        $recents=Conseil::latest()->take(4)->get();
        return view("visiteur.conseil", compact('conseils', 'categories' , 'recents'));
    }

    public function create_conseil(){
        $categories = Categorie_conseil::all();
        return view("admin/add_conseil", compact('categories'));
    }

    public function store_categorie(Request $request){
        request()->validate([
            'nom_categorie'=> ['required','string'],
          ]);
        Categorie_conseil::create([
            'nom_categorie'=>$request->nom_categorie,
        ]); 
        return redirect()->back();

    }

    public function store_conseil(Request $request)
    {
        request()->validate([
            'titre'=> ['required','string'],
            'categorie_conseil_id'=> ['required','integer'],
            'description'=> ['required','string'],
            'file'=> ['required','image'],
          ]);
          $imagePath=request('file')->store('uploads','public');
        Conseil::create([
            'titre'=>$request->titre,
            'categorie_conseil_id'=>$request->categorie_conseil_id,
            'description'=>$request->description,
            'file'=>$imagePath,
        ]); 
        return redirect()->back();    
    }

    public function liste_conseil(){
        $conseils = Conseil::all();
        return view("admin/liste_conseil" , compact('conseils'));
    }
// Suppression d'un conseil parti admin
    public function destroy(Conseil $conseil)
    {
        $conseil->delete();
        return back();
    }

    public function edit_conseil(Conseil $conseil){
        $categories = Categorie_conseil::all();
        return view("admin/conseil_update", compact('conseil','categories'));
    }

    public function update(Request $request, Conseil $conseil)
    {
        $data=request()->validate([
            'titre'=> ['required','string'],
            'categorie_conseil_id'=> ['required','integer'],
            'description'=> ['required','string'],
            'file'=> ['image'],
          ]);
        if(request('file')){
            $imagePath=request('file')->store('uploads','public');
            $conseil->update(array_merge($data,['file'=>$imagePath]));
          }
          else{
        
            $conseil->titre=$request->titre;
            $conseil->categorie_conseil_id=$request->categorie_conseil_id;
            $conseil->description=$request->description;
            $conseil->save();
          }
          return redirect()->route('conseil.liste');
    }
    
    public function show_conseil(Conseil $conseil){
        return view("admin/conseil_show"  , compact('conseil'));
    }

    public function show_categorie($categorie_conseil){
        $categories=Categorie_conseil::all();
        $conseils=Conseil::where('categorie_conseil_id', '=',  $categorie_conseil)->get();
        $recents=Conseil::latest()->take(4)->get();
        return view('visiteur.categorie_show',compact('conseils' , 'categories' , 'recents'));
    }

    public function detail_conseil(Conseil $conseil){
        return view("visiteur.conseil_detail"  , compact('conseil'));
    }
}
