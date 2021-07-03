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
<input  class=" bg-dark text-white font-weight-bold px-5 py-2" type="text " placeholder=" Serach Order Here Here">
      </div>
      <div class="col-lg-4 col-sm-12 text-left  ">
        <button  class=" bg-primary text-white font-weight-bold px-3 py-2" >SERARCH</button>
              </div>

  </div>
    <table class="table table-striped table-info rounded text-center">
      <thead>
        <tr >
          <th scope="col"> Order Id</th>
          <th scope="col">User Name</th>
          <th scope="col">product id  </th>
          <th scope="col">Order Quantity</th>
          <th scope="col">order address</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>16161616</td>
          <td>Riazul Iqbal</td>
          <td>1165661</td>
          <td>2</td>
          <td>Feni</td>
          <td>
              <button class="bg-danger px-3 rounded">
              Suspend
            </button> 
            <button class=" px-3 bg-success rounded">
                confirm order
            </button>
        </td>
        </tr>
        <tr>
        <td>16161616</td>
          <td>Akash</td>
          <td>1165661</td>
          <td>2</td>
          <td>Khulna</td>
          <td>
              <button class="bg-danger px-3 rounded">
              Suspend
            </button> 
            <button class=" px-3 bg-success rounded">
                confirm order
            </button>
        </td>
          
        </tr>
        <tr>
        <td>16161616</td>
          <td>Tuser</td>
          <td>1165661</td>
          <td>2</td>
          <td>dhaka</td>
            <td>
              <button class="bg-danger px-3 rounded">
              Suspend
            </button> 
            <button class=" px-3 bg-success rounded">
                confirm order
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