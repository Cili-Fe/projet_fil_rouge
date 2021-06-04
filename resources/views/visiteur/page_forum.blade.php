@extends('layouts.menu')
@section('contenu')
@section('script')
    <script>
      function toggleReplyComment(id){
        let element = document.getElementById('replyComment-'+ id);
        element.classList.toggle('d-none');
      }
    </script>
@endsection
  <main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Forum</h2>
          <ol>
            <li><a href="{{route('accueil')}}">Accueil</a></li>
            <li>Forum</li>
          </ol>
        </div>
      </div>
    </section>
    <section id="blog" class="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="sidebar" data-aos="fade-left">
              <span class="text-uppercase font-weight-bold violet">{{ Auth::user()->name }}</span>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <form action="{{route('message.store')}}" method="post">
                    @csrf
                   <h6>Votre sujet</h6>
                    <input type="text" placeholder="le titre"  name="titre" class="form-control my-3">
                    <textarea name="message" id="" class="form-control" cols="25" rows="8"></textarea>
                    <button type="submit" class="btn my-3">Envoyer</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-8 entries">
            @foreach($posts as $post)
            <article class="entry" data-aos="fade-up">
              <h2 class="entry-title">
                {{$post->titre}} 
              </h2>
              <div class="entry-content">
                <p>
                  {{$post->message}} 
                </p>
              </div> 
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"> {{ Auth::user()->pseudo }}</i></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i><time datetime="2020-01-01">{{$post->created_at->format('d/m/y à H:m')}} </time></li>
                  
                </ul>
                <hr>
                <h5> commentaire</h5>
              </div>
              @forelse ($post->comments as $comment)
                <div class="card mb-2 ">
                  <div class="card-body">
                    <div>
                         <p class="">{{$comment->content}}</p>
                          <div class="d-flex bd-highlight">
                            <div class="bd-highlight">
                              <li class=" d-flex align-items-center font-weight-bold"><i class="icofont-user"></i>{{$post->user->pseudo}}</li>
                            </div>
                            <div class="ml-auto bd-highlight">
                              <h6 class="font-weight-bold"><i class="icofont-wall-clock"></i> {{$post->created_at->format('d/m/y à H:m')}}</h6> 
                            </div>
                          </div>
                    </div>
                    <div>
                    </div>
                  </div>
                </div>
                @foreach ($comment->comments as $replyComment)
                <div class="card bg-warning mb-2 ml-5">
                  <div class="card-body">
                    {{$replyComment->content}}
                    <div class="d-flex justify-content-between align-items-center">
                      <small> repondu le {{$replyComment->created_at->format('d/m/y à H:m')}}</small> 
                      <span class="badge badge-primary"> {{$comment->user->pseudo}}</span>
                  </div>
                  </div>
                </div>
               @endforeach
                <button  class="btn mb-3" onclick="toggleReplyComment({{$comment->id}})">Répondre</button>
                <form action="{{route('reponse.store', $comment)}}" method="post" class="ml-5 mb-3 d-none  " id="replyComment-{{$comment->id}}">
                  @csrf
                  <div class="form-group ">
                    <label for="replyComment">ma reponse</label>
                    <textarea class="form-control  @error('replyComment') is-invalid @enderror" name="replyComment" id="replyComment"  rows="2"></textarea>
                    @error('replyComment')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  </div>
                  <button type="submit" class="btn "> Repondre</button> 
                </form>
                @empty
                <div class="alert alert-info">
                    Aucun commentaire pour ce post
                </div>
              @endforelse
                      <form action="{{route('comment.store', $post)}}" method="post">
                        @csrf
                          <div class="form-group">
                            <div class="accordion" id="accordionExample">
                              <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                    <button class="btn font-weight-bolder btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      <i class="icofont-comment"></i><label for="content"> votre commentaire</label>
                                    </button>
                                  </h2>
                                </div>
                            
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                  <div class="card-body"><textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" cols=""  rows="5"></textarea>
                                    @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                  </div>
                                <button type="submit" class="btn"> Commenter</button>  
                                  </div>
                                </div>
                              </div>
                            </div>
                      </form>
                  </article>
              @endforeach
             <div class="blog-pagination">
           {{$posts->links()}}
            </div>
        </div>
      </div>
    </div>
  </section>
  </main>
@endsection

  