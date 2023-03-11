<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>HomePage</title>
        <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
        <link href="http://fonts.cdnfonts.com/css/minecraftia" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
        
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
        <br><br>
        <div class="select">
            <select class="w-50" data-live-search="true">
                <option>web page</option>
                <option>web notpage</option>
                <option>wiki</option>
                <option>page</option>
            </select>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
        <script>
                $(document).ready(function(){
                    $('select').selectpicker();
                });
        </script>
	</body>
</html>