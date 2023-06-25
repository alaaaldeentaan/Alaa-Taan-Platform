 {{-- <x-guest-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body style="bg-info">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px">
                 <h4>Admin Login</h4><hr>

                 <form action="{{route('admin.check')}}" method="post">
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    @csrf

                     <div class="form-group">
                         <label for="email">Email</label>
                         <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                         <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                     </div>

                     <div class="form-group">
                         <label for="password">Password</label>
                         <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                         <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">Login</button>
                     </div>
                 </form>

            </div>
        </div>
    </div>
</body>
</html>
</x-guest-layout> --}}


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
                            <div class="cart">
                                <li class="scroll-to-section">
                                    <a href="/cart">
                                        <div class="cart-icon">
                                            <i class="fas fa-shopping-cart"></i>
                                            <span class="cart-count">0</span>
                                        </div>
                                    </a>
                                </li>
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
  
    <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
     <h1 class="text-4x1 font-bold text-center"> Admin login</h1>
    {{-- <form method="POST"> --}}
     <form action="{{route('admin.check')}}" method="POST">
        @csrf
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                {{-- <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('teacher.password.request') }}"> --}}
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in Teacher') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

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

