<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>NewUserPage</title>
        <link rel="stylesheet" href="../style.css">
        <script src="../Data/Countries-cities/country-states.js"></script>
	</head>
	<body>
        <nav>
            <ul>
                <li><a>Create new User</a></li>
            </ul>
        </nav>
        <form method="post">
		    <label for="fname">User first name:</label> <br>
		    <input type="text" id="fname" name="firstName" placeholder="Enter users first name" />
            <br><br>
            <label for="lname">User last name:</label> <br>
		    <input type="text" id="lname" name="lastName" placeholder="Enter users last name" />
            <br><br>
            <label for="sex">Select sex:</label> <br>
            <select name="sex" id="sex" name="sex">
                <option value="">Select sex</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <br><br>    
            <label for="birthdate">Users birthday:</label> <br>
            <input type="date" id="birthdate" name="birthDate">
		    <br><br>
            <label for="pnumber">Phone number:</label> <br>
		    <input type="tel" id="pnumber" name="phoneNumber" value="+370" />
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
                    <select id="state" name="state">
                        <option>_</option>
                    </select>
                </div>
            </div>
            <br>
            <label for="role">Select role:</label> <br>
            <select name="role" id="role" name="role" onchange="addTeacher()">
                <option value="ro">Select role</option>
                <option value="teacher">Teacher</option>
                <option value="student">Student</option>
                <option value="manager">Manager</option>
            </select>
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
		        <input type="text" id="client" name="client" placeholder="Enter client" />
                <br><br>
            </div>
            <input class="firstB" type="submit" value="Create user" />
        </form>
        <script class="forTeacher">
            function addTeacher()
            {
                var status = document.getElementById("role");
                if(status.value == "teacher")
                {
                    document.getElementById("teach").style.visibility="visible";
                    document.getElementById("stud").style.visibility="hidden";
                }
                else if(status.value == "student")
                {
                    document.getElementById("teach").style.visibility="hidden";
                    document.getElementById("stud").style.visibility="visible";
                }
                else
                {
                    document.getElementById("teach").style.visibility="hidden";
                    document.getElementById("stud").style.visibility="hidden";
                }
            }
        </script>

        <script>
            var user_country_code = "LT";
            
            (() => {
                const country_array = country_and_states.country;
                const states_array = country_and_states.states;
            
                const id_state_option = document.getElementById("state");
                const id_country_option = document.getElementById("country");
            
                const createCountryNamesDropdown = () => {
                    let option =  '';
                    option += '<option value="">Select country</option>';
            
                    for(let country_code in country_array){
                        let selected = (country_code == user_country_code) ? ' selected' : '';
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
                        option += '<option value="'+state_names[i].code+'">'+state_names[i].name+'</option>';
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