<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EditClientPage</title>
    <!-- Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css?v=<?php echo time(); ?>">
    <?php

    include_once '../Includes/Connect.php';
    $query = "SELECT * FROM CLIENT WHERE ID = " . $_GET['id'];
    $tmp = $conn->query($query);
    $old_row = mysqli_fetch_array($tmp);

    ?>
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
                    <li class="current nav-item dropdown">
                        <a href="./Client/Client.php" 
                        class="nav-link active dropdown-toggle"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Client
                        </a>
                        <ul class="dropdown-menu"
                        aria-labelledby="navbarDropdown">
                            <li><a href="./NewClient.php" class="dropdown-item">New client</a></li>
                            <li><a href="./ViewClients.php" class="dropdown-item">Clients</a></li>
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
        <div class="container h1 d-flex justify-content-center">Edit client</div>
        <div class="container inputContainer">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <form method="post" action="SaveEditedClient.php?id=<?php echo $_GET['id'];  ?>" class="needs-validation" novalidate>
                        <div class="input">
                            <label for="name" class="form-label">Client's name:</label> <br>
                                <?php
                                echo '<input type="text" id="name" class="form-control" name="name"  value="' . $old_row['name'] . '" required>';
                                ?>
                            <div class="invalid-feedback">
                                    Please provide a valid name
                            </div>
                        </div>
                        <div class="input">
                            <label for="manager" class="form-label">Select manager:</label> <br>
                                <?php
                                // $sql = "SELECT id,fname, surname FROM MEMBER WHERE fk_ROLE_name = 'manager'";
                                $sql = "SELECT id, CONCAT(fname, ' ', surname) as name FROM MEMBER WHERE fk_ROLE_name = 'manager'";


                                $result = $conn->query($sql) or die($conn->error);

                                echo "<select name='fk_MANAGER_id' class='form-select'>";
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option ";
                                    if ($old_row['fk_MANAGER_id'] == $row['id']) {
                                        echo 'selected ';
                                    }
                                    echo "value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                                }
                                echo "</select>";
                                ?>
                        </div>
                        <div class="input">
                            <label for="additional" class="form-label">Additional info:</label> <br>
                            <?php
                            echo '<textarea name="additional_info" class="form-control" id="additional" cols="30" rows="5"';
                            if (isset($old_row['additional_info'])) {
                                echo '>' . $old_row['additional_info'] . '"</textarea>';
                            } else {
                                echo 'placeholder="Enter additional comments"></textarea>';
                            }
                            ?>
                        </div>                        
                        <input class="firstB" type="submit" value="Save changes" />                        
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
    <script src="../Scripts/Validation.js"></script>
</body>

</html>