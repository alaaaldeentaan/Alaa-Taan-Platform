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
    <link rel="stylesheet" href="{{ asset('/css/register.css')}}">



</head>

<body>
    {{-- ***** Header Area Start ***** --}}
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        {{-- ***** Logo Start ***** --}}
                        <a href="{/}" class="logo">
                            <h1>moufeed</h1>
                        </a>
                        {{-- ***** Logo End ***** --}}

                        {{-- ***** Serach Start ***** --}}
                        <div class="search-input">
                            <form id="search" action="{{route('theHome.searshQuery')}}" method="POST">
                                @csrf
                                <input type="text" placeholder="Type Something" id='searchText' name="query"
                                    onkeypress="handle" />
                                <i class="fa fa-search"></i>
                            </form>
                        </div>
                        {{-- ***** Search Start ***** --}}
                        {{-- ***** Menu Start ***** --}}
                        {{-- <ul class="nav">
                            <li class="scroll-to-section"><a href="{/}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="{}">Services</a></li>
                            <li class="scroll-to-section"><a href="{}">Courses</a></li>
                            <li class="scroll-to-section"><a href="">Team</a></li>
                            <li class="scroll-to-section"><a href="">Events</a></li>
                            <li class="scroll-to-section"><a href="{{route('register')}}">Register Now!</a></li>
                            <li class="scroll-to-section"><a href="{{route('login')}}">Login</a></li>
                            <li class="scroll-to-section"><a href="/profile"><i class="fas fa-user-circle"></i></a></li>
                            <li class="scroll-to-section"><a href="/cart"><i class="fas fa-shopping-cart"></i></a></li>
                        </ul> --}}
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="/Services">Services</a></li>
                            <li class="scroll-to-section"><a href="/courses">Courses</a></li>
                            <li class="scroll-to-section"><a href="/teacher">Teacher</a></li>
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
                        {{-- ***** Menu End ***** --}}
                    </nav>
                </div>
            </div>
        </div>
    </header>
    {{-- ***** Header Area End ***** --}}


    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-banner">
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Container Start -->
    <div id="container">
        <!-- Form Wrap Start -->
        <div class="form-wrap">
            <h1>Regester</h1>
            <!-- Form Start -->
            <form>
                <div class="form-group">
                    <div>
                        <x-input-label for="name" :value="__('User Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="user_name"
                            :value="old('user_name')" required autofocus autocomplete="user_name" />
                        <x-input-error :messages="$errors->get('user_name')" class="mt-2" />
                        <span class="text-danger"> @error('user_name')
                            {{$messages}}
                            @enderror</span>
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <x-input-label for="name" :value="__('First Name')" />
                        <x-text-input id="First_Name" class="block mt-1 w-full" type="text" name="first_name"
                            :value="old('first_name')" required autocomplete="first_name" />
                        <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <x-input-label for="name" :value="__('Last Name')" />
                        <x-text-input id="Last_Name" class="block mt-1 w-full" type="text" name="last_name"
                            :value="old('last_name')" required autocomplete="last_name" />
                        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                    </div>

                </div>
                <div class="form-group">
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-800 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('teacher.register')}}">
                        {{ __('Create Account Teacher ? Click more information about Issue ') }}
                    </a>
                </div>
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                        href="{{ route('teacher.login') }}">
                        {{ __('Already registered?') }}
                    </a>
                    <x-primary-button class="ml-4">
                        {{ __('Uploade Request for Register') }}
                    </x-primary-button>
                </div>
            </form>
            <!-- Form Close -->
        </div>














</body>

</html>
