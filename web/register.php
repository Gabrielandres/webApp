<?php

//session_start();

//require 'lib/password.php';
require "connect.php";
$db = get_db();

if(isset($_POST['register'])){
    
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $pass = !empty($_POST['password']) ? trim($_POST['password']) : null;
	
	echo <p>$username $pass</p>;
   
    //$stmt = $db->prepare("SELECT COUNT(username) AS num FROM users WHERE username = :username");
 $stmt = $db->prepare("SELECT username, password FROM users");

    //$stmt->bindValue(':username', $username);
    
    $stmt->execute();
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
	
	$username = $row['username'];
	$password = $row['password'];

	echo "<p><strong>$username $password</strong></p>";
}
/*    
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

     if($row['num'] > 0){
        die('That username already exists!');
    }

$passwordHash = password_hash($pass, PASSWORD_BCRYPT, array("cost" => 12));

    $stmt = $db->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");

 $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $passwordHash);

$result = $stmt->execute();
    
    if($result){
        echo 'Thank you for registering with our website.';
    }
   */ 
}
?>