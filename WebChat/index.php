<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <div id="main">
            <div id="info">
		        <h2>Login</h2>
		        <form action="login.php" method="post">
		            <label><b>Username</b><label>
		            <input type="text" name="uname" placeholder="John Doe"><br><br>
		            <label><b>Password</b><label>
		            <input type="password" name="pass" placeholder="password"><br><br>
		            <button style="background-color: #6495ed;color: white;" type="submit"><b>Login</b></button>
		        </form>
		        <form action="signup.php" method = "post">
		            <h2>Sign Up</h2>
		            <label><b>Username</b></label>
		            <input type="text" name="uname" placeholder="John Doe"><br><br>
		            <label><b>Password</b></label>
            		<input type="password" name="pass" placeholder="password"><br><br>
            		<label><b>Email</b></label>
            		<input type="email" name="email" placeholder="example@example.com"><br><br>
            		<button style="background-color: #6495ed;color: white;" type="submit"><b>Sign Up</b></button>
		        </form>
	        </div>
        </div>
    </body>
</html>