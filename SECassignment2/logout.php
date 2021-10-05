<?php
 require_once('phpfunctions.php');

    logoutUser();
    header('Location: login.php');
    exit();
 ?>

 <!-- code for users to logout. once loggedout, page will load up onto the login page.  -->
 <!-- a combination of code inside this php file is partly attributed  the code seen in week 8 by Shekhar Kalra and Matther Bolger from RMIT University. -->