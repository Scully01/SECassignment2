<!DOCTYPE html>

    <head>
<?php include 'header.php';?>
</head>

<body>

<h1>Shopping Cart</h1>
    <FORM ACTION="shoppingCart.php" method="POST">
      <table class="table table-hover">  
        <tr>    
          <th scope="col">Products</th> 
             <th scope="col">Price</th>
             <th scope="col">Quantity</th>
             <th scope="col">Subtotal</th>  
            </tr>  <tr>   
               <td>iPhone<input type="hidden" name="iPhone" id="iPhone" value="iPhone"/></td> 
                  <td>$2199<input type="hidden" name="iPhoneprice" id="iPhoneprice" value="2100"/></td>
                  <td><input id="iPhonequantity" name="iPhonequantity" type="number" value="0" min="0" max="10"/></td>
                  <td><p id="iPhonesubtotal">0</p>
                  <input id="iPhonetotal" name="iPhonetotal" type="hidden"/></td>  
                </tr>  <tr>    
                  <td>MacBook<input type="hidden" name="MacBook" id="MacBook" value="MacBook"/></td> 
                     <td>$1999<input type="hidden" name="MacBookprice" id="MacBookprice" value="1999"/></td>
                     <td><input id="MacBookquantity" name="MacBookquantity" type="number" value="0" min="0" max="10"/></td>
                     <td><p id="MacBooksubtotal">0</p>
                     <input id="MacBooktotal" name="MacBooktotal" type="hidden"/></td>
                      </tr>  <tr>    
                        <td>Airpods<input type="hidden" name="Airpods" id="Airpods" value="Airpods"/></td>  
                          <td>$399<input type="hidden" name="Airpodsprice" id="Airpodsprice" value="399"/></td>
                          <td><input id="Airpodsquantity" name="Airpodsquantity" type="number" value="0" min="0" max="10"/></td>
                          <td><p id="Airpodssubtotal">0</p>
                          <input id="Airpodstotal" name="Airpodstotal" type="hidden"/></td>
                        
                        </tr>  <tr>   
                           <th></th>    <th>Total</th>
                           <th><p id="Quantity" >0</p>
                           <input id="totalQuantity" name="totalQuantity" type="hidden"/></th>
<th><p id="Price" >0</p>
<input id="totalPrice" name="totalPrice" type="hidden"/></th> 
 </tr><tr>   
    <td></td>  
      <td></td>
      <td><button type="button" onclick="updateCart();">Update Price</button></td>
      <td>
          <button type="submit">Check Out</button>
    </td>  
</tr>
</table>
<br/><br/>
</FORM>


<script type="text/javascript">
function calcSubTotal(productName)
{var quantity = parseInt(document.getElementById(productName+'quantity').value);
if(quantity > 0)
{var price = parseInt(document.getElementById(productName+'price').value);
var subtotal = price * quantity;
document.getElementById(productName+"subtotal").innerHTML = subtotal;
document.getElementById(productName+"total").value = subtotal;
return subtotal;
}
document.getElementById(productName+"subtotal").innerHTML = 0;
document.getElementById(productName+"total").value = 0;
return 0;
}

function updateCart()
{var total = calcSubTotal('iPhone')+calcSubTotal('MacBook')+calcSubTotal('Airpods');
var quantity = parseInt(document.getElementById('iPhonequantity').value)+parseInt(document.getElementById('MacBookquantity').value)+parseInt(document.getElementById('Airpodsquantity').value);
document.getElementById("Quantity").innerHTML = quantity;
document.getElementById("totalQuantity").value = quantity;
document.getElementById("Price").innerHTML = total;
document.getElementById("totalPrice").value = total;
}
</script>
<?php include 'footer.php';?>


</body>
</html>
