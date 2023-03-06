<!DOCTYPE html>
<html lang="en">
	<head>
        <?php include_once '../Includes/Connect.php'; ?>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>NewClientPage</title>
        <link rel="stylesheet" href="../style.css">
        <script src="../Data/Countries-cities/country-states.js"></script>
	</head>
	<body>
        <nav>
            <ul>
                <li class="menuButton"><a href="./Client.php">Back</a></li>
                <li><a>Create new client</a></li>
            </ul>
        </nav>
        <form method="post" action="../Includes/NewClientAdd.php">
		    <label for="name">Client's name:</label> <br>
		    <input type="text" id="name" name="name" placeholder="Enter client's name" />
            <br><br>
            <label for="additional">Additional info:</label> <br>
		    <!--<input type="text" id="additional" name="additional" placeholder="Write additional info" /> -->
            <textarea name="additional" id="additional" cols="30" rows="5" placeholder="Enter text here..."></textarea>
            <br><br>
            <label for="manager">Select manager:</label> <br>
            <?php
                $sql = "SELECT id,fname, surname FROM MEMBER WHERE fk_ROLE_name = 'manager'";

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