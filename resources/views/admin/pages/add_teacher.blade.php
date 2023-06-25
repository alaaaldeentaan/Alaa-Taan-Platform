@extends('admin.layouts.app')
    
@section('content')
  <!--                                          -------------         MAIN        --------------                                 -->
  <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>ADD TEACHER</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                      <div class="card">
                          @if(session('success'))
                              <div class="alert alert-success" id="success-message">
                                  {{ session('success') }}
                              </div>
                          @endif
                          <div class="card-body">
                              <form action="{{ route('admin.store_teacher') }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    @method('POST')  
                                          <br>
                                            <div  class="col-sm-12">
                                              <label for="">Name : </label>
                                              <input  type="text" id="name" name="name" placeholder="Give a Teacher Name" required="" class="form-control p_input">
                                            </div>
                                           <br>
                                              <div  class="col-sm-12">
                                                <label for="">User Name</label>
                                                <input  type="text" id="user_Name" name="user_Name" placeholder="Give a Teacher User Name" required="" class="form-control p_input">
                                              </div>

                                              <div  class="col-sm-12">
                                                  <label for="">Language</label>
                                                  <input  type="text" id="language" name="language" placeholder="Give a Teacher language" required="" class="form-control p_input">
                                              </div>
                                               <br>

                                              <div  class="col-sm-12">
                                                  <label for="email" class="form-label">Email </label>
                                                  <input  type="email" id="email" name="email" placeholder="Give a Teacher Email" required="" height="10px" class="form-control p_input">
                                              </div>

                                              <br>

                                              <div  class="col-sm-12">
                                                  <label for=""> Phone</label>
                                                  <input  type="tel" id="phone" name="phone" placeholder="Give a Teacher Phone" required="" height="10px" class="form-control p_input">
                                              </div>
                                              <br>
                                              <div  class="col-sm-12">
                                                  <label for="" class="form-label">Password : </label>
                                                  <input  type="password" id="password" name="password" placeholder="Give a Teacher password"  required autocomplete="new-password" required="" height="10px" class="form-control p_input">
                                              </div>  
                                               <br>
                                              <div  class="col-sm-12">
                                                  <label for="" class="form-label">Confirm Password : </label>
                                                  <input  type="password" id="password_confirmation" placeholder="Give a Teacher password" name="password_confirmation" required autocomplete="new-password"  required="" height="10px" class="form-control p_input">
                                              </div>
                                               <br>  

                                              <div class="col-sm-12">
                                                  <label for="">Certificate photo</label>
                                                  <input type="file" id="photo" name="photo" placeholder="Give a Teacher photo" required="" height="10px" class="form-control p_input">
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
                                                {{-- <input id="address" name="address" placeholder="Give a Teacher Address" required="" height="10px" class="form-control p_input"> --}}
                                                    <textarea id="address" name="address" rows="7" placeholder="Give a Teacher Address"  cols="45" required="" height="30px" class="form-control p_input">
                                                    </textarea>  
                                              </div>
                                              <br>
           
                                              <div  class="col-sm-12">
                                                    <label for="">Birdth</label>
                                                    <input type="date" id="dob" name="dob" placeholder="Give a Teacher Birdth" required="" height="10px" class="form-control p_input">
                                              </div>
                                              <br>
                                              <div class="form-group mt_30">
                                                  <input type="submit" class="btn btn-primary btn-block" value="ADD A New Teacher">
                                              </div>
                                  </form>

@endsection

           {{-- <div class="col-sm-12">
                <label for="">Certificate Image</label>
                <input  type="file"   name="certificate_img" placeholder="Give a Teacher Experience" required="" height="10px" class="form-control p_input">
                </div> --}}

            {{-- <input  type="text" name="is_aproved" placeholder="Give a Student User Name"  class="form-control p_input" hidden> --}}

{{-- @extends('admin.layouts.app')

       
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Uploade Request for Register') }}
            </x-primary-button>
        </div>
    </form>
@endsection --}}

