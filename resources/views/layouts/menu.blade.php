<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ESF</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Les icones -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Les liens CSS -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet"> 
  <link  href="{{asset('plugins/fullcalendar/main.css')}}" rel="stylesheet">

  <!-- Lien CSS -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- debut du Header-->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{route('accueil')}}"><span>ES</span>F</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{route('accueil')}} ">Accueil</a></li>
          <li><a href="{{route('conseil')}} ">Conseils</a></li>
          @guest
          <li class="drop-down"><a href="">Comptes</a>
            <ul>
              <li><a href="{{route('register')}}">Créer un compte</a></li>
              <li><a href="{{route('login')}}">Se connecter</a></li>
            </ul>
          </li>
          @endguest 
          <li><a href="{{route('calendrier')}} ">Calendrier</a></li>
          <li><a href="{{route('forum.vue')}} ">Forum</a></li>
          <li><a href="{{route('contact')}}">Contact</a></li>
          
          @auth
          @unless (auth()->user()->unreadNotifications->isEmpty()) 
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          <span class="badge badge-warning">{{ auth()->user()->unreadNotifications->count() }}</span> Notification(s) <span class="caret"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            @foreach (auth()->user()->unreadNotifications as $notification)
            <a href="" class="dropdown-item">{{ $notification->data['nom']}} a écrit sur votre sujet  </a>
            @endforeach
          </div> 
          @endunless
          @endauth
        
        @auth
          <a class="dropdown-item mt-1" href="{{ route('logout') }}"
            onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
               {{ __('DECONNEXION') }}
           </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
          @endauth
        </ul>
      </nav>

      <div class="header-social-links">
        <a href="" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://www.facebook.com/108490441382072/posts/119990696898713/?substory_index=0&app=fbl" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- fin du Header -->

  @yield('contenu')
  
  <!-- debut du footer -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>ESF</h3>
            <p>
              Zogona, <br>
              Ouagadougou, Rue 535022<br>
              Burkina Faso <br><br>
              <strong>Phone:</strong>+226 60304013<br>
              <strong>Email:</strong> educationsexuelledelafemme@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Liens utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('accueil')}} ">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('conseil')}} ">Conseils</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('accueil')}}">Calendrier</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('forum.vue')}}">Forum</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4> Newsletter</h4>
            <p>Incrivez-vous à notre Newsletter pour recevoir les informations en temps reel</p>
            <form action="" method="post">
              <input type="email" class="form-control" name="email"><input type="submit"  value="S'inscrire">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="">
          copyright  &copy; <span>ESF</span>. Tous droit reservés
        </div>
      </div>
    </div>
  </footer>
  <!-- fin du Footer -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
  <script src="{{asset('plugins/fullcalendar/main.js')}}"></script>
  <script src="{{asset('dist/js/demo.js')}}"></script>
  <script src="{{asset('')}}"></script>

  @yield('script')
  @yield('calendar')
</body>
</html>