<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>EditProjectPage</title>
        <link rel="stylesheet" href="../styles.css?v=<?php echo time(); ?>">
	</head>
	<body>
        <nav>
            <img src="../Images/Logo.png" alt="logo">
            <ul>
				<li class="menuButton"><a href="./Project.php">Back</a></li>
                <li><a>Edit project</a></li>
            </ul>
        </nav>
        <form action="" method="post">
            <label for="pname">Project name:</label> <br>
            <input name="title" type="text" id="pname" placeholder="Enter project name" />
            <br>
        </form>
    </body>
</html>