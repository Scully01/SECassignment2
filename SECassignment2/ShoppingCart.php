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
  background-color: #2196F3;
  padding: 10px;
}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
</style>
</head>

<body>
<div class = "grid-container">
<div class="grid-item"> 1 </div>

                                        
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