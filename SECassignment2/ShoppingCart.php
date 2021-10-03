<!DOCTYPE html>

    <head>
<?php include 'header.php';
//  function writeToFile($fileName, $content){
//                                             $file = fopen("/Secure_Eccomerce/Assignment2/SECassignment2/SECassignment2/database/cart.txt","a"); 
//                                             fwrite($file, $content);
//                                             fclose($file);
//                                         } 
                                        ?>

<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto;
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

<script src="rsa.js"></script>
</head>

<body>

<!-- P A Y M E N T  D E T A I L S  B E L O W  -->
<div class = "grid-container">
  <div class="grid-item">
    <h3>Enter Card Details</h3>
    <div class = "pay-container">
      <div class="pay-item">
        <input name="name" id="name" type="text" placeholder='CARD NAME'maxlength="30" pattern="[\d ]{10,30}" required >
        <br/><br/>
      </div>
      <div class="pay-item"> 
        <input name="number" id="number" type="text" placeholder='CARD NUMBER' >
        <br/><br/>
      </div>
      <div class="pay-item">
        <input name="date" id="date" type="text" placeholder='EXPIRY DATE (MM/YY)'>
        <br/><br/>
      </div>
      <div class="pay-item"> 
        <input name="CCV" id="CCV" type="text" placeholder='CCV'>
        <br/><br/>
      </div>
    </div>
        <button type="button" onclick="encryption()">Place Order</button>
        <br/><br/>

  </div>


    <script type="text/javascript">
      function hash() {
          var input = document.getElementById('name').value + document.getElementById('number').value + document.getElementById('date').value + document.getElementById('CCV').value;

          var hash = SHA256.hash(input);
          document.getElementById('hash_value').innerHTML = hash;
          document.getElementById('hash_value').value = hash;
      }
    
        
      function encryption(){
        var hashed_value = document.getElementById('name').value + document.getElementById('number').value + document.getElementById('date').value + document.getElementById('CCV').value;
        var ciphertext = RSA_encryption(hashed_value, pubilc_key);
            
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
      function cardnumber(inputtxt){
        var cardno = /^(?:5[1-5][0-9]{14})$/;
        if(inputtxt.value.match(cardno))
        {
          return true;
        }
        else
        {
          alert("Not a valid Mastercard number!");
          return false;
        }
      }


    </script>




<!-- C A R T  D E T A I L S  B E L O W -->
  <div class="grid-item">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Your Shopping Cart</h4>
        <h6 class="card-subtitle mb-2 text-muted">Cart Details</h6>
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
  <button type="button" class="btn btn-primary" href='shopping.php'>Back to Shopping</button>
  </div>
  </div>
  <?php
                                          $iPhone = $_POST["iPhone"] . "  Price: " . $_POST["iPhoneprice"] . " Quantity: " .  $_POST["iPhonequantity"] . " Subtotal: " . $_POST["iPhonetotal"];
                                          $MacBook = $_POST["MacBook"] . "  Price: " . $_POST["MacBookprice"] . " Quantity: " . $_POST["MacBookquantity"] . " Subtotal: " . $_POST["MacBooktotal"];
                                          $Airpods = $_POST["Airpods"] . "  Price: " . $_POST["Airpodsprice"] . " Quantity: " . $_POST["Airpodsquantity"] . " Subtotal: " . $_POST["Airpodstotal"];
                                          $total = " Total Quantity: " . $_POST["totalQuantity"] . " Total Price: " . $_POST["totalPrice"];



                                        // $content= PHP_EOL . "Shopping Cart: " . PHP_EOL;
                                        // $content = $content . "Item 1: " . $iPhone . PHP_EOL;
                                        // $content = $content . "Item 2: " . $MacBook . PHP_EOL;
                                        // $content = $content . "Item 3: " . $Airpods . PHP_EOL;
                                        // $content = $content . "TOTAL " . $total . PHP_EOL;
                                        // writeToFile("cart.txt", $content)
                                        // ?>




<?php include 'footer.php';?>