<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>NewProjectPage</title>
        <link rel="stylesheet" href="../style.css">
	</head>
	<body>
        <nav>
            <ul>
                <li><a>Create new project</a></li>
            </ul>
        </nav>
		<form method="post">
			<label for="pname">Project name:</label> <br>
			<input type="text" id="pname" placeholder="Enter project name" />
			<br><br>
			<label for="startdate">Start date:</label> <br>
            <input type="date" id="startdate" name="startDate">
			<br><br>
			<label for="enddate">End date:</label> <br>
            <input type="date" id="enddate" name="endDate">
			<br><br>
			<label for="hperproject">Academic hours per project:</label> <br>
			<input type="text" id="hperproject" name="hoursPerProject" placeholder="Enter number of hours" />
			<br><br>
			<label for="hpersession">Academic hours per session:</label> <br>
			<input type="text" id="hpersession" name="hoursPerSession" placeholder="Enter number of hours" />
			<br><br>
			<label for="newness">How new the project is:</label> <br>
            <select name="newness" id="newness" name="newness">
                <option value="new">New</option>
                <option value="mix">Mix</option>
                <option value="inprogress">In Progress</option>
            </select>
            <br><br> 
			<label for="city">City:</label> <br>
			<!-- <input type="text" id="city" name="city" placeholder="Enter city" /> -->
			    	
			<select id="city" name="city">
			<option value="">Select city</option>
			<option value="01">Akmenė District Municipality</option>
			<option value="02">Alytus City Municipality</option>
			<option value="AL">Alytus County</option>
			<option value="03">Alytus District Municipality</option>
			<option value="05">Birštonas Municipality</option>
			<option value="06">Biržai District Municipality</option>
			<option value="07">Druskininkai municipality</option>
			<option value="08">Elektrėnai municipality</option>
			<option value="09">Ignalina District Municipality</option>
			<option value="10">Jonava District Municipality</option>
			<option value="11">Joniškis District Municipality</option>
			<option value="12">Jurbarkas District Municipality</option>
			<option value="13">Kaišiadorys District Municipality</option>
			<option value="14">Kalvarija municipality</option>
			<option value="15">Kaunas City Municipality</option>
			<option value="KU">Kaunas County</option>
			<option value="16">Kaunas District Municipality</option>
			<option value="17">Kazlų Rūda municipality</option>
			<option value="18">Kėdainiai District Municipality</option>
			<option value="19">Kelmė District Municipality</option>
			<option value="20">Klaipeda City Municipality</option>
			<option value="KL">Klaipėda County</option>
			<option value="21">Klaipėda District Municipality</option>
			<option value="22">Kretinga District Municipality</option>
			<option value="23">Kupiškis District Municipality</option>
			<option value="24">Lazdijai District Municipality</option>
			<option value="MR">Marijampolė County</option>
			<option value="25">Marijampolė Municipality</option>
			<option value="26">Mažeikiai District Municipality</option>
			<option value="27">Molėtai District Municipality</option>
			<option value="28">Neringa Municipality</option>
			<option value="29">Pagėgiai municipality</option>
			<option value="30">Pakruojis District Municipality</option>
			<option value="31">Palanga City Municipality</option>
			<option value="32">Panevėžys City Municipality</option>
			<option value="PN">Panevėžys County</option>
			<option value="33">Panevėžys District Municipality</option>
			<option value="34">Pasvalys District Municipality</option>
			<option value="35">Plungė District Municipality</option>
			<option value="36">Prienai District Municipality</option>
			<option value="37">Radviliškis District Municipality</option>
			<option value="38">Raseiniai District Municipality</option>
			<option value="39">Rietavas municipality</option>
			<option value="40">Rokiškis District Municipality</option>
			<option value="41">Šakiai District Municipality</option>
			<option value="42">Šalčininkai District Municipality</option>
			<option value="43">Šiauliai City Municipality</option>
			<option value="SA">Šiauliai County</option>
			<option value="44">Šiauliai District Municipality</option>
			<option value="45">Šilalė District Municipality</option>
			<option value="46">Šilutė District Municipality</option>
			<option value="47">Širvintos District Municipality</option>
			<option value="48">Skuodas District Municipality</option>
			<option value="49">Švenčionys District Municipality</option>
			<option value="TA">Tauragė County</option>
			<option value="50">Tauragė District Municipality</option>
			<option value="TE">Telšiai County</option>
			<option value="51">Telšiai District Municipality</option>
			<option value="52">Trakai District Municipality</option>
			<option value="53">Ukmergė District Municipality</option>
			<option value="UT">Utena County</option>
			<option value="54">Utena District Municipality</option>
			<option value="55">Varėna District Municipality</option>
			<option value="56">Vilkaviškis District Municipality</option>
			<option value="57">Vilnius City Municipality</option>
			<option value="VL">Vilnius County</option>
			<option value="58">Vilnius District Municipality</option>
			<option value="59">Visaginas Municipality</option>
			<option value="60">Zarasai District Municipality</option>
			</select>
			<br><br>
			<input class="firstB" type="submit" value="Create project" />
		</form>

	</body>
</html>