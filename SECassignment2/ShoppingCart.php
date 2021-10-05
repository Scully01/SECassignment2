<!DOCTYPE html>

    <head>
<?php include 'header.php';
include 'bouncer.php';
                                      
                                        ?>

<style>
.grid-container {
  display: grid;
  grid-template-columns: 40% 60%;
  background-color: grey;
  
}
.grid-item {
  background-color: white;
  

  font-size: 30px;
  text-align: center;
}

.pay-container {
  display: grid;
  grid-template-columns: auto auto;
  background-color: red;
  padding: 0px;
}
.pay-item {
  background-color: white;
  padding: 0px;
 
 

}

</style>
<script src="sha256.js"></script>
<script src="js/main.js" defer></script>
<script src="rsa.js"></script>

<?php
    if (isset($_POST['encrypted'])) {
    $myfile = fopen("database/payment.txt", "a");
    $txt = $_POST["encrypted"] . PHP_EOL;
    fwrite($myfile, $txt);
    fclose($myfile);
    echo $alert;

    }
?>


    <script type="text/javascript">

      function encryption(){
        var data =  document.getElementById('cc-number').value + document.getElementById('cc-name').value + document.getElementById('cc-exp').value + document.getElementById('cc-csc').value;
        var ciphertext = RSA_encryption(data, pubilc_key);
            
        document.getElementById('encrypted').innerHTML = ciphertext;
            
        document.getElementById('encrypted').value = ciphertext;
        
        
      }
      
    </script>
    <script type="text/javascript">
      var pubilc_key = "-----BEGIN PUBLIC KEY-----MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzdxaei6bt/xIAhYsdFdW62CGTpRX+GXoZkzqvbf5oOxw4wKENjFX7LsqZXxdFfoRxEwH90zZHLHgsNFzXe3JqiRabIDcNZmKS2F0A7+Mwrx6K2fZ5b7E2fSLFbC7FsvL22mN0KNAp35tdADpl4lKqNFuF7NT22ZBp/X3ncod8cDvMb9tl0hiQ1hJv0H8My/31w+F+Cdat/9Ja5d1ztOOYIx1mZ2FD2m2M33/BgGY/BusUKqSk9W91Eh99+tHS5oTvE8CI8g7pvhQteqmVgBbJOa73eQhZfOQJ0aWQ5m2i0NUPcmwvGDzURXTKW+72UKDz671bE7YAch2H+U7UQeawwIDAQAB-----END PUBLIC KEY-----";
      var private_key = "-----BEGIN PRIVATE KEY-----MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQDN3Fp6Lpu3/EgCFix0V1brYIZOlFf4ZehmTOq9t/mg7HDjAoQ2MVfsuyplfF0V+hHETAf3TNkcseCw0XNd7cmqJFpsgNw1mYpLYXQDv4zCvHorZ9nlvsTZ9IsVsLsWy8vbaY3Qo0Cnfm10AOmXiUqo0W4Xs1PbZkGn9fedyh3xwO8xv22XSGJDWEm/QfwzL/fXD4X4J1q3/0lrl3XO045gjHWZnYUPabYzff8GAZj8G6xQqpKT1b3USH3360dLmhO8TwIjyDum+FC16qZWAFsk5rvd5CFl85AnRpZDmbaLQ1Q9ybC8YPNRFdMpb7vZQoPPrvVsTtgByHYf5TtRB5rDAgMBAAECggEAUDPieCnCd1rtvwpehXElpwxzJxg6ccdaVMjwx7tuoRidHoRzeB2fUNbWvLVIGvDTjTPGAr5I9BoFHT5tARJMeGIzbISDxsosDBRKu88cCx6dRl3ukcjSLsxMh8XUDhyWLsSgAMIpxVfHUuOsHmLZ2I3Ho6o1KIxdVg/JSgtdwTqjz3w8jmGQ/NXgc7Ym/ys1fLG9L2nYdMzK/mRJf/BnXiCNE6/SYlZYO716oC688UJBWS3BqB9jaJyNpigX//ynJvU6xw8FhHt4fRStUmCCYAYhCQu3XgbtmxKisDGhdBVASG+DM+vVTh+sSvxkNrjJjF+m2tSg578A8C8Ls0r3uQKBgQDpO9e178NR0HHmvWbZR9+uPugf4UT9+U2/dEfJBHAOp2GRsIvXkFwbPHuSHkc0iEPwz+U8gPC8jInSslKOUDtaGtUaVzzWrxxh7DggWx4pYs3I0Ki8C+CRTTdOY9GAFa9jhIyRmf6v9QoAH/loGNV2qYFbb+HweD0PnxlWha1txQKBgQDh9IBBltW7T96foUmHOn+x6xlF5MNDHxLBY6bngxKvMTZoi5C6wmmCmasF45LWbkvUiMAsovYN5z4cJnKXWmRmCS8NXUucmUgdvsmCbiB62BmZvHaOffmnIdhcAjBebT/Bn5qMvKCNy3fQFSfuEw1eRRO2IofB4o7z7m794vo25wKBgEPowrQcrZhCwwdWGn4laUGI23l80+PHFRYru0MSYbZCkiwjZXRMeiUMBUbUPhNTocSaI7rsKCweF3sbpOH/BmkD6wySXgp8Th1M9EKnhS6zsAtKhfbK1oY4H2RZuAQ9TCYD0BIM7pU5GcJTjQD8ShsU269N8lFcERtdTbldjtOpAoGAF4YkADAa6lhjXg0loY2Gk9hdFji913QZuMaOLtYnkNO3zWSSWc85ut4Svxc1R1vOSz89eqgwo7vqbHXYQken4jOckXCgGZqftnERe6HJgeCTsby8PxOAdVUBuHqF3J7VH2xlY7eTo4+GVsSNFq0nHCRm6/RmW9ohdeXh6k7CLAsCgYBZe3RLWuffKxg+lZmv9tJDOO813QPLFeixrBYhKjGDcwjVYcCugGNDmyStM0/++uWddgMKavNALjpamu8KolDNivrjL1qaFHX9Bpi108T+dDn2WpX+vUP6hjA/U2wtTvUbJle1SsbZxRrV9gf5PAJqTrQY4u28ezjR3PCV+R4kdw==-----END PRIVATE KEY-----";
      function RSA_encryption(message, publicKey){
        var encrypt = new JSEncrypt();
        encrypt.setPublicKey(publicKey);
        var encrypted = encrypt.encrypt(message);
        return encrypted;
      }
      function RSA_decryption(ciphertext, privateKey){
        var decrypt = new JSEncrypt();
        decrypt.setPrivateKey(privateKey);
        var decrypted = decrypt.decrypt(ciphertext);
        return decrypted;
      }

      
    </script>

</head>

<body>

<!-- P A Y M E N T  D E T A I L S  B E L O W  -->
<div class = "grid-container">
  <div class="grid-item">
  <h1 class="card-title">Checkout Payment Form Window</h1>
    <form name="paymentForm" method="post" action="paymentServer.php">
<h3 class="card-subtitle mb-2 text-muted"> Enter Card Details Below </h3> <br>


<section>        
  <label for="cc-number">Card number</label> <br>
  <input id="cc-number" name="cc-number" inputmode="numeric" autocomplete="cc-number" maxlength="50" pattern="[\d ]{10,30}" required>
</section>

<section>        
  <label for="cc-name">Name on card</label> <br>
  <input id="cc-name" name="cc-name" autocomplete="cc-name" maxlength="30" pattern="[\p{L} \-\.]+" required>
</section>

<section id="cc-exp-csc">      
  <div>
    <label for="cc-exp">Expiry date</label> <br>
    <input id="cc-exp" name="cc-exp" placeholder="MM/YY" maxlength="5" autocomplete="cc-exp" required>
  </div> 
  <div>
    <label for="cc-csc">Security code</label> <br>
    <input id="cc-csc" name="cc-csc" inputmode="numeric" maxlength="3" autocomplete="cc-csc" required><br><br><br>
  </div>
</section>  
<p>PLACE ORDER BY PRESSING BLUE BUTTON BELOW: <br>
<button onclick="encryption()" type="submit" name="encrypted" id="encrypted" style= "color:#007bff; background-color:#007bff;" >Place Order</button>
</form>

</div>


<!-- C A R T  D E T A I L S  B E L O W -->
  <div class="grid-item">
    <div class="card">
      <div class="card-body">
        <h1 class="card-title">Your Shopping Cart</h1>
        <h4 class="card-subtitle mb-2 text-muted">Cart Details</h4>
        <table class="table table-hover">  
          <tr>    
            <th scope="col">Products</th>    
            <th scope="col" >Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Subtotal</th>  </tr>  
          <tr>    
            <td><?php echo $_POST["iPhone"]; ?></td>    
            <td><?php echo $_POST["iPhoneprice"]; ?></td>
            <td><?php echo $_POST["iPhonequantity"]; ?></td>
            <td><?php echo $_POST["iPhonetotal"]; ?></td>  
          </tr>  
                                          
          <tr>    
            <td><?php echo $_POST["MacBook"]; ?></td>    
            <td><?php echo $_POST["MacBookprice"]; ?></td>
            <td><?php echo $_POST["MacBookquantity"]; ?></td>
            <td><?php echo $_POST["MacBooktotal"]; ?></td>  
          </tr>  
          <tr>    
            <td><?php echo $_POST["Airpods"]; ?></td>    
            <td><?php echo $_POST["Airpodsprice"]; ?></td>
            <td><?php echo $_POST["Airpodsquantity"]; ?></td>
            <td><?php echo $_POST["Airpodstotal"]; ?></td>  
          </tr>  
                                              
          <tr>    
            <th></th>    
            <th>Total</th>
            <th><?php echo $_POST["totalQuantity"]; ?></th>
            <th><?php echo $_POST["totalPrice"]; ?></th>  
          </tr>
        </table>


    </div>
  </div>
  <button type="button" class="btn btn-link" style= "font-color:white;"><a href='index.php' >Back to Shopping </a></button>
  </div>
  </div>
  <?php
                                          $iPhone = $_POST["iPhone"] . "  Price: " . $_POST["iPhoneprice"] . " Quantity: " .  $_POST["iPhonequantity"] . " Subtotal: " . $_POST["iPhonetotal"];
                                          $MacBook = $_POST["MacBook"] . "  Price: " . $_POST["MacBookprice"] . " Quantity: " . $_POST["MacBookquantity"] . " Subtotal: " . $_POST["MacBooktotal"];
                                          $Airpods = $_POST["Airpods"] . "  Price: " . $_POST["Airpodsprice"] . " Quantity: " . $_POST["Airpodsquantity"] . " Subtotal: " . $_POST["Airpodstotal"];
                                          $total = " Total Quantity: " . $_POST["totalQuantity"] . " Total Price: " . $_POST["totalPrice"];



                                       ?>


<?php include 'footer.php';?>