@extends('layouts.dash_head')
@section('contenu')
<main id="main">
        <section id="about-us " class="about-us">
          <div class="container" data-aos="fade-up">
                <div class="container ">
                        <div class="row">
                          <div class="col-6">
                              <h6 class="text-center"> <i class="fas text-dark bg-danger fa-plu mr-2 text-center"></i>modification de : {{$conseil->titre}}</h6>
                              <form method="POST" action="{{route('update.conseil' , $conseil->id)}}" enctype="multipart/form-data" >
                                @csrf
                                @method('PATCH')
                                  <div class="card-body">
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Titre</label>
                                      <input type="text" name="titre" class="form-control" value="{{ old('titre')  ?? $conseil->titre }}">
                                    </div>

                                    <div class="form-group">
                                      <label for="exampleSelectBorder">Categorie</label>
                                      <select class="form-control custom-select col-8" name="categorie_conseil_id" value="{{ old('categorie_conseil_id') }}" >
                                        <option >choisir</option>
                                        @foreach($categories as $categorie)  
                                          <option value="{{$categorie->id}} " {{$conseil->categorie_conseil_id == $categorie->id ? 'selected' : ''}}>{{$categorie->nom_categorie}}</option>
                                        @endforeach
                                    </select>
                                    
                                    </div>

                                      <div class="form-group" >
                                        <label for="exampleInputPassword1">Description</label>
                                        <input type="text" name="description" value="{{ old('description')  ?? $conseil->description }}" class="form-control" >
                                      </div>
                                     

                                    <div class="form-group">
                                        <div class="custom-file">
                                          <label for="image">Entrez l'image ou video</label>
                                          <input  class="form-control"  type="file" name="file" placeholder=" " value="{{ old('file')}}">
                                        </div>
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Modifier</button>
                                  </div>
                              </form>  
                          </div>
                        </div>
                </div> 
          </div>
        </section> 
      </main>
@endsection

