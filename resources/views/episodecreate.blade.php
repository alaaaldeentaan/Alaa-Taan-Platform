<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,   shrink-to-fit=no">
        <title>Video upload</title>
    </head>
    <body>
            <div>
                <h3>Upload a Episode </h3>
                <hr>
                <form method="POST" action="{{route('episode.store')}}" enctype="multipart/form-data" >
                  @csrf
                    <div >
                        <label>Title : </label>
                        <input type="text" name="title" placeholder="Enter Title">
                    </div>
                    <br>
                     <div >
                        <label>Description : </label>
                        <input type="text" name="description" placeholder="Enter Description">
                    </div>
                     <br>
                            <label>Status Episode : </label>
                            <input type="radio" id="true" name="status" value="1">
                               <label for="css">Public</label>
                          
                            <input type="radio" id="false" name="status" value="0">
                              <label for="html">Privat</label><br>
                    <div >
                        <br>
                        <label>Choose Video</label>
                        <input type="file"  name="video">
                    </div>
                    <br>
                      <label>Choose Photo</label>
                        <input type="file"  name="photo">
                    </div>
                    <hr>
                    <button type="submit" >Submit</button>
                </form>
            </div>        
    </body>
</html>
