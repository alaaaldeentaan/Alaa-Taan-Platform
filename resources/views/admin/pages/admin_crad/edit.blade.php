{{-- @dd($student); --}}
@extends('admin.layouts.app')

@section('content')
 <!--                                          -------------         MAIN        --------------                                 -->
 <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Details Admin</h1>
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
                   
                           <form action="{{ route('admin.storeupdateAdmin' ,$admin->id) }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    @method('POST')  
                                    <br>
                                     <div class="col-sm-12">
                                                  <label for="">Admin photo</label>
                                                  <br>
                                                    <img src="{{asset( $admin->img )}}" alt="" width="200" height="200" style="border-radius: 100px">
                                              </div>
                                             <br>
                                          <br>
                                            <div  class="col-sm-12">
                                              <label for="">Name : </label>
                                              <input  type="text" id="name" name="name" value="{{ $admin->name }}" required="" class="form-control p_input">
                                            </div>
                                           <br>
                                              <div  class="col-sm-12">
                                                <label for="">User Name</label>
                                                <input  type="text" id="user_Name" name="user_Name" value="{{ $admin->user_Name }}" required="" class="form-control p_input">
                                              </div>

                                              <br>

                                              <div  class="col-sm-12">
                                                  <label for="email" class="form-label">Email </label>
                                                  <input  type="email" id="email" readonly name="email" value="{{ $admin->email }}" readonly required="" height="10px" class="form-control p_input">
                                              </div>

                                               <br>  

                                              <div  class="col-sm-12">
                                                    <label for="">created Time :</label>
                                                    <input type="text" readonly value="{{ $admin->created_at }}" required="" height="10px" class="form-control p_input">
                                              </div>
                                              <br>
                                              <div  class="col-sm-12">
                                                    <label for="">updated Time :</label>
                                                    <input type="text" readonly  value="{{ $admin->updated_at }}" required="" height="10px" class="form-control p_input">
                                              </div>
                                              <br>
                                              <div class="form-group mt_30">
                                                  <input type="submit" class="btn btn-primary btn-block" value="Update The Admin">
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
