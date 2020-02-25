<!DOCTYPE html>
<html>
    <head>
        <title>YourLDSHelp.com</title>
		<link rel="stylesheet" type="text/css" href="proStyle.css" />
    </head>
    <body>
        <h2>User Register Form</h2>
        <form action="saveRegisterForm.php" method="post">
		  <div class="info">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName"><br>
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
            <input type="text" id="email" name="email"><br>
		  </div>
		  <div class="info2">	
            <button type="submit" name="registerForm" value="registerForm">Submit</button>
		  </div>
        </form>
    </body>
</html>