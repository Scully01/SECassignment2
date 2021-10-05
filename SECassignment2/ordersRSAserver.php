<?php

include ('rsa.php');
include 'header.php';
?>

<html>
<body>

<?php

$ciphertext = $_POST['encrypted'];

echo("<p>Ciphertext: " . $ciphertext . "</p>");

$privateKey = get_rsa_privatekey('private.key');

$decrypted = rsa_decryption($ciphertext, $privateKey);

echo("<p>Decrypted text: " . $decrypted . "</p>");

$publicKey = get_rsa_publickey('public.key');

$encrypted = rsa_encryption($ciphertext, $publicKey);
echo $encrypted."<br/>";

$file = fopen("database/database.txt","a");
	
	fwrite($file,$decrypted."\n");
	
	fclose($file);

echo "The sent message has been added to our database, and we shall get back to you as soon as possible.";

?>

<br>
    <br>
    <br>

    <a href = "index.php" class = "btn btn-secondary">Return to the home page!</a>

<?php include 'footer.php';?>

</body>