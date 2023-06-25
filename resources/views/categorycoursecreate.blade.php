<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,   shrink-to-fit=no">
        <title>course Category</title>
    </head>
    <body>
            <div>
                <h2>Create a Category course</h2>
                <hr>

                <form method="POST" action="{{route('course_category.store')}}" enctype="multipart/form-data" >
                  @csrf
                   <div >
                        <label>name : </label>
                        <input type="text" name="name" placeholder="Enter name">
                    </div>
                     <br>

                    <div>
                        <label>Description : </label>
                        <input type="text" name="description" placeholder="Enter Description">
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
