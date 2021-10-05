<html>
    <head>
        <?php include 'header.php'; ?>
    <body>
    <?php
    include ('rsa.php');
// echo $_SERVER['PHP_SELF'];
$ciphertext = $_POST['encrypted'];


    if (isset($_POST['encrypted'])) {
    $myfile = fopen("database/payment.txt", "a");
    $txt = $_POST["encrypted"] . PHP_EOL;
    fwrite($myfile, $txt);
    fclose($myfile);
    }
 

?>
<div style=" text-align:center">
<h1>THANK YOU! </h1>
<h3> Your Order has been placed, thank you! </h1>
<a href="index.php" class="btn btn-secondary btn-lg">Return To Home Page </a> 
</div>

<?php include 'footer.php';?>


</body>

</html>