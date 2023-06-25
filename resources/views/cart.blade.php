{{-- @dd($cats) --}}
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
    <link rel="stylesheet" href="{{ asset('css/owl.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-eoq3qjzJlVZ1xJx8Lj0nRUTz1+Dg6WfQ2hO5z5oQb5D5e5x5O7kFz4i4rk7V5P5GDuM1bKdX9LH3qo0TgT6Uw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>
    {{--   ***** Preloader Start *****   --}}
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    {{--   ***** Preloader End *****   --}}

   {{--  ***** Header Area Start *****  --}}
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                         {{--  ***** Logo Start *****  --}}
                        <a href="{/}" class="logo">
                            <h1>moufeed</h1>
                        </a>
                         {{--  ***** Logo End *****  --}}

                        {{--   ***** Serach Start *****   --}}
                        <div class="search-input">
                            <form id="search" action="{{route('theHome.searshQueryTeacher')}}" method="POST">
                                @csrf
                                <input type="text" placeholder="Type Something" id='searchText' name="query"
                                    onkeypress="handle" />
                                <i class="fa fa-search"></i>
                            </form>
                        </div>
                         <ul class="nav">
                            {{-- <li class="scroll-to-section"><a href="/theHome" class="active">Home</a></li> --}}
                            {{-- <li class="scroll-to-section"><a href="/Services">Services</a></li> --}}
                            <li class="scroll-to-section"><a href="/courses">Courses</a></li>
                            <li class="scroll-to-section"><a href="{{route('showteacherphoto')}}">Teacher</a></li>
                            <li class="scroll-to-section"><a href="/Events">Events</a></li>
                            <li class="scroll-to-section"><a href="{{route('register')}}">Register Now!</a></li>
                            <li class="scroll-to-section"><a href="{{route('login')}}">Login</a></li>
                            <li class="scroll-to-section"><a href="/profile"><i class="fas fa-user-circle"></i></a></li>
                            {{-- <li class="scroll-to-section"><a href="/cart"><i class="fas fa-shopping-cart"></i></a>
                            </li> --}}
                            {{-- <div class="cart">
                                <li class="scroll-to-section">
                                    <a href="/cart">
                                        <div class="cart-icon">
                                            <i class="fas fa-shopping-cart"></i>
                                            <span class="cart-count">0</span>
                                        </div>
                                    </a>
                                </li> --}}
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        {{--   ***** Menu End *****   --}}
                    </nav>
                </div>
            </div>
        </div>
    </header>
    {{--   ***** Header Area End *****   --}}


    <div class="main-banner" id="top">
    </div>
    <div>
        <h1> The Cart Page</h1>
    </div>

<section class="section courses" id="courses">
             <div class="row event_box">
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                    <div class="events_item">
                        <div class="thumb">
                            <img src="{{ asset( 'storage/'.$course->img) }}" alt="" height="300" width="300"/>
                            <span class="category">{{$course->duration}}</span>
                            <span class="price">
                                <h6><em>$</em>{{$course->price}}</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author"> {{$course->duration}}</span>
                            <span class="author"> ......... {{$course->price}} $</span>
                            <h4> {{$course->description}} </h4>
                              <button type="button" class="btn btn-danger">Purchase Confirmation</button>
                               <form method="GET" action="{{ url()->previous() }}">
                                  @csrf
                                  <button class="btn btn-warning" type="submit">DELETL from Cart</button>
                               </form> 
                        </div>
                    </div>
                </div>
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
    <script src="{{ asset('js/owl-carousel.js')}}  "></script>
    <script src="{{ asset('js/counter.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
