
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"   rel="stylesheet">
    <title>moufeed </title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('css/cd.css')}}">




</head>

<body>




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
    </section>

    



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
