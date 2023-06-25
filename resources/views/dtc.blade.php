{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <title>moufeed </title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/styleall.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/Header.css')}}">
    <link rel="stylesheet" href="{{ asset('css/dtc.css')}}">


</head>

<body>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="{/}" class="logo">
                            <h1>moufeed</h1>
                        </a>
            
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="/Services">Services</a></li>
                            <li class="scroll-to-section"><a href="/courses">Courses</a></li>
                            <li class="scroll-to-section"><a href="/teacher">Teacher</a></li>
                            <li class="scroll-to-section"><a href="/Events">Events</a></li>
                            <li class="scroll-to-section"><a href="{{route('register')}}">Register Now!</a></li>
                            <li class="scroll-to-section"><a href="{{route('login')}}">Login</a></li>
                            <li class="scroll-to-section"><a href="/profile"><i class="fas fa-user-circle"></i></a></li>
           
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
               
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
        </div>
    </div>
    </div>


<div class="conteners play-conteners">
    <div class="row">
        <div class="play-video">
            <video controls autoplay>
                <source src="{{ asset('images/Sign in & Sign up Form - Google Chrome 2022-12-03 08-45-22.mp4') }}" type="video/mp4">
            </video>
            <div class="vid-info-o">
                <h2>Video Title</h2>
                <p>Duration: 2 hours</p>
                <p>Instructor: Ahmed Khaled</p>
                <p>Video Description: This video is about...</p>
                <p>Rating: 4.5 / 5</p>
                <p>Number of Buyers: 10000</p>
                <hr>
            <div class="episodes">
                <h3>Episodes</h3>
                <ul>
                    <li><a href="#">Episode 1</a></li>
                    <li><a href="#">Episode 2</a></li>
                    <li><a href="#">Episode 3</a></li>
                </ul>
                <select>
                    <option value="">Select Episode</option>
                    <option value="1">Episode 1</option>
                    <option value="2">Episode 2</option>
                    <option value="3">Episode 3</option>
                </select>
            </div>
            </div>
            
            <div class="owner">
                <img src="{{ asset('images/member-02.jpg') }}" alt="teacher">
                <div>
                    <p>Name teacher</p>
                    <span>spicale web develpment </span>
                </div>
            </div>



        </div>
        
        <div class="right-sidebar">
            @for ($i = 0; $i < 7; $i++)
            <div class="side-video-list">
                <a href="#" class="small-tumb"><img src="{{ asset('images/course-02.jpg') }}" >
                <div class="vid-info">
                    <h2>Video Title</h2>
                    <p>Duration: 2 hours</p>
                    <p>Instructor: Ahmed Khaled</p>
                    <p>Video Description: This video is about...</p>
                    <p>Rating: 4.5 / 5</p>
                    <p>Number of Buyers: 10000</p>
                    </a>
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
  --}}

 {{-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}

{{-- @dd($episodes ); --}}

 @php
    $first = $episodes;
    $chec= 0 ;

@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <title>moufeed </title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/styleall.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/Header.css')}}">
    <link rel="stylesheet" href="{{ asset('css/dtc.css')}}">
</head>

<body>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="{/}" class="logo">
                            <h1>moufeed</h1>
                        </a>
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="/Services">Services</a></li>
                            <li class="scroll-to-section"><a href="/courses">Courses</a></li>
                            <li class="scroll-to-section"><a href="/teacher">Teacher</a></li>
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
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
        </div>
    </div>
    </div>


<div class="conteners play-conteners">
    <div class="row">
        <div class="play-video">
            @if( !$first->isEmpty() )
                 @if( !$first->isEmpty() &&  $chec == 0 )
                    <video controls autoplay>
                        <source src="{{ asset('storage/'.$first[0]->link ) }}" type="video/mp4">
                    </video>
                 @else
                 <h1>fffffffffffff</h1>
            @endif

            <div class="vid-info-o">
                <h2>Video Title</h2>
                <p>{{$first[0]->title}}</p>
                <p>{{$first[0]->description}}</p>
                <hr>
        
                <div class="episodes">
                  <h3>Teacher Information</h3>
                </div>
                 <div class="owner">
                <img src="{{asset($teacher->img)}}" alt="teacher">
                <div>
                    <h3>{{$teacher->name}}</h3>
                    <p>{{$teacher->address}}</p>
                    <p>{{$teacher->pphone}}</p>
                    <p>{{$teacher->language}}</p>
                    <p>{{$teacher->email}}</p>  
                </div>
            </div>
            </div>
                <div>   
                <img src="{{ asset($teacher->img)}}" alt="teacher" height="400" width="100">
                </div>          
        </div>
        
        <div class="right-sidebar">
            @foreach ($episodes as $episode)
            <div class="side-video-list">
                    <a class="small-tumb" href= "{{route('episodes.teacher.array' , [$episode->id ,$teacher->id  , $course->id ] ) }}" > 
                <img src="{{ asset( 'storage/'.$episode->img) }}">
                <div class="vid-info">
                    <h2>{{$episode->title}}</h2>
                    <p>{{$episode->description}}</p>
                    <p>{{$episode->created_at}}</p>
                    <p>{{$episode->updated_at}}</p>
                    <p>{{$episode->description}}</p>
                    </a>
                </div>
            </div>
            @endforeach                     
        </div>
        @else
               <div class="container">
                    No Vedio Found Yet ???
               </div>
            @endif
    </div>
</div>
    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © 2036 moufeed Organization.All rights reserved. &nbsp;&nbsp;&nbsp; Design: moufeed </p>
            </div>
        </div>
    </footer>
</body> ['episodLink' => $episodLink, 'teacher' => $teacher, 'course' => $course_traning, 'episodes' => $episodes, 'check' => $check]);
</html>
