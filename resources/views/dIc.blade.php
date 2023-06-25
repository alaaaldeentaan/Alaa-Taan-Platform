 {{-- <!DOCTYPE html>
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
    <h1> the Details course Id {{$course->id}} </h1>
    <hr>

         <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress design">
                            <div class="events_item">
                                <div class="thumb">
                                    <img src="{{ asset( 'storage/'.$course->img) }}" alt="" width="200" height="400">
                                    <span class="category">{{$course->price}}</span>
                                    <span class="price">
                                        <h6><em></em>000</h6>
                                    </span>
                                </div>
                                <div class="down-content">
                                    <span class="author"></span>
                                    <h4>{{$course->price}}</h4>
                                    <h4>{{$course->description}}</h4>
                                    <h4>{{$course->count_episod}}</h4>
                                    <h4>{{$course->duration}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
             @foreach ($episodes as $episode)
                 <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress design">
                            <div class="events_item">
                                <div class="thumb">
                                    <img src="{{ asset( 'storage/'.$episode->img) }}" alt="" width="200" height="400">
                
                                      <video src="{{URL::asset( 'storage/'.$episode->link)}}" controls
                                                  width="1400" height="600"> </video> …
                                    <span class="category">{{$episode->title}}</span>
                                    <span class="price">
                                        <h6><em></em>000</h6>
                                    </span>
                                </div>
                                <div class="down-content">
                                    <span class="author">{{$episode->title}}</span>
                                    <h4>{{$episode->description}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

</body>
</html> --}}
{{-- @dd($episodLink); --}}
{{-- @dd(     $episodLink->link,
          $teacher,
         $course ,
         $episodes,
          $check
          ) --}}
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
                    <video controls autoplay>
                        <source src="{{ asset('storage/'.$episodLink->link ) }}" type="video/mp4">
                    </video>

            <div class="vid-info-o">
                <h2>Video Title</h2>
                <p>{{$episodLink->title}}</p>
                <p>{{$episodLink->description}}</p>
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
                <div  class="episodes">   
                  <img src="{{asset($teacher->img)}}" alt="teacher" height="400" width="100">
                </div>          
        </div>
        
        <div class="right-sidebar">
            @foreach ($episodes->episodes as $episode)
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
    </div>
</div>
    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © 2036 moufeed Organization.All rights reserved. &nbsp;&nbsp;&nbsp; Design: moufeed </p>
            </div>
        </div>
    </footer>
</body> 
</html>
