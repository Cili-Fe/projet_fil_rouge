@extends('layouts.dash_head')
@section('contenu')
<main id="main">
        <section id="about-us " class="about-us">
          <div class="container" data-aos="fade-up">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="text-center">
                                            <h2>Detail de : {{$conseil->titre}}</h2>
                                          </div>
                                        <div class="  card-body ">
                                            <div class="row">
                                                <div class="col-7">
                                                    <img style="height:360px;" src="{{asset('storage').'/'.$conseil->file}}" class="w-100 h-45 " alt="preuve-recu">
                                                </div>
                                                <div class="col-5 ">
                                                    <div class="list-group ">  
                                                        <div class="list-item text-bold row"><span class="font-weight-bold col-6" >Titre : </span><span >{{$conseil->titre}}  </div><br>
                                                        <div class="list-item text-bold row"><span class="font-weight-bold col-6">Categorie:</span> {{$conseil->categorie_conseil->nom_categorie}}  </div><br>
                                                        <div class="list-item text-bold row"><span class="font-weight-bold col-6">Description:</span> <span class="text-danger font-weight-bold "> {{$conseil->description}}</span></div><br> 
                                                        <div class="list-item text-bold row"><span class="font-weight-bold col-6">Enregistré le: </span>  {{$conseil->created_at->format('d/m/y à H:m')}}</div><br>
                                                        <div class="form-group d-flex float-right col-auto">
                                                            <a  class="btn btn-warning ml-2 " href="{{route('conseil.liste')}}">{{ __('Fermer') }}</a> 
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
          </div>
        </section> 
      </main>
@endsection

