<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NewProjectPage</title>
    <!-- Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css?v=<?php echo time(); ?>">
    
    <?php include '../Includes/Connect.php'; ?>
</head>

<body>    
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-md"> 
        <img src="../Images/Log.png" alt="logo" width="70" class="img d-inline-block align-top logoImg">
        <div class="container navigationBar justify-content-sm-end">                
            <button type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" 
            class="navbar-toggler" 
            aria-controls="navbarNav" 
            aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="menuButton nav-item"><a href="../Home.php" class="nav-link">Home</a></li>
                        <li class="current nav-item dropdown">
                            <a href="#" 
                            class="nav-link active dropdown-toggle" 
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Project
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="./NewProject.php" class="dropdown-item">New project</a></li>
                                <li><a href="./ViewProjects.php" class="dropdown-item">Projects</a></li>
                            </ul>
                        </li>
                        <li class="menuButton nav-item dropdown">
                            <a href="./User/User.php" 
                            class="nav-link dropdown-toggle"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            User
                            </a>
                            <ul class="dropdown-menu"
                            aria-labelledby="navbarDropdown">
                                <li><a href="../User/NewUser.php" class="dropdown-item">New user</a></li>
                                <li><a href="../User/ViewUsers.php" class="dropdown-item">Users</a></li>
                            </ul>
                        </li>
                        <li class="menuButton nav-item dropdown">
                            <a href="./Client/Client.php" 
                            class="nav-link dropdown-toggle"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Client
                            </a>
                            <ul class="dropdown-menu"
                            aria-labelledby="navbarDropdown">
                                <li><a href="../Client/NewClient.php" class="dropdown-item">New client</a></li>
                                <li><a href="../Client/ViewClients.php" class="dropdown-item">Clients</a></li>
                            </ul>
                        </li>
                    </ul>
            </div>
        </div>
        <a href="../Settings.php" class="setButton">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" class="bi bi-gear settingsButton" viewBox="0 0 16 16">
            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
            </svg>
        </a>
    </nav>

    <!-- Inputs --> 
    <div class="container-fluid">
        <div class="container h1 d-flex justify-content-center">Create new project</div>
        <div class="container inputContainer">
            <form action="NewProjectAdd.php" method="post">
                <label for="pname">Project's name:</label> <br>
                <input name="title" type="text" id="pname" placeholder="Enter project's name" />
                <br><br>
                <label for="subject">Subject: </label>
                <br>
                <?php

                $sql = "SELECT * FROM QUALIFICATION ";
                $result = $conn->query($sql) or die($conn->error);

                echo '<select name="subject">';

                while ($row = mysqli_fetch_array($result)) {
                    echo '<option value="' . $row['id'] . '">' . $row['name'] . "</option>";
                }

                echo "</select>";

                ?>
                <br><br>
                <label for="">Assign manager:</label> <br>
                <?php
                $sql = "SELECT id, fname, surname FROM MEMBER WHERE `fk_ROLE_name` = 'manager'";
                $result = $conn->query($sql) or die($conn->error);

                echo "<select name='manager'>";

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['id'] . '">' . $row['name'] . $row['surname'] . "</option>";
                }

                echo "</select>";

                ?>
                <br><br>
                <label for="">Teaching material: </label> <br>
                <?php

                $sql = "SELECT * FROM TEACHING_MATERIAL";
                $result = $conn->query($sql) or die($conn->error);

                echo "<select name='material'>";

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value=" . $row["id"] . ">" . $row['title'] . "</option>";
                }
                echo "</select>";

                ?>
                <br><br>
                <label for="ahours">Academic hours:</label> <br>
                <input name="ahours" type="number" id="ahours" placeholder="Enter academic hours" />
                <br><br>
                <label for="sdate">Start date:</label> <br>
                <input type="date" id="sdate" name="sdate" >
                <br><br>
                <label for="city">City:</label> <br>
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
                <label for="">Additional comments</label>
                <br>
                <textarea name="comments" id="comments" cols="30" rows="5" placeholder="Enter text here..."></textarea>
                <br><br>
                <input class="firstB" type="submit" value="Create project" />
            </form>
        </div>
    </div>
    <hr id="footer-rule"> 
    <div class="footer"> 
    </div>  
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>