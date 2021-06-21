<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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
<body>
    <section class="all-navber container">
        <div class="top-nav row align-items-center py-1">
            <ul class="nav left">
                <li class="nav-item">
                    <a class="nav-link disabled" href="#"><i class="fas fa-phone-alt"></i> 017001234523</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-envelope"></i> yourmail@gmail.com</a>
                </li>
            </ul>

            <ul class="nav right ml-auto pr-2">
                <li class="nav-item">
                    <a class="nav-link px-2" href="#"><i class="fab fa-facebook-f rounded-circle"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2" href="#"><i class="fab fa-instagram rounded-circle"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2" href="#"><i class="fab fa-twitter rounded-circle"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2" href="#"><i class="fab fa-linkedin-in rounded-circle"></i></a>
                </li>
            </ul>
        </div>
        
       <nav class="navbar navbar-expand-lg navbar-light sticky-top my-2 py-2">
            <a class="navbar-brand" href="">Virtual Product development and Manufacturing Platform</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('/add_agent_seller')}}">Agent Seller</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/login')}}">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact.html">Contact</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="btn" href="#" role="button"  data-toggle="modal" data-target="#exampleModal"><i class="fas fa-search"></i></a>
                    </li>
                   
                </ul>
            </div>
        </nav>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header border-0 mx-4">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-4 my-2">
                         <form class=" my-2 my-lg-0">
                            <input class="form-control mr-sm-2 rounded-pill px-4" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- header -->
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/image/img-1.jpg" class="d-block w-100" alt="header image" height="600px">
                     <div class="carousel-caption d-none d-md-block">
                        <h1>Here is our <br> Header</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/image/img-2.jpg" class="d-block w-100" alt="header image" height="600px">
                     <div class="carousel-caption d-none d-md-block">
                        <h1>Here is our <br> Header</h1>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="./assets/image/img-3.jpg" class="d-block w-100" alt="header image" height="600px">

                     <div class="carousel-caption d-none d-md-block">
                        <h1>Here is our <br> Header</h1>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <!-- header finish -->



     <!-- footer -->
    <footer class="text-white mt-5">
        <div class="container">
            <div class="row px-2 pt-5 pb-2 justify-content-around">
                <div class="col-4">
                    <h1 class="mb-4">Logo</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque quod, accusantium repudiandae fuga corrupti aspernatur nobis quos magnam.</p>
                </div>
                <div class="col-3 d-flex justify-content-center">
                    <div>
                        <h4 class="mb-3">Our Services</h4>
                        <div class="service"><i class="fas fa-hand-point-right mr-2"></i> Service 1</div>
                        <div class="service"><i class="fas fa-hand-point-right mr-2"></i> Service 2</div>
                        <div class="service"><i class="fas fa-hand-point-right mr-2"></i> Service 3</div>
                        <div class="service"><i class="fas fa-hand-point-right mr-2"></i> Service name 4</div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-end">
                    <div>
                        <h4 class="mb-3">Contact with us</h4>
                        <div class="social-icon">
                            <i class="fab fa-facebook-f rounded-circle mr-2"></i>
                            <i class="fab fa-instagram rounded-circle mr-2"></i>
                            <i class="fab fa-twitter rounded-circle mr-2"></i>
                            <i class="fab fa-linkedin-in rounded-circle mr-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- bottom footer -->
        <hr class="container-fluid">
        <div class=" bottom-footer container px-5 py-2">
           <i class="far fa-copyright mx-1 mb-3"></i> Himudweepltd.com 2019. All Rights Reserved. 
           <span class="float-right">Developed By ASP Invention</span>
        </div>
    </footer>
    
    <!-- bootstrap -->
    <script src="./assets/bootstrap/jquery-3.5.1.slim.min.js"></script>
    <script src="./assets/bootstrap/popper.min.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

