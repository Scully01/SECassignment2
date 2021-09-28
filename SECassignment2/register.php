<!DOCTYPE html>

<head>
    <title>Secure Electronic Commerce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <script type="text/javascript" src="register.js"></script>

    <script type="text/javascript">
        function addToCSVFile() {
            var csvData = new Array();  // To collect the data
            var csvFilePath = "user.csv"; // File name

            // Collect General Information
            csvData[0] = document.getElementById('username').value;
            csvData[1] = document.getElementById('password').value;

              var fso = new ActiveXObject('Scripting.FileSystemObject');
            var oStream = fso.OpenTextFile(csvFilePath, 8, true, 0);
            oStream.WriteLine(csvData.join(','));
            oStream.Close();
            clearData();
            alert("Registered User Successfully!");
     }

     function clearData() {
            document.getElementById('username').value = "";
            document.getElementById('password').value = "";
                     }
    </script>
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

    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-8">
                <h2>Register</h2>
                <!-- registration form -->
                <form id="registration_form" method="post">
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
                        <input type="submit" name="Login" value="Login"/>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sitemap.php">Sitemap</a>
                    </li>
                </ul>
            </div>
            </div>
    </footer>
</body>

</html>