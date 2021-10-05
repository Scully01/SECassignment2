<!DOCTYPE html?
<html>

<head>
    <title>WestBorn Shopping</title>

    <?php include 'header.php'; ?>

    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- include the jQuery breadcrumbs plugin -->
    <script src="Plugins/jquery.breadcrumbs-generator.min.js"></script>

    <script>
        $(function() {
            $('#breadcrumbs').breadcrumbsGenerator();
        });
    </script>

</head>

<body>
    <h1>WestBorn Shopping Sitemap</h1>
        <ol id="breadcrumbs"></ol>

        <ul id="sitemaps">
           
            <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>
                        <a>Services</a>
                        <ul>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>
                            <li><a href="shopping.php">Shopping</a></li>
                            <li><a href="ShoppingCart.php">Shopping Cart</a></li>
                            <li><a href="orders.php">Orders</a></li>
                        </ul>
                    </li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    <li><a href="sitemap.php">Sitemap</a></li>
                    </ul>
            </ul>


        <footer>
            <?php include 'footer.php'; ?>
        </footer>
</body>


         

</html>