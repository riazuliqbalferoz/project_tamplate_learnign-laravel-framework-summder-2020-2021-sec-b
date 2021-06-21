<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Search Product</title>
</head>
<body>
<div class="main p-5">
  <div class="row p-3">
      <div class="col-lg-8 col-sm-8 text-right ">
<input  class=" bg-dark text-white font-weight-bold px-5 py-2" type="text " placeholder=" Serach Product Here">
      </div>
      <div class="col-lg-4 col-sm-12 text-left  ">
        <button  class=" bg-primary text-white font-weight-bold px-3 py-2" >SERARCH</button>
              </div>

  </div>
    <table class="table table-striped table-dark rounded">
      <thead>
        <tr>
          <th scope="col"> Product Name</th>
          <th scope="col">Type</th>
          <th scope="col">Avilablity </th>
          <th scope="col">Avilabe Quantity</th>
          <th scope="col">Product Id</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Shirt</td>
          <td>Cloth</td>
          <td>In sotock</td>
          <td>200</td>
          <td>11122</td>
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
            <td>Fan</td>
            <td>Electric</td>
            <td>In sotock</td>
            <td>20</td>
            <td>111123</td>
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
            <td>Shirt</td>
            <td>Cloth</td>
            <td>In sotock</td>
            <td>200</td>
            <td>11122</td>
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
</div>
</body>
</html>
<style>
    .row input{
width: 450px;
border-radius: 5px;

    }
    .row button{
width: 150px;
border-radius: 5px;

    }
</style>