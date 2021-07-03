<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <title> Reset password</title>
</head>


<body>
    
<div class="main">
   <h1>Reset Password</h1>
    <div class="container text-center ">
        <div class="row">
            <div class="col-lg-2">

            </div>
            <div class="col-lg-8  ">
                <label> Current Password</label>
                
                <div class="form-group pass_show"> 
                    <input type="password" value="" class="form-control" placeholder="Current Password"> 
                </div> 
                   <label>New Password</label>
                <div class="form-group pass_show"> 
                    <input type="password" value="" class="form-control" placeholder="New Password"> 
                </div> 
                   <label>Confirm Password</label>
                <div class="form-group pass_show"> 
                    <input type="password" value="" class="form-control" placeholder="Confirm Password"> 
                </div> 
                <div class="confirm">
                    <input class="px-5 py-2 " type="submit" value="Confirm">
                </div>
            </div>  
        </div>
    </div>
    
</div>
<script>
      
$(document).ready(function(){
    $('.pass_show').append('<span class="ptxt">Show</span>');  
    });
      
    
    $(document).on('click','.pass_show .ptxt', function(){ 
    
    $(this).text($(this).text() == "Show" ? "Hide" : "Show"); 
    
    $(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; }); 
    
    });
</script>  
</body>
</html>

<style>
   
   .main {
      
       padding: 50px;
      height: 600px;
width: auto;
background-color: rgb(15, 18, 24);

   }
.main label{
color: white;
}
   .main h1{
       text-align: center;
       font-size:45px;
       font-weight: bold;
       color: rgb(235, 216, 216);

   }
    .pass_show{position: relative} 

.pass_show .ptxt { 

position: absolute; 

top: 50%; 

right: 10px; 

z-index: 1; 

color: #f36c01; 

margin-top: -10px; 

cursor: pointer; 

transition: .3s ease all; 

} 

.pass_show .ptxt:hover{color: #333333;} 
</style>