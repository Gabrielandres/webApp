<!DOCTYPE html>
<html>
<head>
<title>ShoppingCart.com | Save Money. Live Better</title>
<link rel="stylesheet" type="text/css" href="style01.css" />
</head> 
<body>
<div id="shopping-cart">
<div class="txt-heading">List of Items Added to Your Cart <a id="btnEmpty" class="cart-action" onClick="cartAction('empty','');"><img src="images/icon-empty.png" /> Empty Your Cart</a></div>
<div id="cart-item">
<?php 
require_once "actionCart.php";
?>
<?php 
require_once "actionCart02.php";
?>
</div>
</div>
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script>
function cartAction(action, product_code) {
var queryString = "";
if (action != "") {
switch (action) {
case "add":
queryString = 'action=' + action + '&code=' + product_code
+ '&quantity=' + $("#qty_" + product_code).val();
 break;
case "remove":
queryString = 'action=' + action + '&code=' + product_code;
break;
case "empty":
queryString = 'action=' + action;
break;
}
}
jQuery.ajax({
url : "actionCart.php",
url : "actionCart02.php",
data : queryString,
type : "POST",
success : function(data) {
$("#cart-item").html(data);
if (action == "add") {
$("#add_" + product_code + " img").attr("src",
"images/icon-check.png");
$("#add_" + product_code).attr("onclick", "");
}
},
error : function() {
}
});
}
</script>

<button class="button3" onclick="window.location.href='browseItems.php'">Continue Shopping</button>
<button class="button4" onclick="window.location.href='checkoutPage.php'">Checkout</button>









</body>
</html>