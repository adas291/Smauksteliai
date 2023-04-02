<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>NewUserPage</title>
        <!-- Links -->
        <link rel="stylesheet" href="../styles.css?v=<?php echo time(); ?>">
        <script src="../Data/Countries-cities/country-states.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <?php include_once '../Includes/Connect.php'; ?>
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
                            <li class="menuButton nav-item dropdown">
                                <a href="#" 
                                class="nav-link dropdown-toggle" 
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Project
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="../Project/NewProject.php" class="dropdown-item">New project</a></li>
                                    <li><a href="../Project/ViewProjects.php" class="dropdown-item">Projects</a></li>
                                </ul>
                            </li>
                            <li class="current nav-item dropdown">
                                <a href="./User/User.php" 
                                class="nav-link active dropdown-toggle"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                                User
                                </a>
                                <ul class="dropdown-menu"
                                aria-labelledby="navbarDropdown">
                                    <li><a href="./NewUser.php" class="dropdown-item">New user</a></li>
                                    <li><a href="./ViewUsers.php" class="dropdown-item">Users</a></li>
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
        <div class="container-fluid">
            <div class="container h1 d-flex justify-content-center">Create new user</div>
                <div class="container inputContainer">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <form method="post" action="../Includes/NewUserAdd.php" class="needs-validation" novalidate>
                                <div class="input">
                                    <label for="fname" class="form-label">First name:</label> <br>
                                    <input type="text" class="form-control" name="fname" pattern="^[^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$" placeholder="Enter user's first name" required/>
                                    <div class="invalid-feedback">
                                        Please provide a valid name
                                    </div>
                                </div>
                                <div class="input">
                                    <label for="lname" class="form-label">Last name:</label> <br>
                                    <input type="text" class="form-control" name="lname" pattern="^[^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$" placeholder="Enter user's last name" required/>
                                    <div class="invalid-feedback">
                                        Please provide a valid last name 
                                    </div>
                                </div>
                                <div class="input" >
                                    <label for="sex" class="form-label">Sex:</label> <br>
                                    <?php
                                        $sql = "SELECT id_SEX, name FROM SEX";

                                        $result = $conn->query($sql) or die($conn->error);

                                        echo "<select class='form-select' name='sex' required>";
                                        echo '<option selected disabled value="">Select sex</option>';
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value='".$row['id_SEX']."'>".$row['name']."</option>";
                                        }
                                        echo "</select>";
                                    ?>
                                    <div class="invalid-feedback">
                                        Please select sex
                                    </div>  
                                </div>
                                <div class="input">
                                    <label for="birthdate" class="form-label">Birthday:</label> <br>
                                    <input type="date" class="form-control" name="bday" required>
                                    <div class="invalid-feedback">
                                        Please select birthday
                                    </div>
                                </div>
                                <div class="input">
                                    <label for="pnumber" class="form-label">Phone number:</label> <br>
                                    <input type="tel" class="form-control" name="pnumber" pattern="[+][3][7][0][0-9]{8}" placeholder="+370********" required/>
                                    <div class="invalid-feedback">
                                        Please provide a valid phone number(+370********)
                                    </div>
                                </div>
                                <div class="input">
                                    <label for="email" class="form-label">Email:</label> <br>
                                    <input type="text" class="form-control" name="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" placeholder="example@email.com" required/>
                                    <div class="invalid-feedback">
                                        Please provide a valid email
                                    </div>
                                </div>
                                <div class="country-states">
                                    <div class="input">
                                        <label for="country" class="form-label">Country: </label> <br>
                                        <select id="country" class="form-select" name="country">
                                            <option>Select country</option>
                                        </select>
                                    </div>        
                                    <div class="input">
                                        <label for="state" class="form-label">State:</label> <br>
                                        <select id="state" class="form-select" name="city" required>
                                            <option selected disabled value="">Select city</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select city
                                        </div>
                                    </div>
                                </div>
                                <div class="input">
                                    <label for="role" class="form-label">Role:</label> <br>
                                    <?php
                                        $sql = "SELECT name FROM ROLE";

                                        $result = $conn->query($sql) or die($conn->error);

                                        echo "<select name='role' class='form-select' id='role' required>";
                                        echo '<option selected disabled value="">Select role</option>';
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                        }
                                        echo "</select>";
                                    ?>
                                    <div class="invalid-feedback">
                                        Please select role
                                    </div>
                                </div>
                                <div class=" input teach" id="teach">
                                    <label for="qualification" class="form-label">Qualification:</label> <br>
                                    <input type="text" class="form-control" name="qualification" placeholder="Enter qualification" />
                                    <br>
                                </div>
                                <div class=" input stud" id="stud">
                                    <label for="client" class="form-label">Client:</label> <br>
                                    <?php
                                    $sql = "SELECT id, name FROM CLIENT";

                                    $result = $conn->query($sql) or die($conn->error);

                                    echo "<select name='client' class='form-select'>";
                                    echo "<option value='-'>-</option>";
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value='".$row['id']."'>".$row['name']."</option>";
                                    }
                                    echo "</select>";
                                    ?>
                                    <br>
                                </div>
                                
                                <input class="btn btn-success formButton" type="submit" value="Create user" />
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        <hr id="footer-rule"> 
        <div class="footer"> 
        </div>

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="../Scripts/ShowHide.js"></script>
        <script src="../Scripts/CountriesCitiesDropdown.js"></script> 
        <script src="../Scripts/Validation.js"></script>
	</body>
</html>