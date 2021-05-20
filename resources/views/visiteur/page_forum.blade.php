@extends('layouts.menu')
@section('contenu')
    

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Conseil</h2>
          <ol>
            <li><a href="{{route('accueil')}}">Accueil</a></li>
            <li>Conseil</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          

          <div class="col-lg-4">

            <div class="sidebar" data-aos="fade-left">
             
              
              {{ Auth::user()->name }}
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <form action="{{route('message.store')}}" method="post">
                    @csrf
                   <h3>Votre sujet</h3>
                    <input type="text" placeholder="le titre" name="titre" class="form-group">
                    <textarea name="message" id="" cols="25" rows="8"></textarea>
                    <button type="submit" class="btn">Envoyer</button>
                  </form>
                 
                  <h4><a href=""></a></h4>
                  <time datetime="2021-01-01"> </time>
                </div>
              </div><!-- End sidebar recent posts-->


            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

          <div class="col-lg-8 entries">
           @foreach ($posts as $post)
           <article class="entry" data-aos="fade-up">
            <h2 class="entry-title">
              <a href="blog-single.html">{{$post->titre}} </a>
            </h2>
            <div class="entry-content">
              <p>
                {{$post->message}} 
              </p>
            </div> 
            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="icofont-user"></i>{{$post->user->name}}</li>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i><time datetime="2020-01-01">{{$post->created_at->format('d/m/y à H:m')}} </time></li>
                
              </ul>
              <hr>
              <h5> commentaire</h5>
        @forelse ($post->comments as $comment)
            <div class="card mb-2 ">
              <div class="card-body d-flex">
                <div>
                      {{$comment->content}}
                    <div class="d-flex justify-content-between align-items-center">
                      <small> Commenté le {{$comment->created_at->format('d/m/y à H:m')}}</small> 
                      <span class="badge badge-primary"></span>
                    </div>
                </div>
                <div>
                  <solution-button></solution-button>
                </div>
              </div>
            </div>
            @empty
            <div class="alert alert-info">Aucun commentaire pour ce rendu</div>
            @endforelse
              <i class="icofont-comment"></i>
                  <form action="{{route('comment.store', $post)}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="content"> votre commentaire</label>
                      <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" cols=""  rows="5"></textarea>
                      @error('content')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    </div>
                  <button type="submit" class="btn"> Commenter</button>   
                    </form>
            </div>
            
          </article><!-- End blog entry -->
           @endforeach 
          <div class="blog-pagination">
                {{$posts->links()}}
            </div>

          </div><!-- End blog entries list -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
@endsection

  