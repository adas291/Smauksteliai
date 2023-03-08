<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>LoginPage</title>
        <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
	</head>
    <body>
        <nav>
            <ul>
                <li><a>Login</a></li>
            </ul>
        </nav>
        <form method="post" action="../Includes/LoginUser.php">
            <div class="loginImgContainer">
                <img src="Images/Logo.png" alt="logo" class="loginLogo">
            </div>
            <div class="loginInputContainer">
                <label for="username">Username</label><br>
                <input class="loginInput" type="text" id="username" name="username" placeholder="Enter Username"  required>
                <br><br>
                <label for="password">Password</label><br>
                <input class="loginInput" type="password" id="password" name="password" placeholder="Enter Password" required>
                <br><br>
                <button type="submit">Login</button>
                <label>
                <input type="checkbox" checked="checked" name="remember">Remember me
                </label>
            </div>

            <div class="loginInputContainer">
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
        </form>

    </body>
</html>