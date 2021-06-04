
  @extends('layouts.menu')

  @section('contenu')
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/1.png);">
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/educ.jpg);">
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide2.webp);">
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>A propos de nous</strong></h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
          <div style="background-image: url(assets/img/);">
          <img src="assets/img/slide/" alt="">
          </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>
               ESF, le secret intime de la femme est une plateforme d'éducation et de santé sexuelle dont le but est d'aider les fille. 
               Sur notre plateforme vous avez la possibilité:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>De poser votre inquietude et d'avoir une reponse venant de la part d'un specialiste</li>
              <li><i class="ri-check-double-line"></i>De suivre nos conseils pour le bien de votre santé</li>
              <li><i class="ri-check-double-line"></i>De contacter un specialiste du domaine</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Section de nos partenaires-->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nos partenaires</h2>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/slide/simplon.png"  alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/slide/AUF.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/slide/make.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/slide/IRD.png" class="img-fluid" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  @endsection
  