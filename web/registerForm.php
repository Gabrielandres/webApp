<!DOCTYPE html>
<html>
    <head>
        <title>YourLDSHelp.com</title>
		<link rel="stylesheet" type="text/css" href="proStyle.css" />
    </head>
    <body>
	<?php
	if(/*isset($_POST['registerForm']*/$_SERVER["REQUEST_METHOD"] == "POST"){
	
	if (empty($_POST["name"])) {
       $nameErr = "Name is required";
     } 
  ?>
        <h2>User Register Form</h2>
        <!--<form action="saveRegisterForm.php" method="post">-->
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		  <div class="info">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName">
            <span class="error">*
			<?php include 'saveRegisterForm.php'; echo $nameErr;?>
			</span><br>
			<!--
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName"><br>
			<label for="address">Address:</label>
            <input type="text" id="address" name="address"><br>
			<label for="city">City:</label>
            <input type="text" id="city" name="city"><br>
			<label for="state">State:</label>
            <input type="text" id="state" name="state"><br>
			<label for="zip">Zip:</label>
            <input type="text" id="zip" name="zip"><br>
			<label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone"><br>
			<label for="email">Email:</label>
            <input type="text" id="email" name="email"><br>-->
		  </div>
		  <div class="info2">	
            <button type="submit" name="registerForm" value="registerForm"></button>
		  </div>
        </form>
    </body>
</html>