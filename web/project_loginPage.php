<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
		<link rel="stylesheet" type="text/css" href="proStyle.css" />
    </head>
    <body>
        <h1>Login</h1>
        <form action="login.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username"><br>
            <label for="password">Password</label>
            <input type="text" id="password" name="password"><br>
            <input type="submit" name="login" value="Login">
        </form>
		<p><a href="createAccount.php">Create an account</a></p>
    </body>
</html>