<!DOCTYPE html>
<html lang="en">
	<head>
        <?php include_once '../Includes/Connect.php'; ?>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>ViewClientsPage</title>
        <link rel="stylesheet" href="../styles.css?v=<?php echo time(); ?>">
        <script src="../Data/Countries-cities/country-states.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	</head>
	<body>
        <nav>
            <img src="../Images/Logo.png" alt="logo">
            <ul>
                <li class="menuButton"><a href="./Client.php">Back</a></li>
                <li><a>View Clients</a></li>
            </ul>
        </nav>
        <input type="text" id="searchBar" placeholder="Search...">
        <table>
            <thead>
                <th>Name</th>
                <th>Additional info</th>
                <th>Manager</th>
            </thead>
            <tbody class="body">

            </tbody>
        </table>
        <script>
            $(document).ready(function(){
                $("#searchBar").on("keyup",function(){
                  var value= $(this).val().toLowerCase();
                  $("#body tr").filter(function(){
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                  });
                });
            });
        </script>
	</body>
</html>