<!-- a combination of code inside this php file is partly attributed  the code seen in week 8 by Shekhar Kalra and Matther Bolger from RMIT University. -->
<?php require_once('phpfunctions.php');?>
<!-- this is the page that allows users to login to the website -->
<?php
$errors = [];
//if the form (login page) is filled out, the information will be POSTED to login and user will be logged in
if(isset($_POST['login'])) {
    $errors = loginUser($_POST);

    if(count($errors) === 0) {
        header('Location: shopping.php');
        exit();
    }
    //if there are no errors and the user logs in, the page will load onto myfitness
}
?>

<!DOCTYPE html>
<html>
<head>

</head>
<?php require_once('header.php');?>


    
        <div class= container>
        <div class="grid1 header">
            Login to westBorn Shopping
        </div>
        <!-- form for users to login. -->
                <div class="grid2 contact"> <h2>Login: </h2><br> 
                    <form method="post">
                        <div class="form-group">
                            <label for= "email"> Email</label><br>
                            <input type= "text" class="form-control" id="email" name="email" placeholder="Email"
                                <?php displayValue($_POST, 'email'); ?> />
                            <?php displayError($errors, 'email'); ?>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label><br>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password" />
                            <?php displayError($errors, 'password'); ?>
                        </div>

                        <button type="submit" class="btn btn-primary" name="login" value="login">Login</button>
                    </form>
                 </div> 



                 <?php require_once('footer.php');?>
         </div>

</body>

</html>