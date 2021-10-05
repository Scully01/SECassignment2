<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  if (isset($POST["encrypted"])) {
  $name = $GET['encrypted'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    $myfile = fopen("database/payment.txt", "w");
    $txt = $_GET["encrypted"];
    fwrite($myfile, $txt);
    fclose($myfile);
  }
}
}
?>