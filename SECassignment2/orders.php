<!DOCTYPE html>
<html>

<head>
<?php include 'header.php';?>
</head>

<body>


<div class="container-fluid">
    <div class = "row p-5 ">
                <div class="card bg-light border-dark col-lg-6  mb-3 p-2">
                    <div class="card-body text-center">
                    <h1>Whats happening with my order?</h1>
                    <p>Haven't logged in? Please log in so you can start a session with our onlines team to see how we can determine progression of your order<p>
                    <a href = "login.php" class = "btn btn-secondary">Login</a>
                    <br>
                    <br>
                    <p>Now that you're logged in, we can take your order number. To ensure nobody else can access your order, we will provide an encyption method to for security. Please use the follow the prompts below to get started.<p>
                    <FORM ACTION="ordersserver.php" method="POST">
                        <label for="ordernumber">Enter your Order No : </label>
                        <input type="text" id="message" placeholder = "e.g. A1CE33" name="message" />
                        <br/><br/>
                        <label for = "ordernumber">Use our public key : </label> 
                        <input type="text" id="DES_Encryption_Key" placeholder = "WestBorn" name="DES_Encryption_Key" />
                        <br/><br/>
                        <button type="submit" onclick="DES_encryption()">Submit Request</button>
                    </FORM>

                    
                    <br>
                    <br>
                    <br>

                    <form method = "post" action = "ordersserver.php">
                        <label for="ordermessage">Send us a message with your enquiry :  </label> 
                        <input id = "ordermessage" name = "ordermessage" type = "text">
                        <br><br>
                        <button type = "submit" onclick = "RSA_encryption()">Submit Message</button>
                    </form>
                 </div>
                    

                </div>
                <div class="card bg-light border-dark col-lg-6  mb-3 p-2">
                    <div class="card-body text-center">
                    <h1>Want to purchase something else?</h1>
                    <p>Forgot to add an item to your order? Just click below to go back to shopping!</p>
                    <a href="shopping.php" class="btn btn-secondary">Take me to shopping</a>
                    <br>
                    <br>
                    <br>
                    <h1>I need to return an order</h1>
                    <p>The item you purchased not what you wanted? Perhaps it isn't working as intended? No problem, click the returns button below and we'll get started on processing a refund!<p>
                    <a href = "" class = "btn btn-secondary">Return my stuff</a>
                    </div>
                </div>
</div>
</div>


<script type = "text/javascript" src = "des.js"></script>
<script type = "text/javascript">

function DES_encryption() {
    var message = document.getElementById("message").value;
    var key = document.getElementById("DES_Encryption_Key").value;

    var encrypted = javascript_des_encryption(key, message);
    document.getElementById("message").value = encrypted;

    return false;
}

</script>

<script src = "rsa.js"></script>
<script type = "text/javascript">

function RSA_encryption() {
    var plaintext = document.getElementById("ordermessage").value;
    var public_key = "-----BEGIN PUBLIC KEY-----MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzdxaei6bt/xIAhYsdFdW62CGTpRX+GXoZkzqvbf5oOxw4wKENjFX7LsqZXxdFfoRxEwH90zZHLHgsNFzXe3JqiRabIDcNZmKS2F0A7+Mwrx6K2fZ5b7E2fSLFbC7FsvL22mN0KNAp35tdADpl4lKqNFuF7NT22ZBp/X3ncod8cDvMb9tl0hiQ1hJv0H8My/31w+F+Cdat/9Ja5d1ztOOYIx1mZ2FD2m2M33/BgGY/BusUKqSk9W91Eh99+tHS5oTvE8CI8g7pvhQteqmVgBbJOa73eQhZfOQJ0aWQ5m2i0NUPcmwvGDzURXTKW+72UKDz671bE7YAch2H+U7UQeawwIDAQAB-----END PUBLIC KEY-----";

    var encrypt = new JSEncrypt();
    encrypt.setPublicKey(public_key);
    var encrypted = encrypt.encrypt(plaintext);
    document.getElementById("ordermessage").value = encrypted;
}

</script>



<?php include 'footer.php';?>
</body>

</html>