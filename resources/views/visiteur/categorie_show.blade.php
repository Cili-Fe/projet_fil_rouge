@extends('layouts.menu')
@section('contenu')
  <main id="main">
    <!--sous menu-->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Categorie</h2>
          <ol>
            <li><a href="{{route('accueil')}}">Accueil</a></li>
            <li>Categorie</li>
          </ol>
        </div>
      </div>
    </section>
    <!--debut des conseil-->
    <section id="blog" class="blog">
      <div class="container">
        <div class="row ">
          <div class="col-lg-8 entries">
            @foreach ($conseils as $conseil)
              <article class="entry" data-aos="fade-up">
                <div class="entry-img">
                  <img src="{{asset('storage').'/'.$conseil->file}}" alt="" class="img-fluid">
                </div>
                <h2 class="entry-title">
                  <a href="blog-single.html">{{$conseil->titre}}</a>
                </h2>
                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="icofont-user"></i></li>
                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i><time datetime="2020-01-01">{{$conseil->created_at->format('d/m/y à H:m')}}</time></li>
                    <li class="d-flex align-items-center"><i class="icofont-comment"></i></li>
                  </ul>
                </div>
                <div class="entry-content">
                  <p>
                    {{$conseil->description}}
                  </p>
                </div>
              </article>
            @endforeach
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="disabled"><i class="icofont-rounded-left"></i></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar" data-aos="fade-left">
              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  @foreach ($categories as $categorie)
                  <li><a href="{{route('categorie.show', $categorie->id)}}">{{$categorie->nom_categorie}} <span class="bg-dark font-weight-bold text-white btn">{{ $categorie->conseils()->count()}}</span></a></li>
                  @endforeach
                </ul>
              </div>
              <h3 class="sidebar-title">Recent Posts</h3>
              @foreach ($recents as $recent)
                <div class="sidebar-item recent-posts">
                  <div class="post-item clearfix">
                    <img src="{{asset('storage').'/'.$recent->file}}" alt="" class="img-fluid" alt="">
                    <h4><a href="{{route('conseil.liste')}}">{{$recent->titre}}</a></h4>
                    <time datetime="2020-01-01">{{$conseil->created_at->format('d/m/y à H:m')}}</time>
                  </div>
                </div>
              @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

  