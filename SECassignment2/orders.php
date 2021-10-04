<!DOCTYPE html>
<html>

<head>
<?php include 'header.php';?>
</head>

<body>


<div class="container-fluid">
    <div class = "row p-5 ">
                <div class="card bg-light border-dark col-lg-6  mb-3 p-2">
                    <div class="card-body text-center">
                    <h1>Whats happening with my order?</h1>
                    <p>Haven't logged in? Please log in so you can start a session with our onlines team to see how we can determine progression of your order<p>
                    <a href = "login.php" class = "btn btn-secondary">Login</a>
                    <br>
                    <br>
                    <p>Now that you're logged in, we can take your order number. To ensure nobody else can access your order, we will provide an encyption method to ensure security. Please use the follow the prompts below to get started.<p>
                    </div>
                    
                </div>
                <div class="card bg-light border-dark col-lg-6  mb-3 p-2">
                    <div class="card-body text-center">
                    <h1>Want to purchase something else?</h1>
                    <p>Forgot to add an item to your order? Just click below to go back to shopping!</p>
                    <a href="shopping.php" class="btn btn-secondary">Take me to shopping</a>
                    <br>
                    <br>
                    <br>
                    <h1>I need to return an order</h1>
                    <p>The item you purchased not what you wanted? Perhaps it isn't working as intended? No problem, click the returns button below and we'll get started on processing a refund!<p>
                    <a href = "" class = "btn btn-secondary">Return my stuff</a>
                    </div>
                </div>
</div>
</div>




<?php include 'footer.php';?>
</body>

</html>