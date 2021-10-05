<?php


include('des.php');
include 'header.php';
?>

<html>
    <body>

<?php
    if(isset($_POST['decrypted']) == FALSE) {
        header('Location: orders.php');
    }

    $message = $_POST['decrypted'];

    if($message == "") {
        header('Location: orders.php');
    }

    $key = "WestBorn";

    $recovered_message = php_des_decryption($key, $message);

    echo "Received encrypted Order No: " . $message . "<br/><br/>";

    echo "Pre-set decryption key: " . $key . "<br/><br/>";

    echo "Recovered the Order No: " . $recovered_message . "<br/><br/>";

    $file = fopen("database/database.txt","a");
	
	fwrite($file,$recovered_message."\n");
	
	fclose($file);

    echo "The sent Order No has been added to our database, and we shall get back to you as soon as possible.";
    
?>
    <br>
    <br>
    <br>

    <a href = "" class = "btn btn-secondary">Return to the home page!</a>
    

<?php include 'footer.php';?>

</body>


</html>