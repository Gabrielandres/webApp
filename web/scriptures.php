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
	
	$scripture = $db->prepare("SELECT * FROM scriptures");
    $scripture->execute();
	
	while ($fRow = $scripture->fetch(PDO::FETCH_ASSOC))
   {
      $book = $fRow["book"];
      $chapter = $fRow["chapter"];
      $verse = $fRow["verse"];
	  $link = $fRow["link"];

      echo "<p>$book $chapter: $verse</p>";
	  echo '<a href='.$link.'>'.$link.'</a><br>';
   }
	
	
	
	
	
	?>
	
       
    </body>
</html>