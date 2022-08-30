@extends('english.layout.layout')

@section('header')
    <title>Projects</title>
@endsection

@section('content')
    <div class="container">
        {{-- +++++++++++++++++++++++++ Toolbar +++++++++++++++++++++++++ --}}
        <h1 style="margin-top: 90px;">Projects</h1>

        <p>A table with third party integration extension Filter control extension Data export</a> pour exporter</p>

        {{-- <div id="toolbar">
            <select class="form-control">
                <option value="">Export Basic</option>
                <option value="all">Export All</option>
                <option value="selected">Export Selected</option>
            </select>
        </div> --}}
        {{-- ------------------------- Projects Cards ------------------------- --}}

        {{-- +++++++++++++++++++++++++ Projects Cards +++++++++++++++++++++++++ --}}
        <div id="All-Projects" class="container">

            <!-- Card deck -->
            <div class="card-deck row text-center">

                <div class="col-sm-12 col-md-6 col-lg-4">
                    <!-- Card -->
                    <div class="card">

                        <!--Card image-->
                        <div class="view overlay">
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
                                alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">

                            <!--Title-->
                            <h4 class="card-title">1 Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                            <a class="stretched-link" href="#"> <button type="button"
                                    class="btn btn-light-blue btn-md">Read more</button></a>

                        </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4">
                    <!-- Card -->
                    <div class="card mb-4">

                        <!--Card image-->
                        <div class="view overlay">
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg"
                                alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">

                            <!--Title-->
                            <h4 class="card-title">2 Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                            <a class="stretched-link" href="#"> <button type="button"
                                    class="btn btn-light-blue btn-md">Read more</button></a>


                        </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4">
                    <!-- Card -->
                    <div class="card mb-4">

                        <!--Card image-->
                        <div class="view overlay">
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg"
                                alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">

                            <!--Title-->
                            <h4 class="card-title">3 Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                            <a class="stretched-link" href="#"> <button type="button"
                                    class="btn btn-light-blue btn-md">Read more</button></a>


                        </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4">
                    <!-- Card -->
                    <div class="card">

                        <!--Card image-->
                        <div class="view overlay">
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
                                alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">

                            <!--Title-->
                            <h4 class="card-title">4 Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                            <a class="stretched-link" href="#"> <button type="button"
                                    class="btn btn-light-blue btn-md">Read more</button></a>


                        </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4">
                    <!-- Card -->
                    <div class="card mb-4">

                        <!--Card image-->
                        <div class="view overlay">
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg"
                                alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">

                            <!--Title-->
                            <h4 class="card-title">5 Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                            <a class="stretched-link" href="#"> <button type="button"
                                    class="btn btn-light-blue btn-md">Read more</button></a>


                        </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4">
                    <!-- Card -->
                    <div class="card mb-4">

                        <!--Card image-->
                        <div class="view overlay">
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg"
                                alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">

                            <!--Title-->
                            <h4 class="card-title">6 Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                            <a class="stretched-link" href="/project/5"> <button type="button"
                                    class="btn btn-light-blue btn-md">Read more</button></a>

                        </div>

                    </div>
                    <!-- Card -->
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4">
                    <!-- Card -->
                    <div class="card mb-4">

                        <!--Card image-->
                        <div class="view overlay">
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg"
                                alt="Card image cap">
                            <a href="/project/6">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">

                            <!--Title-->
                            <h4 class="card-title">7 Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                            <a class="stretched-link" href="/project/7"> <button type="button" class="btn btn-light-blue btn-md">Read more</button></a>


                        </div>

                    </div>
                    <!-- Card -->
                </div>


            </div>
            <!-- Card deck -->

        </div>
        {{-- ------------------------- Projects Cards ------------------------- --}}
    </div>
@endsection
