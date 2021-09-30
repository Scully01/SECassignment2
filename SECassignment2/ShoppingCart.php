<!DOCTYPE html>

    <head>
<?php include 'header.php';?>
<?php function writeToFile($fileName, $content){
                                            $file = fopen("/database/cart.txt","a"); 
                                            fwrite($file, $content);
                                            fclose($file);
                                        } 
                                        ?>
</head>

<body>

                          <h1>Received Form (What the customer submitted)</h1>
                          <table>  
                              <tr>    
                                  <th>Products</th>    
                                  <th>Price</th>
                                  <th>Quantity</th>
                                  <th>Subtotal</th>  </tr>  
                                  <tr>    
                                      <td>
                                          <?php echo $_POST["ProductA"]; ?></td>    
                                          <td><?php echo $_POST["ProductAprice"]; ?></td>
                                          <td><?php echo $_POST["ProductAquantity"]; ?></td>
                                          <td><?php echo $_POST["ProductAtotal"]; ?></td>  
                                        </tr>  
                                        
                                        <tr>    
                                            <td><?php echo $_POST["ProductB"]; ?></td>    
                                            <td><?php echo $_POST["ProductBprice"]; ?></td>
                                            <td><?php echo $_POST["ProductBquantity"]; ?></td>
                                            <td><?php echo $_POST["ProductBtotal"]; ?></td>  
                                        </tr>  
                                            <tr>    
                                                <td><?php echo $_POST["ProductC"]; ?></td>    
                                                <td><?php echo $_POST["ProductCprice"]; ?></td>
                                                <td><?php echo $_POST["ProductCquantity"]; ?></td>
                                                <td><?php echo $_POST["ProductCtotal"]; ?></td>  
                                            </tr>  
                                            
                                            <tr>    
                                                <th></th>    
                                                <th>Total</th>
                                                <th><?php echo $_POST["totalQuantity"]; ?></th>
                                                <th><?php echo $_POST["totalPrice"]; ?></th>  
                                            </tr>
                                        </table>

                                       
                                          <?php
                                          $productA = $_POST["ProductA"] . "  Price: " . $_POST["ProductAprice"] . " Quantity: " .  $_POST["ProductAquantity"] . " Subtotal: " . $_POST["ProductAtotal"];
                                          $productB = $_POST["ProductB"] . "  Price: " . $_POST["ProductBprice"] . " Quantity: " . $_POST["ProductBquantity"] . " Subtotal: " . $_POST["ProductBtotal"];
                                          $productC = $_POST["ProductC"] . "  Price: " . $_POST["ProductCprice"] . " Quantity: " . $_POST["ProductCquantity"] . " Subtotal: " . $_POST["ProductCtotal"];
                                          $total = " Total Quantity: " . $_POST["totalQuantity"] . " Total Price: " . $_POST["totalPrice"];



                                        $content= PHP_EOL . "Shopping Cart: " . PHP_EOL;
                                        $content = $content . "Item 1: " . $productA . PHP_EOL;
                                        $content = $content . "Item 2: " . $productB . PHP_EOL;
                                        $content = $content . "Item 3: " . $productC . PHP_EOL;
                                        $content = $content . "TOTAL " . $total . PHP_EOL;
                                        writeToFile("/database/cart.txt", $content)
                                        ?>

<?php include 'footer.php';?>