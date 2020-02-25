<!DOCTYPE html>
<html>
    <head>
        <title>YourLDSHelp.com</title>
		<link rel="stylesheet" type="text/css" href="proStyle.css" />
    </head>
    <body>
        <h2>Create Username and Password</h2>
        <form action="register.php" method="post">
		<div class="info">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password</label>
            <input type="text" id="password" name="password" required><br>
		</div>
		<div class="info2">
            <button type="submit" name="register" value="Register">Save</button>
		</div>
			
        </form>
    </body>
</html>