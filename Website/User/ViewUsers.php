<!DOCTYPE html>
<html lang="en">
	<head>
        <?php include_once '../Includes/Connect.php'; ?>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>ViewUsersPage</title>
        <link rel="stylesheet" href="../styles.css">
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
        <table class="table">
        <?php
                $sql = "SELECT fname, surname, birth_day, phone_number, country, email, city, SEX.name as 'sex', fk_ROLE_name, CLIENT.name as 'client' FROM MEMBER
                JOIN SEX on MEMBER.sex = SEX.id_SEX
                LEFT JOIN CLIENT on MEMBER.fk_CLIENT_id = CLIENT.id";

                $result = $conn->query($sql);

                echo "<tr><th>Name</th><th>Surname</th><th>Birth date</th><th>Phone number</th><th>Email</th><th>Country</th><th>City</th><th>Sex</th><th>Role</th><th>Client</th></tr>";

                while ($row = mysqli_fetch_assoc($result)) {

                    if ($row['client'])
                    {
    
                        echo "<tr><td>".$row["fname"]."</td><td>".$row["surname"]."</td><td>".$row["birth_day"]."</td><td>".$row["phone_number"]."</td><td>".$row["email"]."</td><td>".$row["country"]."</td><td>"
                              .$row["city"]."</td><td>".$row["sex"]."</td><td>".$row["fk_ROLE_name"]."</td><td>".$row["client"]."</td></tr>";
                    }
                    
                    else
                    {
                        echo "<tr><td>".$row["fname"]."</td><td>".$row["surname"]."</td><td>".$row["birth_day"]."</td><td>".$row["phone_number"]."</td><td>".$row["email"]."</td><td>".$row["country"]."</td><td>"
                              .$row["city"]."</td><td>".$row["sex"]."</td><td>".$row["fk_ROLE_name"]."</td><td></td></tr>";
                    }
                }
        ?>
        </table>
    </body>
</html>