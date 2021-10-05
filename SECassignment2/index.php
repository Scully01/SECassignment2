<!DOCTYPE html>

<!-- <head>
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
    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1>Shopping Site</h1>
        <p>Secure Payment!</p>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item" class="buttonalign">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
                <li class="nav-item" class="buttonalign">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>
            </ul>
        </div>
    </nav> 



</body>--> 

<head>
<?php include 'header.php';?>
</head>

<body>
<div class="container-fluid">
    <div class = "row p-5 ">
                <div class="card bg-light border-dark col-lg-6  mb-3 p-2">
                    <div class="card-body text-center">
                    <br></br>
                    <br></br>
                    <a href="shopping.php" class="stretched-link" style = "font-size:30px;color:black;">Shopping</a>
                    <br></br>
                    <br></br>
                    </div>
                </div>
                <div class="card bg-light border-dark col-lg-6  mb-3 p-2">
                    <div class="card-body text-center">
                    <br></br>
                    <br></br>
                    <a href="register.php" class="stretched-link" style = "font-size:30px;color:black;">Register Now!</a>
                    <br></br>
                    <br></br>
                    </div>
                </div>
                <div class="card bg-light border-dark col-lg-6 mb-3 p-2">
                    <div class="card-body text-center ">
                    <br></br>
                    <br></br>
                    <a href="orders.php" class="stretched-link" style = "font-size:30px;color:black;">Check your Order!</a>
                    <br></br>
                    <br></br>
                    </div>
                </div>
                <div class="card bg-light border-dark col-lg-6  mb-3 p-2">
                    <div class="card-body text-center">
                    <br></br>
                    <br></br>
                    <a href="shoppingCart.php" class="stretched-link" style = "font-size:30px;color:black;">Shopping Cart</a>
                    <br></br>
                    <br></br>
                    </div>
                </div>
            </div>
    </div>

            <br>
            <br>

    <?php include 'footer.php';?>
    </body>

</html>