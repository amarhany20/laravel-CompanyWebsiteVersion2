@extends('english.layout.layout')

@section('header')
    <title>Welcome TO EDG</title>
@endsection

@section('content')
    {{-- Image size: 1600 x 400
        https://www.clubrunnersupport.com/kb/articles/carousel-best-practices-images#:~:text=As%20a%20recommendation%2C%20we%20use,up%20new%20carousels%20for%20clubs. --}}
    {{-- Carousel Start --}}
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div id="carousel-blur" class="carousel-item active">
                <img src="{{ asset('assets/images/1.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to Enviromental Design Group</h5>
                    <p></p>
                </div>
            </div>
            <div id="carousel-blur" class="carousel-item">
                <img src="{{ asset('assets/images/2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Best designs</h5>
                    <p>We offer the best desgins in Egypt.</p>
                </div>
            </div>
            <div id="carousel-blur" class="carousel-item">
                <img src="{{ asset('assets/images/3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Customer Statisfaction Priority</h5>
                    <p>We focus on your needs</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- Carousel End --}}
    {{-- About Us Start --}}
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-12 col-sm-12 col-lg-6">
                <img src="{{ asset('assets/images/4.jpg') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                    width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Our Most Amazing Office</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                    most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                    extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Our Projects</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Contact</button>
                </div>
            </div>
        </div>
    </div>
    {{-- About Us End --}}

    {{-- Project Cards START --}}
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top"
                        alt="Hollywood Sign on The Hill" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                        </p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp" class="card-img-top"
                        alt="Palm Springs Road" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a short card.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp" class="card-img-top"
                        alt="Los Angeles Skyscrapers" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp" class="card-img-top"
                        alt="Skyscrapers" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp" class="card-img-top"
                        alt="Skyscrapers" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp" class="card-img-top"
                        alt="Skyscrapers" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Project Cards End --}}

    {{-- Contact Form Start --}}

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="w-75 mx-auto ">
                    <!-- Success message -->
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form method="post" action="{{ url('/contact') }}">
                        @csrf
                        <div class="form-group">
                            <label class="ms-2 my-1">Name*</label>
                            <input placeholder="Your Name" type="text"
                                class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name"
                                id="name">
                            <!-- Error -->
                            @if ($errors->has('name'))
                                <div class="error">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="ms-2 my-1">Email*</label>
                            <input placeholder="example@example.com" type="email"
                                class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email"
                                id="email">
                            @if ($errors->has('email'))
                                <div class="error">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="ms-2 my-1">Phone*</label>
                            <input placeholder="01012345678" type="text"
                                class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone"
                                id="phone">
                            @if ($errors->has('phone'))
                                <div class="error">
                                    {{ $errors->first('phone') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="ms-2 my-1">Subject*</label>
                            <input placeholder="Subject" type="text"
                                class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
                                id="subject">
                            @if ($errors->has('subject'))
                                <div class="error">
                                    {{ $errors->first('subject') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="ms-2 my-1">Message*</label>
                            <textarea placeholder="Your Message" class="form-control {{ $errors->has('message') ? 'error' : '' }}"
                                name="message" id="message" rows="4"></textarea>
                            @if ($errors->has('message'))
                                <div class="error">
                                    {{ $errors->first('message') }}
                                </div>
                            @endif
                        </div>
                        <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block mt-3">
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container-fluid">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.6571328352106!2d31.40922331540565!3d30.017999981891997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583ceffe37babf%3A0xfefdcdeca69a67ac!2sDowntown%20Mall!5e0!3m2!1sen!2str!4v1658307418366!5m2!1sen!2str"
                        style="height: 300px;width: 100%; border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="row text-center">

                    <div class="col">
                        <a class="text-decoration-none" href="tel:+201061888476">
                            <i style="font-size: 1.5rem;" class="bi bi-telephone-fill text-dark"></i>
                            <br>
                            +20 106 188 8476
                        </a>
                    </div>

                    <div class="col">
                        <a class="text-decoration-none" href="mailto:ammarhanyezeldin@gmail.com">
                            <i style="font-size: 1.5rem;" class="bi bi-envelope-fill text-dark"></i>
                            <br>
                            ammarhanyezeldin@gmail.com
                        </a>
                    </div>

                    <div class="col">
                        <a class="text-decoration-none" href="https://goo.gl/maps/dbBJYQ2gDExc86er7">
                            <i style="font-size: 1.5rem;" class="bi bi-geo-alt-fill text-dark"></i>
                            <br>
                            New Cairo 1, Cairo Governorate 4730101, Egypt
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Contact Form End --}}

    <div class="container">

    </div>
@endsection
