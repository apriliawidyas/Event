@extends('main2')
@section('kontenn')
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


    <!-- Portfolio Grid -->

    <section class="bg-light" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Event Coming Soon!</h2>
                    <h3 class="section-subheading text-muted">Where Event Matters.</h3>
                    <div class="container">
                        <div class="intro-text">
                            <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalForm">
                                Make Event
                            </button>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <div class="row">
                @foreach($events as $key=>$event)
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1" data-data="{{ $event }}" data-category="{{ $event->category->nama }}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ asset('storage/' . $event->foto) }}" alt="{{$event->foto}}">
                        </a>
                        <div class="portfolio-caption">
                            {{$event->nama_event}}
                        </div>
                    </div>
                @endforeach
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
                        Website ini diciptakan karena sistem sharing info mengenai event-event yang ada di Telkom
                        University kurang
                        menyeluruh. Sehingga masih banyak mahasiswa/i kekurangan informasi tentang event-event penting.
                        Oleh karena itu,
                        Team yang beranggotakan 5 orang yaitu Aprilia Ari Widyastuti, Rahkmah Nabila, Muhammad Rafidan,
                        Jannatul Rahmadiani,
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

    {{--<section class="py-5">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-3 col-sm-6">--}}
                    {{--<a href="#">--}}
                        {{--<img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 col-sm-6">--}}
                    {{--<a href="#">--}}
                        {{--<img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 col-sm-6">--}}
                    {{--<a href="#">--}}
                        {{--<img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 col-sm-6">--}}
                    {{--<a href="#">--}}
                        {{--<img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

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
                                    <input class="form-control" id="name" type="text" placeholder="Your Name *"
                                           required="required"
                                           data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" placeholder="Your Email *"
                                           required="required"
                                           data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *"
                                           required="required"
                                           data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Your Message *"
                                              required="required"
                                              data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase"
                                        type="submit">Send Message
                                </button>
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
    <div class="modal fade" id="modalForm" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Tutup</span>
                    </button>
                    <h4 class="modal-title" id="labelModalKu">Make Event</h4>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <p class="statusMsg"></p>
                    <form role="form" action="/makeevent" method="POST" Enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="masukkanNama">Penyelenggara</label>
                            <input type="text" class="form-control" name="penyelenggara" placeholder="Masukkan nama Anda" required/>
                        </div>
                        <div class="form-group">
                            <label for="masukkanEmail">Nama Event</label>
                            <input type="text" class="form-control" name="nama_event" placeholder="Masukkan nama event" required/>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select name="category_id" id="kategori" class="form-control" required>
                                @foreach($events as $item)
                                    <option value="{{$item->category->id}}">{{$item->category->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="masukkanTanggal">Tanggal Event</label>
                            <input type="date" class="form-control" name="tgl_event" required/>
                        </div>
                        <div class="form-group">
                            <label for="masukkanTempat">Tempat</label>
                            <input type="text" class="form-control" name="tempat_event" placeholder="Masukkan Lokasi" required>
                        </div>
                        <div class="form-group">
                            <label for="masukkanWaktu">Waktu</label>
                            <input type="time" class="form-control" name="waktu_event" required>
                        </div>
                        <div class="form-group">
                            <label for="masukkanKuota">Kuota</label>
                            <input type="number" class="form-control" name="kuota" required>
                        </div>
                        <div class="form-group">
                            <label for="masukkanHarga">HTM</label>
                            <input type="number" class="form-control" name="harga" required>
                        </div>
                        <div class="form-group">
                            <label for="masukkanPoster">Poster</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                        <div class="form-group">
                            <label for="masukkanPesan">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi Event" required></textarea>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">KIRIM</button>
                        </div>
                    </form>
                </div>
                <!-- Modal Footer -->

            </div>
        </div>
    </div>

    <!-- Modal 1 -->

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
                                    <h2 class="text-uppercase" id="title"></h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" id="thumb" src="#"
                                         alt="#">
                                    <p></p>
                                    <ul class="list-inline">
                                        <li>Date: <span id="date"></span></li>
                                        <li>Category: <span id="category"></span></li>
                                    </ul>
                                    <button class="btn btn-primary" type="button" href="#">
                                        <i class="fas fa-check"></i>
                                        Join
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection


@push('js')
    <script>
        $('#portfolioModal1').on('show.bs.modal', function (e) {
            let button = $(e.relatedTarget);
            let data = button.data('data'),
                category = button.data('category');

            $('#title').text(data.nama_event);
            $('#date').text(data.tgl_event);
            $('#category').text(category);
            $('#thumb').attr('src', '{{ asset('storage') }}' + '/' + data.foto);
        });
    </script>
@endpush