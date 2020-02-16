<?php

//session_start();
//$user = $_POST['username'];
//$pass = $_POST['password'];

//require 'lib/password.php';
require "connect.php";
$db = get_db();

if(isset($_POST['register'])){
    
   $user = !empty($_POST['username']) ? trim($_POST['username']) : null;
   $pass = !empty($_POST['password']) ? trim($_POST['password']) : null;
	echo "<p>$user $pass</p>";
	
   
 $stmt = $db->prepare("SELECT COUNT(username) AS num FROM users WHERE username = :user");
/*
 $stmt1 = $db->prepare("SELECT username, password FROM users");

    $stmt->bindValue(':username', $user);
    
    $stmt1->execute();
	while ($row = $stmt1->fetch(PDO::FETCH_ASSOC))
{
	
	$username = $row['username'];
	$password = $row['password'];

	echo "<p><strong>$username $password</strong></p>";
}
//echo "<p>$user $pass</p>";
*/    
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

     if($row['num'] > 0){
        die('That username already exists!');
    }

$passwordHash = password_hash($pass, PASSWORD_BCRYPT, array("cost" => 12));

    $stmt = $db->prepare("INSERT INTO users (username, password) VALUES (:user, :pass)");

 $stmt->bindValue(':user', $username);
    $stmt->bindValue(':pass', $passwordHash);

$result = $stmt->execute();
    
    if($result){
        echo 'Thank you for registering with our website.';
    }
   
}
?>