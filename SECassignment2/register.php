<?php require_once('phpfunctions.php');?>
<!-- this php file is used to register the user onto the site.  -->
<?php
// this php calls on the register user function in the phpfunctions page. 
    $errors = [];
    if(isset($_POST['register'])) {
        $errors = registerUser($_POST);

        if(count($errors) === 0) {
            header('Location: login.php');
            exit();
        }
    }
?>




<!DOCTYPE html>
<html>
<head>
    <title>Adrenaline Buzz Club</title>
    <link rel="stylesheet" href="A2.css">
    <link rel="stylesheet" href="logo.css">
</head>
<?php require_once('header.php');?>

    <div class="container">
        <!-- below is the code that presents the form that users use to register to the page -->
        <!-- //a combination of the code in this file is attributed and inspired by week 8 of Web Programming classes from Shekhar and Matthew, aswell as online resources; php.net and w3schools.  -->

        <div class="grid1 header">
            Sign up to our great membership deals and start enjoying the buzz now!
        </div>
        <div class="grid2 contact">
            <h2> Register Here</h2>
            <form method="post">
            <div class="form-group">
                    <label for="firstname">First name</label> <br>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname"
                        <?php displayValue($_POST, 'firstname'); ?> />
                    <?php displayError($errors, 'firstname'); ?>
                </div>

                <div class="form-group">
                    <label for="lastname">Last name</label><br>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname"
                        <?php displayValue($_POST, 'lastname'); ?> />
                    <?php displayError($errors, 'lastname'); ?>
                </div>

                <div class="form-group">
                    <label for="email">Email</label><br>
                    <input type="text" class="form-control" id="email" name="email" placeholder="email"
                        <?php displayValue($_POST, 'email'); ?> />
                    <?php displayError($errors, 'email'); ?>
                </div>
                     
                <div class="form-group">
                    <label for="password">Create Password</label><br>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="At least 6 characters" />
                    <?php displayError($errors, 'password'); ?>
                </div>

                <button type="submit" class="btn btn-primary" name="register" value="register">Register</button>
                </form> 
        </div>
        
    </div>
    <?php require_once('footer.php');?>
</body>

</html>

