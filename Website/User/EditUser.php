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
		<form method="post" action="./SaveEditedUser.php?id=<?php echo $_GET['id'];  ?>">

		    <label for="fname">User first name:</label> <br>
            <input type="text" id="fname" name="fname" value="<?php echo $old_row['fname']; ?>" />
            <br><br>

            <label for="lname">User last name:</label> <br>
		    <input type="text" id="lname" name="surname" value="<?php echo $old_row['surname']; ?>" />
            <br><br>

            <label for="sex">Select sex:</label> <br>
            <?php
                $sql = "SELECT id_SEX, name FROM SEX";

                $result = $conn->query($sql) or die($conn->error);

                echo "<select name='sex'>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option ";
                    if ($row['id_SEX'] == $old_row['sex']) echo 'selected ';      
                    echo "value='" .$row['id_SEX']. "'>".$row['name']."</option>";
                }
                echo "</select>";
            ?>
            <br><br>  

            <label for="birthdate">Users birthday:</label> <br>
            <input type="date" id="birthdate" name="birth_day" value="<?php echo $old_row['birth_day']; ?>">
		    <br><br>

            <label for="pnumber">Phone number:</label> <br>
		    <input type="tel" id="pnumber" name="phone_number" value="<?php echo $old_row['phone_number']; ?>" />
            <br><br>

            <label for="email">Email:</label> <br>
		    <input type="text" id="email" name="email" value="<?php echo $old_row['email']; ?>" />
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

                echo "<select name='fk_ROLE_name' id='role'>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option ";
                    if ($row['name'] == $old_row['fk_ROLE_name']) echo 'selected ';      
                    echo "value='" .$row['name']. "'>".$row['name']."</option>";
                }
                echo "</select>";
            ?>

            <br><br>
            <div class="teach" id="teach">
                <!--<label for="qualification">Qualification:</label> <br>
		        <input type="text" id="qualification" name="qualification" placeholder="Enter qualification" />
                <br><br>
                <label for="price">Price:</label> <br>
		        <input type="text" id="price" name="price" placeholder="Enter price" />
                <br><br>-->
            </div>
            <div class="stud" id="stud">
                <label for="client">Client:</label> <br>
		        <?php
                $sql = "SELECT id, name FROM CLIENT";

                $result = $conn->query($sql) or die($conn->error);

                echo "<select name='fk_CLIENT_id'>";
                echo "<option value='-1'>-</option>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option ";
                    if ($row['id'] == $old_row['fk_CLIENT_id']) echo 'selected ';      
                    echo "value='" .$row['id']. "'>".$row['name']."</option>";
                }
                echo "</select>";
                ?>
                <br><br>
                
            </div>
            <input class="firstB" type="submit" value="Save changes" />
        </form>
        <script src="../Scripts/ShowHide.js"></script>

        <script>
            (() => {
                const country_array = country_and_states.country;
                const states_array = country_and_states.states;
            
                const id_state_option = document.getElementById("state");
                const id_country_option = document.getElementById("country");

                let old_country = '<?php echo $old_row['country']; ?>';
                let old_city =  '<?php echo $old_row['city']; ?>';
            
                const createCountryNamesDropdown = () => {
                    let option =  '';
                    option += '<option value="">Select country</option>';
            
                    for(let country_code in country_array){
                        let selected = (country_code == old_country) ? ' selected' : '';
                        option += '<option value="'+country_code+'"'+selected+'>'+country_array[country_code]+'</option>';
                    }
                    id_country_option.innerHTML = option;
                };
            
                const createStatesNamesDropdown = () => {
                    let selected_country_code = id_country_option.value;
                    
                    let state_names = states_array[selected_country_code];
                                
                    if(!state_names){
                        id_state_option.innerHTML = '<option>Select state</option>';
                        return;
                    }
                    let option = '';
                    option += '<select id="state">';
                    option += '<select name="state">';
                    option += '<option>Select state</option>';
                    for (let i = 0; i < state_names.length; i++) {
                        let selected = (state_names[i].name == old_city) ? ' selected' : '';
                        option += '<option value="'+state_names[i].name+'"'+selected+'>'+state_names[i].name+'</option>';
                    }
                    option += '</select>';
                    id_state_option.innerHTML = option;
                };

                id_country_option.addEventListener('change', createStatesNamesDropdown);
            
                createCountryNamesDropdown();
                createStatesNamesDropdown();
            })();
        </script>   
    </body>
</html>