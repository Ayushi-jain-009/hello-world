<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>DAILY NEEDS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<h1>GENERAL STORE</h1>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Grocery</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="shop.html">Shop</a></li>
      <li><a href="#">Cart</a></li>
      <li><a href="#">My orders</a></li>
      <form class="navbar-form navbar-left" action="/action_page.php">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<img src="https://www.aldi.com.au/fileadmin/_processed_/9/f/csm_ALC6158_KVB_Groceries_1896x720_f90648edde.jpg" width: "1000">

  <section>
    <?php if(isset($_SESSION['success'])): ?>
      <div class="error success">
        <h3>
          <?php 
           echo $_SESSION['success'];
           unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>
    <?php if(isset($_SESSION["username"])): ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p><a href="index.php?logout='1'">Log out</a></p>
    <?php endif ?>
  </section>
<script src="scripts/main.js"></script> 
</body>
</html>
