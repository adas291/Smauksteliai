<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
         include_once '../Includes/Connect.php'; 
         $query = 'SELECT * FROM MEMBER WHERE ID = ' . $_GET['id'];
         $tmp = $conn->query($query);
         $old_row = mysqli_fetch_array($tmp);

        ?>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>EditUserPage</title>
        <link rel="stylesheet" href="../styles.css?v=<?php echo time(); ?>">
		<script src="../Data/Countries-cities/country-states.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	</head>
	<body>
        <nav>
			<img src="../Images/Logo.png" alt="logo">
            <ul>
				<li class="menuButton"><a href="./ViewUsers.php">Back</a></li>
                <li><a>Edit user</a></li>
            </ul>
        </nav>
		<form method="post" action="../Includes/NewUserAdd.php">
		    <label for="fname">User first name:</label> <br>
            <input type="text" id="fname" name="fname" placeholder="Enter users last name" />
            <br><br>
            <label for="lname">User last name:</label> <br>
		    <input type="text" id="lname" name="lname" placeholder="Enter users last name" />
            <br><br>
            <label for="sex">Select sex:</label> <br>
            <?php
                $sql = "SELECT id_SEX, name FROM SEX";

                $result = $conn->query($sql) or die($conn->error);

                echo "<select name='sex'>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='".$row['id_SEX']."'>".$row['name']."</option>";
                }
                echo "</select>";
            ?>
            <br><br>    
            <label for="birthdate">Users birthday:</label> <br>
            <input type="date" id="birthdate" name="bday">
		    <br><br>
            <label for="pnumber">Phone number:</label> <br>
		    <input type="tel" id="pnumber" name="pnumber" value="+370" />
            <br><br>
            <label for="email">Email:</label> <br>
		    <input type="text" id="email" name="email" placeholder="example@email.com" />
            <br><br>
            <!-- <label for="city">City:</label> <br>
	    	<input type="text" id="city" placeholder="Enter users city" />
            <br> -->

            <div class="container country-states">
                <div>
                    <label for="country">Country: </label>
                    <br>
                    <select id="country" name="country">
                        <option>Select country</option>
                    </select>
                </div>
                <br>            
                <div>
                    <label for="state">State:</label>
                    <br>
                    <select id="state" name="city">
                        <option>_</option>
                    </select>
                </div>
            </div>
            <br>
            <label for="role">Select role:</label> <br>
            <?php
                $sql = "SELECT name FROM ROLE";

                $result = $conn->query($sql) or die($conn->error);

                echo "<select name='role' id='role'>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                }
                echo "</select>";
            ?>
            <br><br>
            <div class="teach" id="teach">
                <label for="qualification">Qualification:</label> <br>
		        <input type="text" id="qualification" name="qualification" placeholder="Enter qualification" />
                <br><br>
                <!--<label for="price">Price:</label> <br>
		        <input type="text" id="price" name="price" placeholder="Enter price" />
                <br><br>-->
            </div>
            <div class="stud" id="stud">
                <label for="client">Client:</label> <br>
		        <?php
                $sql = "SELECT id, name FROM CLIENT";

                $result = $conn->query($sql) or die($conn->error);

                echo "<select name='client'>";
                echo "<option value='-'>-</option>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='".$row['id']."'>".$row['name']."</option>";
                }
                echo "</select>";
                ?>
                <br><br>
            </div>
            <input class="firstB" type="submit" value="Save changes" />
        </form>
        <script src="../Scripts/ShowHide.js"></script>

        <script src="../Scripts/CountriesCitiesDropdown.js"></script>   
    </body>
</html>