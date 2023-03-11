<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ViewProjectsPage</title>
    <!-- Links -->
    <link rel="stylesheet" href="../styles.css?v=<?php echo time(); ?>">
    <?php include '../Includes/Connect.php' ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body>
    <nav>
        <img src="../Images/Logo.png" alt="logo">
        <ul>
            <li class="menuButton"><a href="./Project.php">Back</a></li>
            <li><a>View projects</a></li>
        </ul>
    </nav>
    <input type="text" id="searchBar" placeholder="Search...">
    <table>
        <thead>
            <tr>
                <th>Project title</th>
                <th>State</th>
                <th>City</th>
                <th>Manager</th>
                <th></th>
            </tr>
            <tbody id="body">
                <?php
                    $query = "SELECT PROJECT.id as 'id', PROJECT.title, PROJECT_STATE.name as 'state', PROJECT.city, CONCAT(MEMBER.fname, ' ' ,MEMBER.surname) as 'manager' 
                        FROM PROJECT 
                        JOIN MEMBER ON PROJECT.fk_MANAGER_id = MEMBER.id
                        JOIN PROJECT_STATE ON PROJECT.project_state = PROJECT_STATE.id_PROJECT_STATE;";
                        

                    $result = $conn->query($query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr id="' . $row['id'] . '">' . 
                        '<td>' . $row['title'] . '</td><td>' .  $row['state']. '</td><td>' . $row['city'] . '</td><td>' . $row['manager'] . '</td><td><a href="./EditProject.php">edit</a></td></tr>';
                    }
                ?>
            </tbody>
    </table>

    <!-- Scripts -->
    <script src="../Scripts/TableSearch.js"></script>
</body>

</html>