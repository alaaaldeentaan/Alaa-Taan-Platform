 {{-- @dd($courses); --}}
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
    <h1> the Courses about Search  </h1>
    <hr> --}}
    {{-- @foreach ($courses as $course)
          @dd($course)
         <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress design">
                            <div class="events_item">
                                <div class="thumb">
                                    <a href="{{route('showdetailscourse.showDetailCourse' ,$course->id)}}"><img src="{{ asset( 'storage/'.$course->img) }}" alt="" width="200" height="400"></a>
                                    <span class="category">{{$course->price}}</span>
                                    <span class="price">
                                        <h6><em></em>000</h6>
                                    </span>
                                </div>
                                <div class="down-content">
                                    <span class="author"></span>
                                    <h4>{{$course->id}}</h4>
                                    <h4>{{$course->name}}</h4>
                                    <h4>{{$course->language}}</h4>
                                    <h4>{{$course->coursetranings[1]}}</h4>
                                    <h4>{{$course->description}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1>{{$course->coursetranings}}</h1>
    @endforeach --}}
{{--     
<section class="section courses" id="courses">
  <div class="container">      
    @if( !$courses->isEmpty() )
         @if( $check == 1  )
            @foreach ($courses as $course)
                <div class="row event_box">
                    <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                        <div class="events_item">
                            <div class="thumb">
                                <a href="{{route('showcategorycourses.show' ,$course->id)}}"><img src="{{ asset( 'storage/'.$course->img) }}" alt="" height="300" width="200"/></a>
                                <span class="category">{{$course->duration}}</span>
                                <span class="price">
                                    <h6><em>$</em>{{ $course->price }}</h6>
                                </span>
                                <br>
                                <button class="add-to-cart" data-name="Product 2" data-price="20">
                                    Add to Cart
                                </button>
                            </div>
                            <div class="down-content">
                                <span class="author"> </span>
                                <h4>{{ $course->duration }} </h4>
                            </div>
                        </div>
                    </div>
            @endforeach
         @else
                 @foreach ($courses as $course)
                       @foreach ($course->coursetranings as $cour )
                            <div class="row event_box">
                                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                                    <div class="events_item">
                                                    <div class="thumb">
                                                        <a href="{{route('showcategorycourses.show' ,$cour->id)}}"><img src="{{ asset( 'storage/'.$cour->img) }}" alt="" height="300" width="200"/></a>
                                                        <span class="category">{{$cour->duration}}</span>
                                                        <span class="price">
                                                            <h6><em>$</em>{{ $cour->price }}</h6>
                                                        </span>
                                                        <br>
                                                        <button class="add-to-cart" data-name="Product 2" data-price="20">
                                                            Add to Cart
                                                        </button>
                                                    </div>
                                                <div class="down-content">
                                                    <span class="author"> </span>
                                                    <h4>{{ $cour->duration }} </h4>
                                                </div>
                                    </div>
                                </div>
                   @endforeach
            @endforeach 
         @endif
                @else
                            <h3> Sorry No Result Found About This</h3>
                @endif
        </div>
    </section> --}}

    {{-- <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © 2036 Scholar Organization. All rights reserved. &nbsp;&nbsp;&nbsp; Design: moufeed </p>
            </div>
        </div>
    </footer>
</body>
</html> --}}

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

    <h1>.</h1>
    <h1> The Course About Your Searsh </h1>

    {{-- <section class="section courses" id="courses">
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
        </section> --}}
        
<section class="section courses" id="courses">
  <div class="container">      
      <div class=" side-video-list">
    @if( !$courses->isEmpty() )

         @if( $check == 1  )
         @foreach ($courses as $course)
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
                
                @else
                {{-- @dd('ll'); --}}
                <div class=" side-video-list">
                    @foreach ($courses as $course)
                    @foreach ($course->coursetranings as $cour )
                    
                    <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                        <div class="events_item">
                                   <div class="thumb">
                                                        <a href="{{route('showcategorycourses.show' ,$cour->id)}}"><img src="{{ asset( 'storage/'.$cour->img) }}" alt="" height="300" width="200"/></a>
                                                        <span class="category">{{$cour->duration}}</span>
                                                        <span class="price">
                                                            <h6><em>$</em>{{ $cour->price }}</h6>
                                                        </span>
                                                        <br>
                                                        <button class="add-to-cart" data-name="Product 2" data-price="20">
                                                            Add to Cart
                                                        </button>
                                                    </div>
                                                <div class="down-content">
                                                    <span class="author"> </span>
                                                    <h4>{{ $cour->duration }} </h4>
                                                </div>
                                    </div>
                                </div>
                   @endforeach
            
            @endforeach 
            </div>
         @endif
                @else
                            <h3> Sorry No Result Found About This</h3>
                @endif
             </div>   
        </>
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