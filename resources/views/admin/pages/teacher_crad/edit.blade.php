{{-- @dd($student); --}}
@extends('admin.layouts.app')

@section('content')
 <!--                                          -------------         MAIN        --------------                                 -->
 <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Details Teacher</h1>
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
                           <form action="{{ route('admin.storeupdateteacher' ,$teacher->id) }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    @method('POST')  
                                    <br>
                                     <div class="col-sm-12">
                                                  <label for="">Certificate photo</label>
                                                  <br>
                                                  {{-- <input type="file" id="photo" name="photo"  value="{{ $teacher->certificate_img }}" required="" height="10px" class="form-control p_input"> --}}
                                                    <img src="{{asset( $teacher->img )}}" alt="" width="200" height="200" style="border-radius: 100px">
                                              </div>
                                             <br>
                                          <br>
                                            <div  class="col-sm-12">
                                              <label for="">Name : </label>
                                              <input  type="text" id="name" name="name" value="{{ $teacher->name }}" required="" class="form-control p_input">
                                            </div>
                                           <br>
                                              <div  class="col-sm-12">
                                                <label for="">User Name</label>
                                                <input  type="text" id="user_Name" name="user_Name" value="{{ $teacher->user_Name }}" required="" class="form-control p_input">
                                              </div>

                                              <div  class="col-sm-12">
                                                  <label for="">Language</label>
                                                  <input  type="text" id="language" name="language" value="{{ $teacher->language }}" required="" class="form-control p_input">
                                              </div>
                                               <br>

                                              <div  class="col-sm-12">
                                                  <label for="email" class="form-label">Email </label>
                                                  <input  type="email" id="email" name="email" value="{{ $teacher->email }}" readonly required="" height="10px" class="form-control p_input">
                                              </div>

                                              <br>

                                              <div  class="col-sm-12">
                                                  <label for=""> Phone</label>
                                                  <input  type="tel" id="phone" name="phone" value="{{ $teacher->phone }}" required="" height="10px" class="form-control p_input">
                                              </div>
                                               <br>
                                             
                                              <div class="col-md-12">
                                                    <label for="gender" class="form-label">Gender</label><br>
                                                    <select class="form-select" id="gender" name="gender" required>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                    </select>
                                              </div>  
                                               <br>  

                                              <div  class="col-sm-12">
                                                    <label for=""> Address</label>
                                                    <textarea id="address" name="address" rows="7"   cols="45" required="" height="30px" class="form-control p_input">
                                                        {{ $teacher->address }}
                                                    </textarea>  
                                              </div>
                                              <br>
           
                                              <div  class="col-sm-12">
                                                    <label for="">Birdth</label>
                                                    <input type="date" id="dob" name="dob" value="{{ $teacher->dob }}" required="" height="10px" class="form-control p_input">
                                              </div>
                                              <br>
                                              <div class="form-group mt_30">
                                                  <input type="submit" class="btn btn-primary btn-block" value="Update The Teacher">
                                              </div>
                                  </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
