<!DOCTYPE html>
<html>
<head>
<title>ShoppingCart.com | Save Money. Live Better</title>
<link rel="stylesheet" type="text/css" href="style01.css" />
</head> 
<body>

<div class="order">
<h1>Thank You For Your Order</h1>
<?php
echo "Order Number: " . rand() . "\n";?><br>
<?php 
date_default_timezone_set("America/Boise");
echo "Order Date: " . date("Y/m/d") . "\n";
?><br>
Customer: <?php echo $_POST["name"]; ?><br>
</div>

<h2>Please keep the above numbers for your reference. We are processing your order now, allow up to 24 hours for us to process your order for shipment.</h2>

<div class="shipping">
Confirmation will be sent to: <?php echo $_POST["email"]; ?>
Shipping Address: <?php echo $_POST["address"]; ?><br>
Name: <?php echo $_POST["name"]; ?><br>
Shipping Address: <?php echo $_POST["address"]; ?><br>
City: <?php echo $_POST["city"]; ?><br>
State: <?php echo $_POST["state"]; ?><br>
Country: <?php echo $_POST["country"]; ?><br>
Phone: <?php echo $_POST["phone"]; ?><br>
</div>

<?php 
require_once "actionCart.php";
?>

<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>	
<table class="tutorial-table">
<tbody>
<tr>
<th><strong>Name</strong></th>
<th><strong>Code</strong></th>
<th class="align-right"><strong>Quantity</strong></th>
<th class="align-right"><strong>Price</strong></th>
<th></th>
</tr>	
<?php		
foreach ($_SESSION["cart_item"] as $item){
?>
<tr>
<td><strong><?php echo $item["name"]; ?></strong></td>
<td><?php echo $item["code"]; ?></td>
<td align="right"><?php echo $item["quantity"]; ?></td>
<td align="right"><?php echo "$".$item["price"]; ?></td>

<?php
$item_total += ($item["price"]*$item["quantity"]);
}
?>

<tr>
<td colspan="3" align=right><strong>Total:</strong></td>
<td align=right><?php echo "$". number_format($item_total,2); ?></td>
<td></td>
</tr>
</tbody>
</table>		
 <?php
  }
?>


</body>
</html>