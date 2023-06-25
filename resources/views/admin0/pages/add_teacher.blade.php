@extends('teacherlayouts.app')

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
                    <div class="card-body">
        <form action="" method="POST">
            @csrf
            
            <div  class="col-sm-12">
            <label for="">Name</label>
            <input  type="text" name="name" placeholder="Give a Teacher User Name" required="" class="form-control p_input">
            </div>

            <div  class="col-sm-12">
            <label for="">User Name</label>
            <input  type="text" name="User_Name" placeholder="Give a Teacher Name" required="" class="form-control p_input">
                    </div>
        
            
            <div  class="col-sm-12">
                <label for="">Birdth</label>
                <input type="date" name="Birdth" placeholder="Give a Teacher Birdth" required="" height="10px" class="form-control p_input">
                </div>
        
            <div  class="col-sm-12">
                <label for=""> Phone</label>
                <input  type="number" name="Phone" placeholder="Give a Teacher Phone" required="" height="10px" class="form-control p_input">
                </div>
        
            <div  class="col-sm-12">
                <label for="email" class="form-label">Email </label>
                
                <input  type="email" name="Email" placeholder="Give a Teacher Email" required="" height="10px" class="form-control p_input">
                </div>
                        
            <div  class="col-sm-12">
                <label for=""> Address</label>
                <input  name="Address" placeholder="Give a Teacher Address" required="" height="10px" class="form-control p_input">
                </div>
        <br>
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
                </div>

        <br>
                <div class="col-sm-12">
                <label for="">Evaluation</label>
                <input type="number" name="evaluation" placeholder="Give a Teacher evaluation" required="" height="10px" class="form-control p_input">
                </div>	
                <div class="col-sm-12">
                <label for="">Experience</label>
                <input   name="Cartificates" placeholder="Give a Teacher Experience" required="" height="10px" class="form-control p_input">
                </div>
                
        </form>

                                <div class="form-group mt_30">
                                    <button type="submit" class="btn btn-primary btn-block">ADD</button>
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
