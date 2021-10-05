<!DOCTYPE html>

<head>
<?php require_once('phpfunctions.php');?>
    <title>Secure Electronic Commerce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body> 



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">WGS17</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
     
        
              
      
              <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="shopping.php">Shopping</a>
          </li>
          <?php if(isUserLoggedIn()) { ?>
                <li class="nav-item">
                  <a class="nav-link active" href="shoppingCart.php">Shopping Cart</a>
              </li>
              <?php } ?>
          <?php if(isUserLoggedIn()) { ?>

<a> Welcome, <?= getLoggedInUser()['firstname']; ?> </a>
<li class="nav-item">
<a class="nav-link active" href="logout.php">Logout</a>
</li>
<?php } else { ?>
<li class="nav-item">
<a class="nav-link active" href="login.php">Login</a>
</li>
<li class="nav-item">
  <a class="nav-link active" href="register.php">Registration</a>
</li>


<?php } ?>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container" >
        <div class="row">
            <div class="col-sm-8">
              <img src = "westBornShopping.jpg" height = "300">
                
                <p> </p>
            </div>
        </div>
    </div>
        </body>