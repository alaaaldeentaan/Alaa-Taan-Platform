<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,   shrink-to-fit=no">
        <title>course traning</title>
    </head>
    <body>
            <div>
                <h2>Create a course traning</h2>
                <hr>
                <form method="POST" action="{{route('course_traning.store')}}" enctype="multipart/form-data" >
                  @csrf
                    <div>
                        <label>Description : </label>
                        <input type="text" name="description" placeholder="Enter Description">
                    </div>
                    <br>
                     <div >
                        <label>Price : </label>
                        <input type="text" name="price" placeholder="Enter Price">
                    </div>
                     <br>

                    <div>
                            <label>Status Course : </label>
                            <input type="radio" id="true" name="aproved" value="1">
                            <label for="css">Free</label>
                            <input type="radio" id="false" name="aproved" value="0">
                              <label for="html">In Money</label><br>
                    </div>
                    
                    <br>
                    <div>
                      <label>Choose Photo</label>
                        <input type="file"  name="photo">
                    </div>
                    <hr>
                    <button type="submit" >Submit</button>
                </form>
            </div>        
    </body>
</html>
