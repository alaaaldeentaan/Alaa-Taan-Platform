{{-- @dd($student); --}}
@extends('admin.layouts.app')

@section('content')
 <!--                                          -------------         MAIN        --------------                                 -->
 <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>ADD STUDENT</h1>
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
                             <form action="{{route('admin.storeupdatestudent' ,$student->id)}}"  method="POST">
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
                            {{-- <input type="password"   name="password_confirmation" value="{{$student->}}" required="" class="form-control p_input"> --}}
                            <img src="{{asset('storage/'.$student->img)}}" alt="" width="200" height="200">
                        </div>
                        <br>
                                <div class="form-group mt_30">
                                    <button type="submit" class="btn btn-primary btn-block">Update Student</button>
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
