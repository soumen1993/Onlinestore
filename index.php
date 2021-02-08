<html>

<head>
<title>Product Page</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">SWIPKART</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">PRODUCT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CATEGORY</a>
      </li>
    </ul>
  </div>
</nav>
<?php 
  require 'config.php';
  $sql="SELECT * FROM product";
  $result=mysqli_query($conn,$sql);
  
?>
<div class="container">
<div class="row">
<?php 
while($row=mysqli_fetch_array($result)){
		
?>
<div class="col-lg-4 mt-3 mb-3">
<div class="card-deck">
<div class="card border-info p-2">
<img src="<?=$row['product_image'];?>" class="card-img-top" height="320">
<h5 class="card-title">Product :<?=$row['product_name'];?></h5>
<h3>Price:<?=$row['product_price'];?></h3>
<a href="order.php?id=<?=$row['id']; ?>" class="btn btn-danger btn-block btn-lg">Buy Now</a>
</div>
</div>
</div>
<?php }?>
</div>
</div>
</body>
</html>