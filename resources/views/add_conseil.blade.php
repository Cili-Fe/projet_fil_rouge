@extends('layouts.dash_head')
@section('contenu')
<main id="main">
        <section id="about-us " class="about-us">
          <div class="container" data-aos="fade-up">
                <div class="container ">
                        <div class="row">
                          <div class="col-6">
                              <h6 class="text-center"> <i class="fas text-dark bg-danger fa-plus mr-2 text-center"></i>Conseil</h6>
                              <form method="POST" action="{{route('conseil.store')}}" enctype="multipart/form-data" >
                                @csrf
                                  <div class="card-body">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Titre</label>
                                      <input type="text" name="titre" class="form-control @error('titre') is-invalid @enderror" id="exampleInputEmail1" placeholder="Titre">
                                      @error('titre')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleSelectBorder">Categorie</label>
                                      <select class="custom-select form-control @error('categorie_conseil_id') is-invalid @enderror-border" name="categorie_conseil_id" id="exampleSelectBorder">
                                        <option>Choisir la categorie</option>
                                        @foreach($categories as $categorie)  
                                        <option value="{{$categorie->id}}">{{$categorie->nom_categorie}}</option>
                                    @endforeach
                                      </select>
                                      @error('categorie_conseil_id')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Description</label>
                                      <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="exampleInputPassword1" placeholder="Description">
                                    </div>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="form-group">
   
                                        <div class="custom-file">
                                          <label for="image">Entrez l'image ou video</label>
                                          <input id="image" class="form-control @error('file') is-invalid @enderror" type="file" name="file" placeholder=" " value="{{ old('file') }}">
                                          @error('file')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                        @enderror
                             
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                              </form>  
                          </div>

                          <div class="col-6">
                            <h6 class="text-center"> <i class="fas text-dark bg-danger fa-plus mr-2 text-center"></i>categorie</h6>
                              <form method="POST" action="{{route('categorie.store')}} ">
                                @csrf
                                  <div class="card-body">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Categorie</label>
                                      <input type="text" name="nom_categorie" class="form-control @error('nom_categorie') is-invalid @enderror @error('nom_categorie') is-invalid @enderror" id="exampleInputEmail1" placeholder="Nom de la categorie">
                                      @error('nom_categorie')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                              </form>  .
                          </div>
                        </div>
                </div> 
          </div>
        </section> 
      </main><!-- End #main -->
@endsection

