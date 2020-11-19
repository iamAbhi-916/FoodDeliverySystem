<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Cuisines</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="menu.php">Menu</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="about.php">About us</a>
      </li>
     
        <li class="nav-item">
        <a class="nav-link" href="coupons.php">Coupons</a>
      </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/img3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
	<div class = "py-5">
		<h3 class ="text-center"> About us</h3>
	</div>
	<div class = "container-fluid">
		<div class ="row">
			<div class ="col-lg-6 col-md-6 col-12">
				<img src="images/img4.jpg" class= "img-fluid aboutimg">
			
			</div>
			<div class ="col-lg-6 col-md-6 col-12">
				<h2 class = "display-4">Our Speciality</h2>
				<p class = "py-5">
					The macaron is the uncontested star of French patisserie, the most loved petit four in France, and is exported and enjoyed all over the world as a product of superior quality. It is a symbol of our way of life and pastrymaking skill, a supreme example of elegance, balance and refinement.
					</p>
				<a href="menu.php"> See More Specials</a>
			</div>
		
		</div>
	</div>
</section>
<hr>
<section class="my-5">
	<div class = "py-5">
		<h3 class ="text-center">Glance Menu</h3>
	</div>
	<div class= "container-fluid">
		<div class = "row">
			<div class = "col-lg-4 col-md-4 col-12">
							<div class="card">
			  <img class="card-img-top" src="images/img5.jpg" alt="Card image">
			  <div class="card-body">
			    <h4 class="card-title">Italian pizzas</h4>
			    <p class="card-text">>Click on view options to know about variations and prices .</p>
			    <a href="menu.php" class="btn btn-primary">View options</a>
			  </div>
			</div>
		  </div>
		  	<div class = "col-lg-4 col-md-4 col-12">
							<div class="card">
			  <img class="card-img-top" src="images/img6.jpg" alt="Card image">
			  <div class="card-body">
			    <h4 class="card-title">Crispy burgers</h4>
			    <p class="card-text">>Click on view options to know about variations and prices .</p>
			    <a href="menu.php" class="btn btn-primary">View options</a>
			  </div>
			</div>
				
			</div>
				<div class = "col-lg-4 col-md-4 col-12">
							<div class="card">
			  <img class="card-img-top" src="images/img7.jpg" alt="Card image">
			  <div class="card-body">
			    <h4 class="card-title">Desserts</h4>
			    <p class="card-text">Click on view options to know about variations and prices .</p>
			    <a href="menu.php" class="btn btn-primary">View options</a>
			  </div>
			</div>
				
			</div>
		</div>
	</div>
</section>
<hr>
<section class="my-5">
	<div class = "py-5">
		<h3 class ="text-center">List order</h3>
	</div>
	<div class= "w-50 m-auto" >
		<form action = "userinfo.php" method="post">
			<div class ="form-group" >
				<label>Name</label>
				<input type="text" name="user" class ="form-control">
			</div>
			<div class ="form-group" >
				<label>Email Id</label>
				<input type="text" name="email" class ="form-control">
				
			</div>
			<div class ="form-group" >
				<label>Mobile no</label>
				<input type="number" name="mobno" class ="form-control">
				
			</div>
			<div class ="form-group" >
				<label>Orders</label>
				<input type="text" name="orders" class ="form-control">
				
			</div>
			<div class ="form-group" >
				<label>Address</label>
				<textarea class = "form-control" name = "comments"></textarea>
				
			</div>
			 <button type="submit" class="btn btn-success">Place Order</button>
			  <a href="coupons.php" class="btn btn-primary">Add coupons</a>

		</form>
	</div> 
</section>
   
<footer>
	<p class = "p-3 bg-dark text-white text-center">@Abhi'sDevelopment</p>
</footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>