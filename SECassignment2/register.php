<?php
session_start();
?>
<html>

<head>
    <?php include 'header.php'; ?>
</head>

<body>
    <?php
    //Receive username from client side
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
            echo "The user exists!";
        } else {
            //open a file named "text.txt"
            $file = fopen("users.txt", "a");
            //insert this user into the users.txt file
            fwrite($file, $entered_username . "," . $entered_password . "\n");
            //close the "$file"
            fclose($file);
            echo "The user has been added to the users.txt";
            header('Location: login.php');
        }
    } else {
        echo "Username and Password cannot be empty!";
    }
    ?>
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-8">
                <h2>Register</h2>
                <form id="registration_form" action="register.php" method="post">
                    <div>
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" />
                    </div>

                    <div>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" />
                    </div>
                    <div class="submit-button">
                        <input type="submit" name="Register" value="Register" onclick="hashpassword()" />
                    </div>
                </form>
                <script src="sha256.js"></script>
                <script type="text/javascript">
                    function hashPassword() {
                        var input = document.getElementById('password').value;

                        var hash = SHA256.hash(input);

                        document.getElementById("password").innerHTML = hash;
                        document.getElementById("password").value = hash;
                    }
                </script>
            </div>
        </div>
    </div>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>