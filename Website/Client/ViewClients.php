<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>ViewClientsPage</title>
        <!-- Links -->
        <link rel="stylesheet" href="../styles.css?v=<?php echo time(); ?>">
        <script src="../Data/Countries-cities/country-states.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <?php include_once '../Includes/Connect.php'; ?>
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
            <tbody id="body">
                <?php
                        $sql = "SELECT CLIENT.name, CLIENT.additional_info, CONCAT(MEMBER.fname, ' ' ,MEMBER.surname) as 'manager' FROM CLIENT
                        JOIN MEMBER on MEMBER.id = CLIENT.manager_id";

                        $result = $conn->query($sql);

                        while ($row = mysqli_fetch_assoc($result)) {
            
                                echo "<tr><td>".$row["name"]."</td><td>".$row["additional_info"]."</td><td>".$row["manager"]."</td><td><a href='./EditClient.php'>edit</a></td></tr>";
                        }
                ?>
            </tbody>
        </table>

        <!-- Scripts -->
        <script src="../Scripts/TableSearch.js"></script>
	</body>
</html>