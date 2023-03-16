<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>ClientPage</title>
        <!-- Links -->
        <link rel="stylesheet" href="../styles.css?v=<?php echo time(); ?>">
	</head>
	<body>
        <nav>
            <img src="../Images/Logo.png" alt="logo">
            <ul>
                <li class="menuButton"><a href="../Home.php">Home</a></li>
                <li class="menuButton"><a href="../Project/Project.php">Project</a></li>
                <li class="menuButton"><a href="../User/User.php">User</a></li>
                <li class="current"><a href="Client.php">Client</a></li>
                <li class="menuButton"><a href="../Settings.php">Settings</a></li>
            </ul>
        </nav>
        <div class="buttons">
            <button class="niceButton"><a href="NewClient.php">Create new client</a></button>  
            <br />
            <button class="niceButton"><a href="ViewClients.php">View clients</a></button> 
        </div>
        
        <!-- Scripts -->
	</body>
</html>