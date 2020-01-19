<!DOCTYPE html>
<html>
<head>
<title> Date & Time</title>
</head>
<body background="background2.jpg">

<?php

date_default_timezone_set("America/Boise");
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("l") . "<br>";

echo '<span style="font-size: 40px;">The time is ' . date("h:i:sa") . 
'</span>';
?>

</body>
</html>