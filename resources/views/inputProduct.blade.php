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
    <a class="nav-link" href="Order.php">ORDER</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">HISTORY</a>
  </li>
</ul>
<form>
  <div class="form-group">
    <label for="PName">Product Name</label>
    <input type="PName" class="form-control" id="PName">
    <div class="col-auto">
    <label for="PName">Price</label>
      </div>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">$USD</div>
        </div>
        <input type="text" class="form-control" id="Price">
        </div>
    </div>
    <label for="Desc">Description</label>
        <textarea class="form-control" id="Desc" name="Desc" rows="3"></textarea>
        <label for="Stock">Stock</label>
    <input type="Stock" class="form-control" id="Stock">
    <div class="form-group">
    <label for="exampleFormControlFile1">Image file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
        <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </div>
</form>