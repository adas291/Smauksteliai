<!DOCTYPE html>
<html lang="en">
	<head>
        <?php include_once '../Includes/Connect.php'; ?>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>ViewUsersPage</title>
        <link rel="stylesheet" href="../style.css">
	</head>
	<body>
        <nav>
            <img src="../Images/Logo.png" alt="logo">
            <ul>
                <li class="menuButton"><a href="./User.php">Back</a></li>
                <li><a>View users</a></li>
            </ul>
        </nav>
        </nav>

        <?php
            $result = $conn->query("SELECT fname, surname, birth_day, phone_number, country, email, city, sex, fk_ROLE_name, fk_CLIENT_id FROM MEMBER");

            echo "<table>";
                echo "<tr><th>Name</th><th>Surname</th><th>Birth date</th><th>Phone number</th><th>Country</th><th>Email</th><th>City</th><th>Sex</th><th>Role</th><th>Client</th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    $sex_ID = $row["sex"];
                    $sex_result = $conn->query("SELECT name FROM SEX WHERE id_SEX='$sex_ID'");
                    $sex = $sex_result->fetch_assoc();

                    $client_ID = $row["fk_CLIENT_id"];

                    if ($client_ID)
                    {
                        $client_result = $conn->query("SELECT name FROM CLIENT WHERE id='$client_ID'");
                        $client = $client_result->fetch_assoc();
    
                        echo "<tr><td>".$row["fname"]."</td><td>".$row["surname"]."</td><td>".$row["birth_day"]."</td><td>".$row["phone_number"]."</td><td>".$row["country"]."</td><td>".$row["email"]."</td><td>"
                              .$row["city"]."</td><td>".$sex["name"]."</td><td>".$row["fk_ROLE_name"]."</td><td>".$client["name"]."</td></tr>";
                    }
                    
                    else
                    {
                        echo "<tr><td>".$row["fname"]."</td><td>".$row["surname"]."</td><td>".$row["birth_day"]."</td><td>".$row["phone_number"]."</td><td>".$row["country"]."</td><td>".$row["email"]."</td><td>"
                              .$row["city"]."</td><td>".$sex["name"]."</td><td>".$row["fk_ROLE_name"]."</td><td></td></tr>";
                    }
                    
                }
            echo "</table>";
        ?>
    </body>
</html>