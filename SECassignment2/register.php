<!DOCTYPE html>
<!-- 
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
</head> -->
    <head>
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
<?php include 'header.php';?>
</head>

<body>
  

    

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
    <?php include 'footer.php';?>
</body>

</html>