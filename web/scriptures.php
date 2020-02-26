<!DOCTYPE html>
<html>
    <head>
        <title>YourLDSHelp.com</title>
		<link rel="stylesheet" type="text/css" href="proStyle.css" />
    </head>
    <body>
	<?php
	$linkvar='http://www.google.com';
	
	echo '<a href='.$linkvar.'>'.$linkvar.'</a>';
	
	?>
	<br>
	<br>
	<?php
	require "connect.php";
    $db = get_db();
	
	$scripture = $db->prepare("SELECT * FROM scripture");
    $scripture->execute();
	
	while ($fRow = $scripture->fetch(PDO::FETCH_ASSOC))
   {
      $book = $fRow["book"];
      $chapter = $fRow["chapter"];
      $verse = $fRow["verse"];
	  $link = $fRow["link"];

      echo "<p>$book . ' ' . $chapter . ' ' . 
            $verse . ' ' . $link</p>";
   }
	
	
	
	
	
	?>
	
       
    </body>
</html>