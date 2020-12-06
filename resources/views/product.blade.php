<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="welcome.blade.php">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="product.blade.php">PRODUCT</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="orderProduct.blade.php">ORDERS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">HISTORY</a>
  </li>
</ul>
<div class="container mt-5">
    <div class="row">
            <div class="col-md-6">
               <h2 class="pt-4"><b>List Product</b></h2>
            </div>
            <div class="col-md-6 pr-auto mt-4">
               <a href="inputProduct.blade.php" class="btn btn-info" value="add">Add</a>
            </div>
         </div>
        <hr class="hr1">
        <div class="row mt-3">
            <table class="table m-3">
                <thead class="table-active">
                    <tr>
                        <th>Product_id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($products as $product)  
                    <tr>
                      <td>{{$product->id}}</td>
                      <td>{{$product->name}}</td>
                      <td>{{$product->price}}</td>
                    @endforeach   
                </thead>