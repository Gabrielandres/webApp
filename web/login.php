<?php
    $username = $_POST['user'];
	$password = $_POST['pass'];
	
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

$result = pg_query("Select * from note_user where username = '$username' and password = '$password'");
$row = pg_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password ){
    echo "Login Success!! Welcome ".$row['username'];
}else {
	
	echo "Failed to login!";
}
?>