<!DOCTYPE html>
<html>
    <head>
        <title>YourLDSHelp.com</title>
		<link rel="stylesheet" type="text/css" href="proStyle.css" />
    </head>
    <body>
	
	<?php
	require "connect.php";
    $db = get_db();
	
	$ensign = $db->prepare("SELECT * FROM ensignArti");
    $ensign->execute();
	
	while ($fRow = $ensign->fetch(PDO::FETCH_ASSOC))
   {
      $author = $fRow["author"];
      $topicName = $fRow["topicName"];
      $year = $fRow["year"];
	  $link = $fRow["link"];

      echo "<p>$author $topicName $year</p>";
	  echo '<a href='.$link.'>'.$link.'</a><br>';
   }
	
	
	
	
	
	?>
       
    </body>
</html>