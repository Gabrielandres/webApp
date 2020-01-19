<!DOCTYPE html>
<html>
<head>
<title> Date & Time</title>
</head>
<body background="background2.jpg">

<?php

date_default_timezone_set("America/Boise");
echo '<span style="font-size: 60px;">Today is ' . date("Y/m/d") . 
'</span><br>';
echo '<span style="font-size: 60px;">Today is ' . date("l") . 
'</span><br>';

echo '<span style="font-size: 60px;">The time is ' . date("h:i:sa") . 
'</span>';
?>

</body>
</html>