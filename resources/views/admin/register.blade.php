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




        <x-guest-layout>
    <h1 class="text-4x1 font-bold text-center"> Teacher register</h1>
    <form method="POST" enctype="multipart/form-data" action="{{ route('teacher.register') }}" >
        @csrf       
        <div>
            <x-input-label for="name" :value="__('Teacher Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            <span class="text-danger"> @error('name')
      
            @enderror</span>
        </div>

        
        <div>
            <x-input-label for="name" :value="__('User Name')" />
            <x-text-input id="user_Name" class="block mt-1 w-full" type="text" name="user_Name" :value="old('user_Name')" required  autocomplete="user_Name" />
            <x-input-error :messages="$errors->get('user_Name')" class="mt-2" />
            <span class="text-danger"> @error('user_Name')
               
            @enderror</span>
        </div>

        <div>
            <x-input-label for="name" :value="__('Teacher Language')" />
            <x-text-input id="language" class="block mt-1 w-full" type="text" name="language" :value="old('language')" required  autocomplete="language" />
            <x-input-error :messages="$errors->get('language')" class="mt-2" />
            <span class="text-danger"> @error('language')
       
            @enderror</span>
        </div>

        
        <div class="mt-4">
            <x-input-label for="email" :value="__('Teacher Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        
        <div class="mt-4">
            <x-input-label for="password" :value="__('Teacher Phone')" />
            <input id="phone" type="tel" class="block mt-1 w-full" name="phone" :value="old('phone')" required autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div> 

       
        <div class="mt-4">
            <x-input-label for="password" :value="__('Teacher Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

       
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
       

        <!-- upload certificate images -->
        <div class="mt-4">
            <x-input-label for="" :value="__('Certificate Images')" />

            <input type="file" id="photo" name="photo"/>

            <x-input-error :messages="$errors->get('photo')" class="mt-2" />
        </div>


        
        <div class="mt-4">
            <x-input-label for="password" :value="__('Teacher Gender')" />
            <input type="radio" id="Male" name="gender" value="male">
            <label for="html">Male</label><br>
            <input type="radio" id="Female" name="gender" value="female">
            <label for="css">Female</label><br>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div> 

        
        <div class="mt-4">
            <x-input-label for="password" :value="__('Teacher address')" />
           <textarea id="address" name="address" rows="4" cols="45">
           Address
           </textarea>   
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div> 

       
        <div class="mt-4">
            <x-input-label for="password" :value="__('Teacher Date Of Birth')" />
            <input type="date" id="dob" name="dob">
            <x-input-error :messages="$errors->get('dob')" class="mt-2" />
        </div> 

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('teacher.login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Uploade Request for Register') }}
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

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script



</body>
</html>
