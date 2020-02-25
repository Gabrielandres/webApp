<?php

require "connect.php";
$db = get_db();

$nameErr = "";

if(/*isset($_POST['registerForm']*/$_SERVER["REQUEST_METHOD"] == "POST"){
	
	if (empty($_POST["name"])) {
       $nameErr = "Name is required";
  }/* else {
   $firstName = !empty($_POST['firstName']) ? trim($_POST['firstName']) : null;

  }
	
	//$firstName = !empty($_POST['firstName']) ? trim($_POST['firstName']) : null;
    
	$lastName = !empty($_POST['lastName']) ? trim($_POST['lastName']) : null;
	$address = !empty($_POST['address']) ? trim($_POST['address']) : null;
	$city = !empty($_POST['city']) ? trim($_POST['city']) : null;
	$state = !empty($_POST['state']) ? trim($_POST['state']) : null;
	$zip = !empty($_POST['zip']) ? trim($_POST['zip']) : null;
	$phone = !empty($_POST['phone']) ? trim($_POST['phone']) : null;
	$email = !empty($_POST['email']) ? trim($_POST['email']) : null;
	*/
	//$stmt = $db->prepare("INSERT INTO user_information (firstName, lastName, address, city, state, zip, phone, email) VALUES (:firstName, :lastName, :address, :city, :state, :zip, :phone, :email)");
   // $stmt = $db->prepare("INSERT INTO user_information (firstName) VALUES (:firstName)");

	//$stmt->bindValue(':firstName', $firstName);
	/*
	$stmt->bindValue(':lastName', $lastName);
	$stmt->bindValue(':address', $address);
	$stmt->bindValue(':city', $city);
	$stmt->bindValue(':state', $state);
	$stmt->bindValue(':zip', $zip);
	$stmt->bindValue(':phone', $phone);
	$stmt->bindValue(':email', $email);
	
	$result = $stmt->execute();
	
	if($result){
        header('Location: createAccount.php');
    }
    */    
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