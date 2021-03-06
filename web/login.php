<?php

session_start();

require "connect.php";
$db = get_db();

if(isset($_POST['login'])){
	
	$username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;

    $stmt = $db->prepare("SELECT id, username, password FROM users WHERE username = :username");
    $stmt->bindValue(':username', $username);
    $stmt->execute();
	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if($user === false){
     
        die('Incorrect username / password combination!');
    } else{
        
        $validPassword = password_verify($passwordAttempt, $user['password']);
        
        if($validPassword){
            
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['logged_in'] = time();
           
            header('Location: home.php');
            exit;
            
        } else{
            die('Incorrect username / password combination!');
        }
    }
	
}	
?>
<!DOCTYPE html>
<html>
    <head>
        <title>YourLDSHelp.com</title>
		<link rel="stylesheet" type="text/css" href="proStyle.css" />
    </head>
    <body>
       
    </body>
</html>