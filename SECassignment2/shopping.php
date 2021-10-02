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
               <td>Gucci Flip Flops<input type="hidden" name="ProductA" id="ProductA" value="ProductA"/></td> 
                  <td>$2100<input type="hidden" name="ProductAprice" id="ProductAprice" value="2100"/></td>
                  <td><input id="ProductAquantity" name="ProductAquantity" type="number" value="0" min="0" max="10"/></td>
                  <td><p id="ProductAsubtotal">0</p>
                  <input id="ProductAtotal" name="ProductAtotal" type="hidden"/></td>  
                </tr>  <tr>    
                  <td>XXS Condoms<input type="hidden" name="ProductB" id="ProductB" value="ProductB"/></td> 
                     <td>$15<input type="hidden" name="ProductBprice" id="ProductBprice" value="15"/></td>
                     <td><input id="ProductBquantity" name="ProductBquantity" type="number" value="0" min="0" max="10"/></td>
                     <td><p id="ProductBsubtotal">0</p>
                     <input id="ProductBtotal" name="ProductBtotal" type="hidden"/></td>
                      </tr>  <tr>    
                        <td>onlyfans.com/11oang/12MonthBundle<input type="hidden" name="ProductC" id="ProductC" value="ProductC"/></td>  
                          <td>$690<input type="hidden" name="ProductCprice" id="ProductCprice" value="690"/></td>
                          <td><input id="ProductCquantity" name="ProductCquantity" type="number" value="0" min="0" max="10"/></td>
                          <td><p id="ProductCsubtotal">0</p>
                          <input id="ProductCtotal" name="ProductCtotal" type="hidden"/></td>
                        
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
{var total = calcSubTotal('ProductA')+calcSubTotal('ProductB')+calcSubTotal('ProductC');
var quantity = parseInt(document.getElementById('ProductAquantity').value)+parseInt(document.getElementById('ProductBquantity').value)+parseInt(document.getElementById('ProductCquantity').value);
document.getElementById("Quantity").innerHTML = quantity;
document.getElementById("totalQuantity").value = quantity;
document.getElementById("Price").innerHTML = total;
document.getElementById("totalPrice").value = total;
}
</script>
<?php include 'footer.php';?>


</body>
</html>
