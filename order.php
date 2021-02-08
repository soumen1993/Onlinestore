<?php
 require 'config.php';
 
 /* if(isset($_GET['ID'])){
	 $id=$_GET['ID'];
	 $sql="SELECT * FROM product WHERE ID='$id'"; 
	 $result=mysqli_query($conn,$sql);
	 while($row= mysqli_fetch_array($result)){
		 $pname=$row['product_name'];
	     $pprice=$row['product_price'];
		 $pimage=$row['product_image'];
	 }
	  */
	 /* $delcharge=50;
	 $total_price=$pprice+$delcharge; */
	 $id=$_GET['id'];
	 $sql="SELECT * FROM product WHERE id='$id'";
	 $result=mysqli_query($conn,$sql);
	 while($row= mysqli_fetch_array($result)){
		 
		 $pname=$row['product_name'];
	     $pprice=$row['product_price'];
		 $pimage=$row['product_image'];
	 }
         $total_price=$pprice+50;
?>
<html>
<head>
<title>Complete your Order</title>

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
<div class="container">
<div class="row justify-content-center">
<div class="col-md-10 mb-5">
<h2 class="text-center p-2 text-primary">Fill The Details To complete your Order</h2>
<h3>Product Details :</h3>
<table class="table table-bordered" width="500px">
<tr>
<th>Product Name:</th>
<td><?= $pname; ?></td>
<td rowspan="4" class="text-center"><img src="<?= $pimage;  ?>" width="200"</td>
</tr>
<tr>
<th>Product Price:</th>
<td><?= $pprice; ?>/-</td>
</tr>
<tr>
<th>Product Delivery Charge:</th>
<td><?= 50;  ?>/-</td>
</tr>
<tr>
<th>Total Price:</th>
<td><?=$total_price; ?>/-</td>
</tr>
</table>
<form action="index.html" method="post" accept-charset="utf-8">

<div class="form-group">
<input type="submit" name="submit" class="btn btn-danger btn-lg" value="Click to Pay:Rs.<?= $total_price; ?>"/->
</div>
</form>
</div>
</div>
</body>
</html>