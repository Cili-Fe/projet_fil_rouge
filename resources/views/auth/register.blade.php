
@extends('layouts.menu')

@section('contenu')
<main id="main">
        <section id="breadcrumbs" class="breadcrumbs">
                <div class="container">
          
                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Compte</h2>
                        <ol>
                          <li><a href="{{route('accueil')}}">Accueil</a></li>
                          <li>S'incrire</li>
                        </ol>
                      </div> 
                </div>
              </section><!-- End Breadcrumbs -->
        <section id="about-us" class="about-us" >
          <div class="container" data-aos="fade-up">
          <div class="container ">      
        <div class="row justify-content-center">
        <div class="col-9">
            <div class="card">
                <div class="card-header text-center">{{ __('Créer un compte') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('users.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group row"> 
                                     <div class="col">
                                        <input id="nom" type="text" placeholder="Nom" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" autocomplete="nom" autofocus>
                                        @error('nom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group row"> 
                                    <div class="col">
                                        <input id="Prenom" placeholder="Prénom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" autocomplete="prenom" autofocus>
                                        @error('prenom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                                            
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group row"> 
                                    <div class="col">
                                        <input id="pseudo" placeholder="Pseudo" type="text" class="form-control @error('pseudo') is-invalid @enderror" name="pseudo" value="{{ old('pseudo') }}" autocomplete="pseudo" autofocus>
                                        @error('pseudo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group row"> 
                                    <div class="col">
                                        <select id="ville_id"  type="text" class="form-control @error('ville_id') is-invalid @enderror" name="ville_id" value="{{ old('ville_id') }}" autocomplete="ville_id" autofocus>
                                        <option value="">Choisir votre ville</option>
                                        @foreach ($villes as $ville)
                                            <option value="{{$ville->id}}">{{$ville->ville}}</option>
                                        @endforeach 
                                        </select> 
                                        @error('ville_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row">
                                <div class="col">
                                    <input id="phone" placeholder="Telephone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone" autofocus>
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group row">
                                <div class="col">
                                    <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                       
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row">
                                <div class="col">
                                    <input id="password" placeholder="Mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group row">
                                <div class="col">
                                    <input id="password-confirm" placeholder="comfirmer mot de passe" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
                        </div>
                    </form>
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
