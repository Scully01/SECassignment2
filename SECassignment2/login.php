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
    </nav> -->

    <head>
<?php include 'header.php';?>
</head>

<body>
   

    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-8">
                <h2>Login</h2>
                <!-- login form -->
                <form id="login_form" method="post">
                    <div>
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" />
                        <div class="error" id="usernameError">Username is required.</div>
                    </div>

                    <div>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" />
                        <div class="error" id="passwordError">Password is required.</div>
                    </div>
                    <div class="submit-button">
                        <input type="submit" name="Register" value="Register"/>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php

    //if (isset($_POST['username']) == FALSE) {
    //    header('Location: register.php');
    //}


    //Receive username from clint side
    $entered_username = $_POST['username'];
    //Receive password from client side
    $entered_password = $_POST['password'];



    if ($entered_username != "" & $entered_password != "") {
        $register = 0;
        //read users.txt line by line
        foreach (file('users.txt') as $line) {
            //split each line as two parts
            list($username, $password) = explode(",", $line);
            //verify if an exist user with the same username
            if ($username == $entered_username) {
                $register = 1;
                break;
            }
        }

        if ($register == 1) {
            echo "The user does exist!";
        } else {
            //open a file named "text.txt"
            $file = fopen("users.txt", "a");
            //insert this user into the users.txt file
            fwrite($file, $entered_username . "," . $entered_password . "\n");
            //close the "$file"
            fclose($file);
            echo "The user has been added to the users.txt";
        }

        echo "<br/>Go <a href='http://titan.csit.rmit.edu.au/~e23700/Lab6/answer'>back</a> to register, login or check the users.txt";
    } else {
        echo "Username and Password cannot be empty!";
        echo "<br/>Go <a href='http://titan.csit.rmit.edu.au/~e23700/Lab6/answer'>back</a> to register, login or check the users.txt";
    }
    ?>

<?php include 'footer.php';?>
</body>

</html>