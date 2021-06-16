<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <!-- font awesome -->
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/fonts/all.min.css">
    <link rel="stylesheet" href="./assets/fonts/all.css">
    <!-- roboto font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="./assets/css/home.css">
</head>
<body class="main">
    <nav class="navbar navbar-expand-lg navbar-light sticky-top my-2 py-2">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.html">login</a>
                </li>
               
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="contact.html">Contact <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mx-2">
                    <a class="btn" href="#" role="button"  data-toggle="modal" data-target="#exampleModal"><i class="fas fa-search"></i></a>
                </li>
                 <li class="nav-item">
                    <a class="btn btn-primary" href="#" role="button">Our Short Profile</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="sidenav">
        <div class="login-main-text text-black-50">
           <h2 >Application<br> Admin Registration Page</h2>
           <p>register from here to User Access.</p>
        </div>
     </div>
     <div class="main">
        <div class="col-md-6 col-sm-12">
           <div class="login-form">
              <form>
                 <div class="form-group">
                    <label >User Name</label>
                    <input type="text" class="form-control" placeholder="User Name">
                 </div>
                 <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                 </div>
                 <div class="form-group">
                    <label>Address</label>
                    <input type="password" class="form-control" placeholder="Password">
                 </div>
                 <div class="form-group">
                    <label>number</label>
                    <input type="text" class="form-control" placeholder="phone Number">
                 </div>
                 <div class="form-group">
                    <label>Picture</label>
                    <input type="file" class="form-control" placeholder="phone Number">
                 </div>
                 <div class="pb-5">                 <button type="submit" class="btn btn-secondary px-5 ">Register</button>
              </form>
           </div>
        </div>
     </div>
<footer>
    </footer>
    
    <!-- bootstrap -->
    <script src="./assets/bootstrap/jquery-3.5.1.slim.min.js"></script>
    <script src="./assets/bootstrap/popper.min.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>



<style>
   body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
 
    background-image: url("1st.jpg");
    background-size: cover ;
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 30%; 
    }

    .sidenav{
        padding: 50px;
        width: 30%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 60%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
</style>
