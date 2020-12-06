<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<form method="POST" action="#">
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="welcome.blade.php">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="product.blade.php">PRODUCT</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="orderProduct.blade.php">ORDER</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">HISTORY</a>
  </li>
</ul>

<div class="card" style="width: 25rem;">
  <img src="porsche.jpg" class="card-img-top" alt="10">
  <div class="card-body">
    <h5 class="card-title">Porsche 911</h5>
    <p class="card-text">Powerful twin-turbo six-cylinder horizontally opposed engine in the rear</p>
    <p class="card-text">High-precision Porsche Doppelkupplung (PDK) transmission</p>
    <p class="card-text">Systems for increasing the driving dynamic</p>
  </div>
</div>

<br></br>

<div class="card" style="width: 25rem;">
  <div class="card-body">
    <h5 class="card-title" align="center">Buyer Information</h5>
    <label for="name">Name</label>
    <input type="name" class="form-control" id="name">
    <label for="Cont">Contact</label>
    <input type="Cont" class="form-control" id="Cont">
    <label for="Qua">Quantity</label>
    <input type="Qua" class="form-control" id="Qua">
    <br></br>
    <a href="#" class="btn btn-primary">Submit</a>
  </div>
</div>