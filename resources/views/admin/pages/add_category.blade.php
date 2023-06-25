{{-- @dd($student); --}}
@extends('admin.layouts.app')

@section('content')
 <!--                                     swimming
             2023-06-21 00:05:30
         -------------         MAIN        --------------                                 -->
 <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Add A New Category</h1>
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
                                     <form action="{{route('admin.store_category')}}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    @method('POST')  
                                          <br>
                                              <div  class="col-sm-12">
                                                <label for="">name : </label>
                                                <input  type="text" id="name" name="name"  required="" class="form-control p_input">
                                              </div>
                                              <br>
                                              <div  class="col-sm-12">
                                                  <label for="">Description : </label>
                                                  <input  type="text" id="information" name="information"  required="" class="form-control p_input">
                                              </div>
                                              <br>
                                              <div class="col-sm-12">
                                                    <label for="">Category Photo</label>
                                                    <input type="file" id="photo" name="photo" placeholder="Give a Category photo" required="" height="10px" class="form-control p_input">
                                                </div>
                                                <br>
                                                  <div class="col-sm-12">
                                                    <label for="" class="form-label">Admin The Category :</label><br>
                                                    <select class="form-select" id="admin_id" name="admin_id" required>
                                                            @foreach ($admins as $admin)
                                                                    <option value="{{$admin->id}}">{{$admin->name}}</option>
                                                            @endforeach   
                                                    </select>
                                                  </div>  
                                               <br>
                                              <div class="form-group mt_30">
                                                  <input type="submit" class="btn btn-primary btn-block" value="Add New Category">
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
