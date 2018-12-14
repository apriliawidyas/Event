@extends('main')
@section('konten')
<!-- Navigation -->
    
    <!-- Header -->
    
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Our Event!</div>
          <div class="intro-heading text-uppercase">Come on to join us</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
      </div>
    </header>
    

    <!-- Services -->


    <!-- Portfolio Grid -->
    
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Event Coming Soon!</h2>
            <h3 class="section-subheading text-muted">Where Event Matters.</h3>
            <div class="container">
              <div class="intro-text">
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#">Make Event</a>
              </div>
            </div>
            <br>
          </div>
        </div>
        <div class="row">
            @foreach($events as $key=>$event)
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              {{$event->nama_event}}
            </div>
          </div>
            @endforeach
          {{--<div class="col-md-4 col-sm-6 portfolio-item">--}}
            {{--<a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">--}}
              {{--<div class="portfolio-hover">--}}
                {{--<div class="portfolio-hover-content">--}}
                  {{--<i class="fas fa-plus fa-3x"></i>--}}
                {{--</div>--}}
              {{--</div>--}}
              {{--<img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">--}}
            {{--</a>--}}
            {{--<div class="portfolio-caption">--}}
              {{--<h4>Hifestus 2018</h4>--}}
              {{--<p class="text-muted">Concert Music Festival</p>--}}
            {{--</div>--}}
          {{--</div>--}}
          {{--<div class="col-md-4 col-sm-6 portfolio-item">--}}
            {{--<a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">--}}
              {{--<div class="portfolio-hover">--}}
                {{--<div class="portfolio-hover-content">--}}
                  {{--<i class="fas fa-plus fa-3x"></i>--}}
                {{--</div>--}}
              {{--</div>--}}
              {{--<img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">--}}
            {{--</a>--}}
            {{--<div class="portfolio-caption">--}}
              {{--<h4>TUNFC 2018</h4>--}}
              {{--<p class="text-muted">Competition Futsal Cup</p>--}}
            {{--</div>--}}
          {{--</div>--}}
          {{--<div class="col-md-4 col-sm-6 portfolio-item">--}}
            {{--<a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">--}}
              {{--<div class="portfolio-hover">--}}
                {{--<div class="portfolio-hover-content">--}}
                  {{--<i class="fas fa-plus fa-3x"></i>--}}
                {{--</div>--}}
              {{--</div>--}}
              {{--<img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">--}}
            {{--</a>--}}
            {{--<div class="portfolio-caption">--}}
              {{--<h4>SISFOTIME 2018</h4>--}}
              {{--<p class="text-muted">Branding</p>--}}
            {{--</div>--}}
          {{--</div>--}}
          {{--<div class="col-md-4 col-sm-6 portfolio-item">--}}
            {{--<a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">--}}
              {{--<div class="portfolio-hover">--}}
                {{--<div class="portfolio-hover-content">--}}
                  {{--<i class="fas fa-plus fa-3x"></i>--}}
                {{--</div>--}}
              {{--</div>--}}
              {{--<img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">--}}
            {{--</a>--}}
            {{--<div class="portfolio-caption">--}}
              {{--<h4>Southwest</h4>--}}
              {{--<p class="text-muted">Website Design</p>--}}
            {{--</div>--}}
          {{--</div>--}}
          {{--<div class="col-md-4 col-sm-6 portfolio-item">--}}
            {{--<a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">--}}
              {{--<div class="portfolio-hover">--}}
                {{--<div class="portfolio-hover-content">--}}
                  {{--<i class="fas fa-plus fa-3x"></i>--}}
                {{--</div>--}}
              {{--</div>--}}
              {{--<img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">--}}
            {{--</a>--}}
            {{--<div class="portfolio-caption">--}}
              {{--<h4>Window</h4>--}}
              {{--<p class="text-muted">Photography</p>--}}
            {{--</div>--}}
          </div>
        </div>
      </div>
    </section>
    

    <!-- About -->
   
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">The Event Tel-U</h3>

            <h5 class="subheading">The Event Tel-U berdiri pada bulan November 2018.
              <br>
              Website ini diciptakan karena sistem sharing info mengenai event-event yang ada di Telkom University kurang
              menyeluruh. Sehingga masih banyak mahasiswa/i kekurangan informasi tentang event-event penting. Oleh karena itu,
              Team yang beranggotakan 5 orang yaitu Aprilia Ari Widyastuti, Rahkmah Nabila, Muhammad Rafidan, Jannatul Rahmadiani,
              M Luthfi Ridhwan, Kami mencetuskan website ini.
              <br>
              <br>


            </h5>

          </div>
        </div>
    </section>

    <!-- Team -->
    
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row">
        <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/3.jpeg" alt="">
              <h4>Muhammad Rafidan</h4>
              <p class="text-muted">Front End Developer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/m.rafidann">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.linkedin.com/in/muhammad-rafidan-3b7816150/">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/6.jpeg" alt="">
              <h4>Rahkmah Nabila</h4>
              <p class="text-muted">Administrator</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.twitter.com/rahkmahnabila">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/rahkmah.nabila">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://id.linkedin.com/in/rahkmah-nabila-7a796413a">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/5.jpeg" alt="">
              <h4>Jannatul Rahmadiani</h4>
              <p class="text-muted">Administrator</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/jannatul.rahmadiani">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/2.jpeg" alt="">
              <h4>Aprilia Ari Widyastuti</h4>
              <p class="text-muted">Back End Developer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/4.jpeg" alt="">
              <h4>M.Luthfi Ridwan</h4>
              <p class="text-muted">Administrator</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/MuhammadLuthfiRidhwan">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted"></p>
          </div>
        </div>
      </div>
    </section>


    <!-- Clients -->
  
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
   
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Isi Form jika ada kritik dan saran.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
   
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
@foreach($events as $key=>$event)
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">{{$event->nama_event}}</h2>
                  <p class="item-intro text-muted"></p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                  <p>{{$event->deskripsi}}</p>
                  <ul class="list-inline">
                    <li>Date: {{$event->tgl_event}}</li>
                    <li>Category: {{$event->category->nama}}</li>
                  </ul>
                  <button class="btn btn-primary" type="button" href="#">
                    <i class="fas fa-check"></i>
                    Join</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endforeach

    <!-- Modal 2 -->
    
    {{--<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">--}}
      {{--<div class="modal-dialog">--}}
        {{--<div class="modal-content">--}}
          {{--<div class="close-modal" data-dismiss="modal">--}}
            {{--<div class="lr">--}}
              {{--<div class="rl"></div>--}}
            {{--</div>--}}
          {{--</div>--}}
          {{--<div class="container">--}}
            {{--<div class="row">--}}
              {{--<div class="col-lg-8 mx-auto">--}}
                {{--<div class="modal-body">--}}
                {{----}}
                  {{--<!-- Project Details Go Here -->--}}
                  {{----}}
                  {{--<h2 class="text-uppercase">Hifestus 2018</h2>--}}
                  {{--<img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">--}}
                  {{--<p>ATMA ASTA adalah pensi tahunan SMAN 8 Bandung. Tahun 2018, pensi ini bernuansa kebudayaan mengangkat tema Bandung (Atma Asta – 8andoeng).--}}
                     {{--Lebih tepatnya Kota Bandung tempo dulu hingga kini dengan Guest Star Naif. --}}
                     {{--Ada yang menarik di pensi ini, Efek Kaca akan berkolaborasi dengan Barasuara yang sedang banyak diperbincangkan di ranah musik Tanah Air.</p>--}}
                  {{--<ul class="list-inline">--}}
                    {{--<li>Date: 29 September 2018</li>--}}
                    {{--<li>Place: Lapangan Pussenif, Jl Supratman no 60</li>--}}
                    {{--<li>Category: Concert Music Festival</li>--}}
                  {{--</ul>--}}
                  {{--<button class="btn btn-primary" data-dismiss="modal" type="button">--}}
                    {{--<i class="fas fa-times"></i>--}}
                    {{--Close Project</button>--}}
                {{--</div>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Modal 3 -->--}}
    {{----}}
    {{--<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">--}}
      {{--<div class="modal-dialog">--}}
        {{--<div class="modal-content">--}}
          {{--<div class="close-modal" data-dismiss="modal">--}}
            {{--<div class="lr">--}}
              {{--<div class="rl"></div>--}}
            {{--</div>--}}
          {{--</div>--}}
          {{--<div class="container">--}}
            {{--<div class="row">--}}
              {{--<div class="col-lg-8 mx-auto">--}}
                {{--<div class="modal-body">--}}
                {{---->--}}
                  {{--<!-- Project Details Go Here -->--}}
                 {{----}}
                  {{--<h2 class="text-uppercase">TUNFC 2018 </h2>--}}
                  {{--<img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">--}}
                  {{--<p>Telkom University National Futsal Championship (TUNFC) merupakan kompetisi futsal antar perguruan tinggi tingkat nasional yang diselenggarakan oleh UKM Bola Telkom University. Awal mula terpikir untuk dibuatnya TUNFC melalui UKM Bola Telkom University yang telah mengikuti berbagai kejuaraan futsal tingkat nasional, tidak ingin hanya menjadi peserta di berbagai kegiatan kejuaraan.</p>--}}
                  {{--<ul class="list-inline">--}}
                    {{--<li>Date: 9-17 Februari 2018</li>--}}
                    {{--<li>Category: Competition Futsal Cup</li>--}}
                  {{--</ul>--}}
                  {{--<button class="btn btn-primary" data-dismiss="modal" type="button">--}}
                    {{--<i class="fas fa-times"></i>--}}
                    {{--Close Project</button>--}}
                {{--</div>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Modal 4 -->--}}
   {{----}}
    {{--<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">--}}
      {{--<div class="modal-dialog">--}}
        {{--<div class="modal-content">--}}
          {{--<div class="close-modal" data-dismiss="modal">--}}
            {{--<div class="lr">--}}
              {{--<div class="rl"></div>--}}
            {{--</div>--}}
          {{--</div>--}}
          {{--<div class="container">--}}
            {{--<div class="row">--}}
              {{--<div class="col-lg-8 mx-auto">--}}
                {{--<div class="modal-body">-->--}}
                  {{--<!-- Project Details Go Here -->--}}
                  {{----}}
                  {{--<h2 class="text-uppercase">SISFOTIME 2018</h2>--}}
                  {{--<img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">--}}
                  {{--<p>Sisfo Time adalah event kompetisi tahunan yang dimulai tahun lalu 2012 berskala nasional yang diadakan oleh program studi S1 Sistem Informasi IT Telkom (kini menjadi Universitas Telkom). Tahun ini 2018, Sisfo Time mengadakan 2 kompetisi yang dapat diikuti oleh siswa dan mahasiswa. Lombanya antara lain Web Design dan Business Solution. </p>--}}
                  {{--<ul class="list-inline">--}}
                    {{--<li>Registration: 26 Agustus-22 September 2018</li>--}}
                    {{--<li>Date: 2 November 2018</li>--}}
                    {{--<li>Category: Competition</li>--}}
                  {{--</ul>--}}
                  {{--<button class="btn btn-primary" data-dismiss="modal" type="button">--}}
                    {{--<i class="fas fa-times"></i>--}}
                    {{--Close Project</button>--}}
                {{--</div>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Modal 5 -->--}}
    {{----}}
    {{--<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">--}}
      {{--<div class="modal-dialog">--}}
        {{--<div class="modal-content">--}}
          {{--<div class="close-modal" data-dismiss="modal">--}}
            {{--<div class="lr">--}}
              {{--<div class="rl"></div>--}}
            {{--</div>--}}
          {{--</div>--}}
          {{--<div class="container">--}}
            {{--<div class="row">--}}
              {{--<div class="col-lg-8 mx-auto">--}}
                {{--<div class="modal-body">--}}
                {{----}}
                  {{--<!-- Project Details Go Here -->--}}
                  {{----}}
                  {{--<h2 class="text-uppercase">Project Name</h2>--}}
                  {{--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>--}}
                  {{--<img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">--}}
                  {{--<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>--}}
                  {{--<ul class="list-inline">--}}
                    {{--<li>Date: November 2018</li>--}}
                    {{--<li>Client: Bandung</li>--}}
                    {{--<li>Category: Website Design</li>--}}
                  {{--</ul>--}}
                  {{--<button class="btn btn-primary" data-dismiss="modal" type="button">--}}
                    {{--<i class="fas fa-times"></i>--}}
                    {{--Close Project</button>--}}
                {{--</div>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Modal 6 -->--}}

    {{--<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">--}}
      {{--<div class="modal-dialog">--}}
        {{--<div class="modal-content">--}}
          {{--<div class="close-modal" data-dismiss="modal">--}}
            {{--<div class="lr">--}}
              {{--<div class="rl"></div>--}}
            {{--</div>--}}
          {{--</div>--}}
          {{--<div class="container">--}}
            {{--<div class="row">--}}
              {{--<div class="col-lg-8 mx-auto">--}}
                {{--<div class="modal-body">--}}
                {{---->--}}
                  {{--<!-- Project Details Go Here -->--}}
                  {{----}}
                  {{--<h2 class="text-uppercase">Project Name</h2>--}}
                  {{--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>--}}
                  {{--<img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">--}}
                  {{--<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>--}}
                  {{--<ul class="list-inline">--}}
                    {{--<li>Date: January 2017</li>--}}
                    {{--<li>Client: Window</li>--}}
                    {{--<li>Category: Photography</li>--}}
                  {{--</ul>--}}
                  {{--<button class="btn btn-primary" data-dismiss="modal" type="button">--}}
                    {{--<i class="fas fa-times"></i>--}}
                    {{--Close Project</button>--}}
                {{--</div>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}

@endsection