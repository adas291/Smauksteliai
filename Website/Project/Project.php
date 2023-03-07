<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>ProjectPage</title>
        <link rel="stylesheet" href="../styles.css">
	</head>
	<body>
        <nav>
            <img src="../Images/Logo.png" alt="logo">
            <ul>
                <li class="menuButton"><a href="../Home.php">Home</a></li>
                <li class="current"><a href="Project.php">Project</a></li>
                <li class="menuButton"><a href="../User/User.php">User</a></li>
                <li class="menuButton"><a href="../Client/Client.php">Client</a></li>
                <li class="menuButton"><a href="../Settings.php">Settings</a></li>
            </ul>
        </nav>
        <div class="buttons">
            <button class="firstB"><a href="NewProject.php">Create new project</a></button>
            <br />
            <button><a href="EditProject.php">Edit project</a></button>
            <br />
            <button><a href="ViewProjects.php">View projects</a></button>      
        </div>
	</body>
</html>