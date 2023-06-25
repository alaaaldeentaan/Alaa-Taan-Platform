{{-- @dd($student); --}}
@extends('admin.layouts.app')

@section('content')
 <!--                                          -------------         MAIN        --------------                                 -->
 <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Show Deatils Course Training</h1>
        </div>
        <div class="section-header">
                   <div class="col-sm-12">
                    <label for="">Course photo</label>
                    <br>
                    {{-- <input type="file" id="photo" name="photo"  value="{{ $teacher->certificate_img }}" required="" height="10px" class="form-control p_input"> --}}
                    <img src="{{asset('storage/'. $course->img )}}" alt="" width="200" height="200" style="border-radius: 100px">
                </div>
                <br>
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
                    {{-- <form action="{{route('admin.storeupdatestudent' ,$student->id)}}"  method="POST">
                        @csrf
                        @method('POST')
                        <br>
                     <div  class="col-sm-12">
                            <label for="">User Name</label>
                            <input  type="text" name="user_name" value="{{$student->user_name}}" required="" class="form-control p_input">
                     </div>
                        <br>
                          <div  class="col-sm-12"> 
                                <label for="">First Name</label>
                                <input  type="text" name="first_name" value="{{$student->first_name}}"  required="" class="form-control p_input">
                          </div>
                             <br>
                             <div  class="col-sm-12"> 
                                <label for="">Last Name</label>
                                <input  type="text" name="last_name" value="{{$student->last_name}}" required="" class="form-control p_input">
                          </div>
                            <br>
                
                    <div  class="col-sm-12">
                            <label for="email" class="form-label">Email </label>
                            <input  type="email" name="email" value="{{$student->email}}" required="" class="form-control p_input" readonly>
                    </div>
                         <br>
                
                          <div  class="col-sm-12">
                            <label for=""> </label>
                            <input type="password"   name="password_confirmation" value="{{$student->}}" required="" class="form-control p_input">
                            <img src="{{asset('storage/'.$student->img)}}" alt="" width="200" height="200">
                        </div>
                        <br>
                                <div class="form-group mt_30">
                                    <button type="submit" class="btn btn-primary btn-block">Update Student</button>
                                </div>
                            </form> --}}
                           <form action="{{route('admin.storeupdatetraining' , $course->id)}}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    @method('POST')  
                                          <br>
                                            <div  class="col-sm-12">
                                              <label for="">ID : </label>
                                              <input  type="text" id="id" name="id" value="{{ $course->id }}" required="" class="form-control p_input">
                                            </div>
                                           <br>
                                              <div  class="col-sm-12">
                                                <label for="">Description : </label>
                                                <input  type="text" id="description" name="description" value="{{ $course->description }}" required="" class="form-control p_input">
                                              </div>
                                              <br>
                                              <div  class="col-sm-12">
                                                  <label for="">Count Episode : </label>
                                                  <input  type="text" id="count_episod" name="count_episod" value="{{ $course->count_episod }}" required="" class="form-control p_input">
                                              </div>
                                               <br>

                                              <div  class="col-sm-12">
                                                  <label for="email" class="form-label">Price : </label>
                                                  <input  type="text" id="price" name="price" value="{{ $course->price }}"  required="" height="10px" class="form-control p_input">
                                              </div>

                                              <br>

                                              <div  class="col-sm-12">
                                                  <label for=""> Duration :</label>
                                                  <input  type="text" id="duration" name="duration" value="{{ $course->duration }}" required="" height="10px" class="form-control p_input">
                                              </div>

                                               <br>
                                           

                                              <div  class="col-sm-12">
                                                  <label for=""> Teacher Id :</label>
                                                  <input  type="text" id="teacher_id" name="teacher_id" value="{{ $course->teacher_id }}" required="" height="10px" class="form-control p_input">
                                              </div>

                                               <br>

                                              <div  class="col-sm-12">
                                                    <label for="">Category Course Id :</label>
                                                    <input type="text" id="category__course_id" name="category__course_id" value="{{ $course->category__course_id }}" required="" height="10px" class="form-control p_input">
                                                            <br>

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
 <div class="main-content">
    <section class="section">
          <div class="section-header">
                                     <div  class="col-sm-12">
                                                  <label for=""> Teacher Id :</label>
                                                  <input  type="text" id="teacher_id" name="teacher_id" value="{{ $course->teacher_id }}" required="" height="10px" class="form-control p_input">
                                                    <br>
                                                       <form action="{{ route('admin.updateteacher' , $course->teacher_id )}}" method="POST">
                                                            @csrf
                                                            @method('POST')
                                                                <button type="submit"
                                                                class="btn btn-danger">
                                                                     Read More About Teacher
                                                                </button>  
                                                       </form> 
                                              </div>
                                    <br>
                              </div>
                              <div class="section-header">
                                 <div  class="col-sm-12">
                                                    <label for="">Category Course Id :</label>
                                                    <input type="text" id="category__course_id" name="category__course_id" value="{{ $course->category__course_id }}" required="" height="10px" class="form-control p_input">
                                                            <br>

                                                       <form action="{{route('admin.detial_Category',$course->category__course_id)}}" method="POST">
                                                            @csrf
                                                            @method('POST')
                                                                <button type="submit"
                                                                 class="btn btn-danger" >
                                                                    Read More About Category Course
                                                                </button>  
                                                       </form>
                                 </div>
                          </div>
                    </div>
            </div>
@endsection
