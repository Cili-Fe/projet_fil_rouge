@extends('layouts.menu')
    @section('contenu')
        

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

          <div class="d-flex justify-content-between align-items-center">
              <h2>Contact</h2>
              <ol>
                <li><a href="{{route('accueil')}}">Accueil</a></li>
                <li>Contact</li>
              </ol>
            </div>
    
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <div class="map-section">
      {{-- <iframe style="border:0; width: 100%; height: 350px;" src="<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3897.0617194353867!2d-1.5018749857008038!3d12.378798030958551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2ebe4817ea67f9%3A0x7b447e5c6a92fd0a!2sUNIVERSITE%20JOSEPH%20KI-ZERBO!5e0!3m2!1sfr!2sbf!4v1621271117682!5m2!1sfr!2sbf" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>" frameborder="0" allowfullscreen></iframe> --}}
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3897.0617194353867!2d-1.5018749857008038!3d12.378798030958551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2ebe4817ea67f9%3A0x7b447e5c6a92fd0a!2sUNIVERSITE%20JOSEPH%20KI-ZERBO!5e0!3m2!1sfr!2sbf!4v1621271117682!5m2!1sfr!2sbf" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="icofont-google-map"></i>
                  <h4>Localisation:</h4>
                  <p>03 BP 7021<br>Ouagadougou,BURKINA Faso</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>educationsexuelledela <br> femme@gmail.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>phone:</h4>
                  <p>+226 60304013<br>+226 67865261</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nom" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Votre Prenom(s)" data-rule="email" data-msg="Please enter a valid email " />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="minlen:4" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
    @endsection

  