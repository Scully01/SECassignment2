<?php
    require_once('phpfunctions.php');

    if(!isUserLoggedIn()) {
        header('Location: bounced.php');
        exit();
    }
