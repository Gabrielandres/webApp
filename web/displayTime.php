<!DOCTYPE html>
<html>
<head>
<title> Date & Time</title>
</head>
<body background="background2.jpg">

<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("l") . "<br>";

date_default_timezone_set("America/Boise");
echo "The time is " . date("h:i:sa");
?>

</body>
</html>