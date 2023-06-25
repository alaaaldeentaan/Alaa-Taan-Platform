{{--   
@extends('admin.layouts.app')
@section('content')
 <!--                                          -------------         MAIN        --------------                                 -->
     
 <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Add Course Training</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                                       @if (session('success'))
                                            <div class="alert alert-success">
                                            {{ session('success') }}
                                                </div>
                                         @endif
                           <form action="{{ route('admin.store_training') }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    @method('POST')  
                                          <br>
                                              <div  class="col-sm-12">
                                                <label for="">Description : </label>
                                                <input  type="text" id="description" name="description" required="" class="form-control p_input">
                                              </div>
                                              <br>
                                              <div  class="col-sm-12">
                                                  <label for="">Count Episode : </label>
                                                  <input  type="number" id="count_episod" name="count_episod" min="0" max="1000"  required="" class="form-control p_input">
                                              </div>
                                               <br>

                                              <div  class="col-sm-12">
                                                  <label for="email" class="form-label">Price : </label>
                                                  <input  type="number" id="price" name="price"   required="" height="10px" min="0" max="1000" class="form-control p_input">
                                              </div>

                                              <br>

                                              <div  class="col-sm-12">
                                                  <label for=""> Duration :</label>
                                                  <input  type="text" id="duration" name="duration"  required="" height="10px" class="form-control p_input">
                                              </div>

                                               <br>

                                              <div class="col-sm-12">
                                                    <label for="">Course photo</label>
                                                    <input type="file" id="photo" name="photo" placeholder="Give a Teacher photo" required="" height="10px" class="form-control p_input">
                                                </div>
                                                <br>

                                              <div  class="col-sm-12">
                                                  <label for=""> Teacher Id :</label>
                                                  <input  type="number" id="teacher_id" name="teacher_id"  min="0" max="1000"  required="" height="10px" class="form-control p_input">
                                              </div>
                                              <br>
                                              <div class="col-sm-12">
                                                  <label for=""> Teacher Id :</label>
                                                    <select style="width: 150px;" name="teacher" id="nameid" >
                                                    
                                                    <option></option>
                                                        @foreach($data as $d)
                                                            <option value="{{ $d->id}}">{{$d->id}} : {{$d->name}}</option>
                                                        @endforeach
                                                    </select>
                                              </div>

                             
                                              <br>
                                             <div class="col-sm-12">
                                                    <label for="gender" class="form-label">Category Course Id :</label><br>
                                                    <select class="form-select" id="category__course_id" name="category__course_id" required>
                                                            @foreach ($categorys as $category)
                                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach   
                                                    </select>
                                              </div>  

                                               <br>
                                              <div class="form-group mt_30">
                                                  <input type="submit" class="btn btn-primary btn-block" value="Update The Course Training">
                                              </div>
                                  </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection --}}
{{-- @section('script')
         <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

         <script type="text/javascript">

            $("#nameid").select2({
                    placeholder: "Select a Name",
                    allowClear: true ,
                });
      </script> 
@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" >

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
       
    @include('admin.layouts.css');
    <title>Admin Panel</title>
</head>
<body>
        <div id="app">
        <div class="main-wrapper">
    @include('admin.layouts.navbar')

    <div>
        @include('admin.layouts.sidebar');
    </div>

 <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Add Course Training</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                                       @if (session('success'))
                                            <div class="alert alert-success">
                                            {{ session('success') }}
                                                </div>
                                         @endif
                             <form action="{{ route('admin.store_training') }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    @method('POST')  
                                          <br>
                                                   <div  class="col-sm-12">
                                                  <label for=""> Teacher Id :</label>
                                                    <select style="width: 150px;" name="teacher_id" id="nameid" >
                                                    <option></option>
                                                    @foreach($data as $d)
                                                        <option value="{{ $d->id}}">{{$d->id}} : {{$d->name}}</option>
                                                    @endforeach
                                                    </select>
                                              </div>
                                              {{-- <br>
                                             <div class="col-sm-12">
                                                    <label for="gender" class="form-label">Category Course Id :</label><br>
                                                    <select class="form-select" id="category__course_id" name="category__course_id" required>
                                                            @foreach ($categorys as $category)
                                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach   
                                                    </select>
                                              </div>   --}}
                                               <br>
                                                  <div  class="col-sm-12">
                                                  <label for=""> Category Course :</label>
                                                    <select style="width: 150px" name="category__course_id" id="nameid1" >
                                                    <option></option>
                                                    @foreach ($categorys as $category)
                                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach  
                                                    </select>
                                              </div>
                                               <br>
                                              <div  class="col-sm-12">
                                                <label for="">Description : </label>
                                                <input  type="text" id="description" name="description" required="" class="form-control p_input">
                                              </div>
                                              <br>
                                              <div  class="col-sm-12">
                                                  <label for="">Count Episode : </label>
                                                  <input  type="number" id="count_episod" name="count_episod" min="0" max="1000"  required="" class="form-control p_input">
                                              </div>
                                               <br>

                                              <div  class="col-sm-12">
                                                  <label for="email" class="form-label">Price : </label>
                                                  <input  type="number" id="price" name="price"   required="" height="10px" min="0" max="1000" class="form-control p_input">
                                              </div>

                                              <br>

                                              <div  class="col-sm-12">
                                                  <label for=""> Duration :</label>
                                                  <input  type="text" id="duration" name="duration"  required="" height="10px" class="form-control p_input">
                                              </div>

                                               <br>

                                              <div class="col-sm-12">
                                                    <label for="">Course photo</label>
                                                    <input type="file" id="photo" name="photo" placeholder="Give a Teacher photo" required="" height="10px" class="form-control p_input">
                                                </div>
                                                <br>

                                              {{-- <div  class="col-sm-12">
                                                  <label for=""> Teacher Id :</label>
                                                  <input  type="number" id="teacher_id" name="teacher_id"  min="0" max="1000"  required="" height="10px" class="form-control p_input">
                                              </div> --}}
                                              <br>

                                     
                                              <div class="form-group mt_30">
                                                  <input type="submit" class="btn btn-primary btn-block" value="Create New Course Training">
                                              </div>
                                  </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content">
        
            </div>
    </section>
     <div class="main-content">
        
            </div>
</div>
 
</body>

</html>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

         <script type="text/javascript">

       $("#nameid").select2({
            placeholder: "Select a Name",
            allowClear: true ,
        });
          $("#nameid1").select2({
            placeholder: "Select a Name",
            allowClear: true ,
        });
   </script>