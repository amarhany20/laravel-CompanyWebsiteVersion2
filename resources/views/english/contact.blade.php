@extends('english.layout.layout')
@section('title')
@endsection

@section('content')
    {{-- +++++++++++++++++++++++++ JUMBOTRON +++++++++++++++++++++++++ --}}
    <div style="margin-top: 100px!important;" class="container  my-5 rounded-4 border shadow-lg bg-dark text-light">
        <div class="row m-4">
            <div class="col-lg-7 align-self-center ">

                <h1 class="display-4 fw-bold lh-1 ">Contact Us For Inquiries</h1>
                <p class="lead">Our team is ready and waiting for your requests. </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <a href="#contact-form" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Contact</a>
                    <a href="tel:+201061888476" class="btn btn-outline-secondary btn-lg px-4"><i style="font-size: 1.25rem;"
                            class="bi bi-telephone-fill "></i> Phone</a>
                    <a href="mailto:ammarhanyezeldin@gmail.com" class="btn btn-outline-secondary btn-lg px-4"> <i
                            style="font-size: 1.25rem;" class="bi bi-envelope-fill "></i> Email</a>
                </div>
            </div>
            <div class="col-lg-5">
                <img class="rounded-lg-3 img-fluid" src="{{ asset('assets/images/contact1.png') }}" alt=""
                    width="">
            </div>
        </div>
    </div>

    {{-- ------------------------- JUMBOTRON ------------------------- --}}

    {{-- +++++++++++++++++++++++++ Accordion +++++++++++++++++++++++++ --}}


    <section id="Contact-Accordion" class="py-5">
        <div class="container">
            <h1 class="text-center">FAQ</h1>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="accordion accordion-flush" id="faqlist">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#content-accordion-1">
                                    What is Lorem Ipsum?
                                </button>
                            </h2>
                            <div id="content-accordion-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#content-accordion-2">
                                    Why do we use it?
                                </button>
                            </h2>
                            <div id="content-accordion-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    It is a long established fact that a reader will be distracted by the readable content
                                    of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                    more-or-less normal distribution of letters, as opposed to using 'Content here.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#content-accordion-3">
                                    Where does it come from?
                                </button>
                            </h2>
                            <div id="content-accordion-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#content-accordion-4">
                                    Where does it come from?
                                </button>
                            </h2>
                            <div id="content-accordion-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#content-accordion-5">
                                    Where does it come from?
                                </button>
                            </h2>
                            <div id="content-accordion-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ------------------------- Accordion  ------------------------- --}}


    {{-- +++++++++++++++++++++++++ Contact Form Start +++++++++++++++++++++++++ --}}

    <div id="contact-form" class="container mt-5">
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
    {{-- ------------------------- Contact Form End ------------------------- --}}
@endsection
