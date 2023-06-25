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
                             <form action="{{route('admin.storeStudent')}}"  method="POST">
                                 @csrf
                                 @method('POST')
                                  <br>
                     <div  class="col-sm-12">
                            <label for="">User Name</label>
                            <input  type="text" name="user_name" placeholder="Give a User Name" required="" class="form-control p_input">
                     </div>
                        <br>
                          <div  class="col-sm-12"> 
                                <label for="">First Name</label>
                                <input  type="text" name="first_name" placeholder="Give a Student First Name" required="" class="form-control p_input">
                          </div>
                             <br>
                             <div  class="col-sm-12"> 
                                <label for="">Last Name</label>
                                <input  type="text" name="last_name" placeholder="Give a Student First Name" required="" class="form-control p_input">
                          </div>
                            <br>
                
                    <div  class="col-sm-12">
                            <label for="email" class="form-label">Email </label>
                            <input  type="email" name="email" placeholder="Give a Student Email" required="" class="form-control p_input">
                    </div>
                         <br>
                    <div  class="col-sm-12">
                            <label for=""> Password</label>
                            <input type="password"  name="password" placeholder="Give a Student Password" required="" class="form-control p_input">
                        </div>
                        <br>

                          <div  class="col-sm-12">
                            <label for="">Comfirm Password</label>
                            <input type="password"   name="password_confirmation" placeholder="Give a Student Password" required="" class="form-control p_input">
                        </div>
                        <br>
{{-- 
                <div class="col-md-12">
                  <label for="country" class="form-label">Country</label><br>
                  <select class="form-select" id="country" required>
                    <option value="">Damascus</option>
                    <option value="">Latakia</option>
                     <option value="">Aleppo</option>
                     <option value="">Homs</option>
                    <option>Hama</option>
                    <option>Tartous</option>
                    <option>Draa</option>
                    <option>AS-Suwayda</option>
                  </select>
                </div> --}}
    
                  <br>
{{--              
                 <div class="col-sm-12">
                <label for="">Photo</label>
                <input  type="file" name="Cartificates" placeholder="Give a Trainer Experience" required="" class="form-control p_input">
                </div>	 --}}
                                <div class="form-group mt_30">
                                    <button type="submit" class="btn btn-primary btn-block">ADD A New Student</button>
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
