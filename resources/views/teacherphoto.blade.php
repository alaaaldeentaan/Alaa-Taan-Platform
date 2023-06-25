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
    <link rel="stylesheet" href="{{ asset('css/tech.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-eoq3qjzJlVZ1xJx8Lj0nRUTz1+Dg6WfQ2hO5z5oQb5D5e5x5O7kFz4i4rk7V5P5GDuM1bKdX9LH3qo0TgT6Uw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


</head>

<body>

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
                        <li class="scroll-to-section"><a href="/Services">Services</a></li>
                        <li class="scroll-to-section"><a href="/courses">Courses</a></li>
                        <li class="scroll-to-section"><a href="{{route('showteacherphoto')}}">Teacher</a></li>
                        <li class="scroll-to-section"><a href="/Events">Events</a></li>
                        @if( !auth()->check())
                        <li class="scroll-to-section"><a href="{{route('register')}}">Register Now!</a></li>
                        <li class="scroll-to-section"><a href="{{route('login')}}">Login</a></li>
                        @else
                        <li class="scroll-to-section"><a href="/profile"><i class="fas fa-user-circle"></i></a></li>
                            <div class="cart">
                            <li class="scroll-to-section">
                                <a href="/cart">
                                    <div class="cart-icon">
                                        <i class="fas fa-shopping-cart"></i>
                                        <span class="cart-count"></span>
                                    </div>
                                </a>
                            </li>
                        </div>
                        @endif

                        {{-- <li class="scroll-to-section"><a href="/cart"><i class="fas fa-shopping-cart"></i></a>
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



    <div class="team section" id="team">
        <div class="container">
            <div class="row">
                @foreach ($teachers as $teacher)
                    <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="{{ asset($teacher->img) }}" alt="">
                            <span class="category">{{$teacher->user_Name}}</span>
                            <h6>{{$teacher->address}}</h6>
                            {{-- <h4>{{$teacher->dob}}</h4> --}}
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="avatar-container">
                    <a href="{{route('teacher.register')}}">
                        <img src="{{ asset('images/undraw_experience_design_re_dmqq.svg') }}" alt="">
                        <div class="overlay">
                            <div class="text">Create Teacher Account</div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>









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
