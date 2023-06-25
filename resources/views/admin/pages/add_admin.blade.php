{{-- @dd($student); --}}
@extends('admin.layouts.app')
@section('content')
 <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Add A New Admin</h1>
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
                                     <form action="{{route('admin.store_admin')}}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    @method('POST')  
                                       <br>
                                            <div  class="col-sm-12">
                                                <label for=""> User Name : </label>
                                                <input  type="text" id="user_Name" name="user_Name" placeholder="Give a Admin User Name " required="" height="10px" class="form-control p_input">
                                            </div>
                                            <br>
                                              <div  class="col-sm-12">
                                                <label for="">name : </label>
                                                <input  type="text" id="name" name="name" placeholder="Give a Admin name" required="" class="form-control p_input">
                                              </div>
                                              <br>
                                                 <div  class="col-sm-12">
                                                  <label for="email" class="form-label">Email </label>
                                                  <input  type="email" id="email" name="email" placeholder="Give a Admin Email" required="" height="10px" class="form-control p_input">
                                              </div>
                                              <br>
                                              <div  class="col-sm-12">
                                                  <label for="" class="form-label">Password : </label>
                                                  <input  type="password" id="password" name="password" placeholder="Give a Admin password"  required autocomplete="new-password" required="" height="10px" class="form-control p_input">
                                              </div>  
                                               <br>
                                              <div  class="col-sm-12">
                                                  <label for="" class="form-label">Confirm Password : </label>
                                                  <input  type="password" id="password_confirmation" placeholder="Give a Admin password" name="password_confirmation" required autocomplete="new-password"  required="" height="10px" class="form-control p_input">
                                              </div>
                                               <br>  
                                               <br>
                                              <div class="form-group mt_30">
                                                  <input type="submit" class="btn btn-primary btn-block" value="Add New Admin">
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
 
            </div>
@endsection
