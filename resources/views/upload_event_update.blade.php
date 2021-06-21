<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploead Events</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</head>
<body>
    <div class="main text-center p-5">
 
    <lable class="text-white p-5 font-weight-bold"><h1>List of Upload Evetnts</h1></lable>

    <table class="table table-striped table-info rounded">
      <thead>
        <tr>
          <th scope="col">Event Id</th>
          <th scope="col">Title</th>
          <th scope="col">Picture</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>01</td>
          <td>New offer</td>
          <td>this.img</td>
          <td>
            <button class="bg-danger px-3">
            DELETE
          </button> 
          <button class=" px-3">
              Edit Info
          </button>
      </td>
        </tr>
        <tr>
        <td>02</td>
          <td>New offer</td>
          <td>this.img</td>
          <td>
              <button class="bg-danger px-3">
              DELETE
            </button> 
            <button class=" px-3">
                Edit Info
            </button>
        </td>
          
        </tr>
        <tr>
        <td>03</td>
          <td>New offer</td>
          <td>this.img</td>
          <td>
            <button class="bg-danger px-3">
            DELETE
          </button> 
          <button class=" px-3">
              Edit Info
          </button>
      </td>
          
        </tr>
      </tbody>
    </table>

        <h1 class="text-white  text-center p-2 font-weight-bold">Edit  Uuploaded Events  </h1>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Evetn Tittle" aria-label="Evetn_Tittle" aria-describedby="basic-addon1">
          </div>
          
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
            
           
          </div>
          
         
          <button type="button " class="btn btn-info ">Edit Previous Events</button>   

    </div>
</body>
</html>

<style>
.main{
padding: 50px;
background-color: black;

}


</style>