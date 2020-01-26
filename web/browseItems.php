<!DOCTYPE html>
<html>
<head>
<title>ShoppingCart.com | Save Money. Live Better</title>
<link rel="stylesheet" type="text/css" href="style01.css" />
</head> 
<body>


<?php 
require_once "availableItems.php";
?>

<div id="cart-item">
<?php 
require_once "actionCart.php";
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

<button class="button2" onclick="window.location.href='viewCart.php'">View Cart</button>





</body>
</html>