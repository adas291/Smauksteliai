<!DOCTYPE html>
<html lang="en">
	<head>
        <?php include_once 'Includes/Connect.php'; ?>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>NewClientPage</title>
	</head>
	<body>

        <form method="POST" action="Includes/NewClientAdd.php">
		    <label for="fname">User first name:</label> <br>
		    <input type="text" id="fname" name="name" placeholder="Enter users first name" />
            <br><br>
            <label for="additional">additional info:</label> <br>
		    <input type="text" id="additional" name="additional" placeholder="Enter users last name" />
            <br><br>

            <?php
                $sql = "SELECT id,fname, surname FROM member WHERE fk_ROLE_name = 'manager'";

                $result = $conn->query($sql) or die($conn->error);

                echo "<select name='manager'>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='".$row['id']."'>".$row['fname']." ".$row['surname']."</option>";
                }
                echo "</select>";
            ?>
            <br><br>
            <input class="firstB" type="submit" value="Create user" />
        </form>
	</body>
</html>