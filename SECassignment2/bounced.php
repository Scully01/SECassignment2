<?php require_once('phpfunctions.php');?>
<!-- this file is used to check to see if users are logged in. if they are not logged in they are sent to log in.  -->

 <!DOCTYPE html>
<html>
<head>
    <title>westBorn Shopping</title>

</head>
<body>
    <?php require_once('header.php');?>

        <div class= container>
            <div class="grid2 header"> To access the shopping page, please register and login user <br>
            <a href="register.php" class="inactive">REGISTER</a>
            <a href="login.php" class="inactive">LOGIN</a>
        </div>


</body>
<footer> <?php require_once('footer.php');?></footer>