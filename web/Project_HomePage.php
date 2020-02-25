<!DOCTYPE html>
<html>
    <head>
        <title>YourLDSHelp.com</title>
		<link rel="stylesheet" type="text/css" href="proStyle.css" />
    </head>
    <body>
        <h2>Login To Your Account</h2>
        <form action="login.php" method="post">
		
		    <div class="img">
			   <img src="logoPic.jpg" alt="logo" class="logo">
			</div>
			
			<div class="info">   
               <label for="username"><b>Username</b></label>
               <input type="text" placeholder="Enter Username" id="username" name="username" required><br>
               <label for="password"><b>Password</b></label>
               <input type="text" placeholder="Enter Password" id="password" name="password" required><br>
			</div>
			<div class="info2">
               <button type="submit" name="login" value="Login">Login</button><br>
			   <label>
			      <input type="checkbox" checked="checked" name="remember">Remember me
			   </label>
			</div>
			
            <div class="container" style="background-color:#f1f1f1">
            <button class="createAcc" onclick="document.location = 'registerForm.php'">Create an account</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
			
        </form>
    </body>
</html>