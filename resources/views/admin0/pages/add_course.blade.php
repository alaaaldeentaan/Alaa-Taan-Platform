@extends('teacher.layouts.app')

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>ADD COURSE</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                                <form action="" >
                   
            <div  class="col-sm-12">
            <label for="">Description</label><br>
           <textarea placeholder="ENTER DESCRIPTION FOR THE THIS COURSE" name="description" id="" cols="200" rows="20"></textarea>
        </div>
      
            <div  class="col-sm-12">
            <label for="">Count Episode</label>
            <input  type="number"  name="Count_Episode" placeholder="Give a Student Count Episode" required="" class="form-control p_input">
                  </div>
                  <div  class="col-sm-12">
            <label for="">Price</label>
            <input  type="number"  name="Price" placeholder="Give a Course Price" required="" class="form-control p_input">
                  </div>
                       <div  class="col-sm-12">
            <label for="">Duration</label>
            <input  type="number"  name="Price" placeholder="Give a Course Duration" required="" class="form-control p_input">
                  </div>

             
                 <div class="col-sm-12">
                <label for="">Photo</label>
                <input  type="file" name="Cartificates" placeholder="Give a Trainer Experience" required="" height="10px" class="form-control p_input">
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

