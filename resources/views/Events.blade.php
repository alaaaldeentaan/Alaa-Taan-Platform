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
                            <form id="search" action="#">
                                <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword"
                                    onkeypress="handle" />
                                <i class="fa fa-search"></i>
                            </form>
                        </div>
                        {{--   ***** Search Start *****  --}}
                        {{--   ***** Menu Start *****  --}}
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/theHome" class="active">Home</a></li>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section events" id="events">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Schedule</h6>
                        <h2>Upcoming Events</h2>
                    </div>
                </div>
                @for ($i = 0; $i < 6; $i++)
                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="{{ asset('images/event-01.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">Web Design</span>
                                        <h4>UI Best Practices</h4>
                                    </li>
                                    <li>
                                        <span>Date:</span>
                                        <h6>16 Feb 2036</h6>
                                    </li>
                                    <li>
                                        <span>Duration:</span>
                                        <h6>22 Hours</h6>
                                    </li>
                                    <li>
                                        <span>Price:</span>
                                        <h6>$120</h6>
                                    </li>
                                </ul>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>






    <footer>

        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © 2036 moufeed Organization. All rights reserved. &nbsp;&nbsp;&nbsp; Design: moufeed </p>
            </div>
        </div>
    </footer>


</body>
</html>





