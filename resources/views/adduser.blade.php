<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <title>Data Insertion </title>
</head>
<body>
    <div class="container text-center pt-5">

    <h1 class="pb-3"> User Registration.</h1>


    <form action="add" methood="post" >
@csrf
    <div class="from-group">
            
            
        <div class="from-group">
                <label> User Name</label>

                <input type="text" class="from-control"  name="name" placeholder="Your Name"/><br><br>
                <br>
                <span style="color:red"> @error('name'){{$message}} @enderror </span>
                </div>
                <div class="from-group">

                <label>Your Address</label>
                <input type="text" class="from-control"name="address"  placeholder="Your Address"/>
                <br>
                <span style="color:red"> @error('address'){{$message}} @enderror </span>
                <br><br>
                </div>
                <div class="from-group">
                <label>Your Eamil</label>
                <input  type="text"class="from-control"  name="email" placeholder="Your Email"/>
                <br>
                <span style="color:red"> @error('email'){{$message}} @enderror </span>
                <br><br>
                </div>
                <div class="from-group">
                <label>Your Password</label>
                <input  type="password" class="from-control" name="passwrod" placeholder="Your Password"/>
                <br>
                <span style="color:red"> @error('passwrod'){{$message}} @enderror </span>
                <br><br>
                </div>

                
                </div>
                <div class="from-group">
                <button class="from-control"  type="submit">Insert</button>
                </div>

            
            </div>
    </form>
    
    </div>
</body>
</html>
