{{-- @dd($student); --}}
@extends('admin.layouts.app')

@section('content')
 <!--                                          -------------         MAIN        --------------                                 -->
 <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Show Deatils Category</h1>
        </div>
        <div class="section-header">
                   <div class="col-sm-12">
                    <label for="">Course photo</label>
                    <br>
                    {{-- <input type="file" id="photo" name="photo"  value="{{ $teacher->certificate_img }}" required="" height="10px" class="form-control p_input"> --}}
                    <img src="{{asset('storage/'. $category->img )}}" alt="" width="200" height="200" style="border-radius: 100px">
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
                                     <form action="{{route('admin.update_detial_Category')}}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    @method('POST')  
                                          <br>
                                            <div  class="col-sm-12">
                                              <label for="">ID : </label>
                                              <input  type="text" name="id" value="{{ $category->id }}" required="" readonly class="form-control p_input">
                                            </div>
                                           <br>
                                              <div  class="col-sm-12">
                                                <label for="">name : </label>
                                                <input  type="text" id="name" name="name" value="{{ $category->name }}" required="" class="form-control p_input">
                                              </div>
                                              <br>
                                              <div  class="col-sm-12">
                                                  <label for="">Description : </label>
                                                  <input  type="text" id="information" name="information" value="{{ $category->information }}" required="" class="form-control p_input">
                                              </div>
                                   
                                              <br>
                                                <div  class="col-sm-12">
                                                  <label for="">Created Time : </label>
                                                  <input  type="text" value="{{ $category->created_at }}"readonly required="" class="form-control p_input">
                                              </div>
                                   
                                              <br>

                                                 <div  class="col-sm-12">
                                                  <label for="">updated Time : </label>
                                                  <input  type="text" value="{{ $category->updated_at }}" readonly required="" class="form-control p_input">
                                              </div>
                                   
                                              <br>
                                              <div class="form-group mt_30">
                                                  <input type="submit" class="btn btn-primary btn-block" value="Update  Deatils Category">
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
