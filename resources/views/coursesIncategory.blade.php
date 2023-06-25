<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <title>moufeed </title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/styleall.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/CI.css')}}">

</head>
<body>


    <h1> the category {{$cat->name}} </h1>
    {{-- <section class="section courses" id="courses">
        <div class="container">
            <div class=" side-video-list">
                @for ( $i =0 ; $i<11;$i++)
                    <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                        <div class="events_item">
                            <div class="thumb">
                                <img src="{{ asset('images/course-05.jpg') }}" alt="" width="200" height="400">
                            <span class="category">12:2:22</span>
                            <span class="price">
                            <h6><em>$</em>888</h6>
                                </span>
                            </div>
                            <div class="down-content">
                                <span class="author">hhhhhhh</span>
                            <h2>vbnuim,lsdfghjkl;asdfghjklasdfghhhh</h2>
                            </span>
                            <button class="add-to-cart" data-name="Product 2" data-price="20">
                                Add to Cart
                            </button>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </section> --}}

            <section class="section courses" id="courses">
        <div class="container">
            <div class=" side-video-list">
                @foreach ($courses as $course )
                    <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                        <div class="events_item">
                            <div class="thumb">
                                <img src="{{ asset('storage/'.$course->img) }}" alt="" width="200" height="500">
                            <span class="category">12:2:22</span>
                            <span class="price">
                            <h6><em></em>{{$course->price}}</h6>
                                </span>
                            </div>
                            <div class="down-content">
                                <span class="author">{{$course->duration}}</span>
                            <h2>{{$course->description}}</h2>
                            </span>
                            <button class="add-to-cart" data-name="Product 2" data-price="20">
                                Add to Cart
                            </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © 2036 Scholar Organization. All rights reserved. &nbsp;&nbsp;&nbsp; Design: moufeed </p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/isotope.min.js')}}  "></script>

</body>

</html>

