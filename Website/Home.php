<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>HomePage</title>
        <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
        <link href="http://fonts.cdnfonts.com/css/minecraftia" rel="stylesheet">
	</head>
	<body>
        <nav>
            <img src="./Images/Logo.png" alt="logo" width="80" height="80">
            <ul>
                <li class="current"><a href="Home.php">Home</a></li>
                <li class="menuButton"><a href="./Project/Project.php">Project</a></li>
                <li class="menuButton"><a href="./User/User.php">User</a></li>
                <li class="menuButton"><a href="./Client/Client.php">Client</a></li>
                <li class="menuButton"><a href="Settings.php">Settings</a></li>
                <li class="menuButton"><a href="#">MoreIfNeeded</a></li>
            </ul>
        </nav>
        <button class="btn-minecraft">Press</button>
	</body>
</html>