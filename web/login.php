<?php

$db = NULL;	
try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

if (trim($_POST['user']) != '' && trim($_POST['password']) != '')
{
	$username = $_POST['user'];
	$password = $_POST['pass'];
	$result = $db->prepare("Select * from note_user where username = '$username' and password = '$password'");
    $result->execute();
	if($row= $family_members->fetch(PDO::FETCH_ASSOC)){
          echo "Login Success!! Welcome ";
    }else {
	
	echo "Failed to login!";
    }
	
}
?>