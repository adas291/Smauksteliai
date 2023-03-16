<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ViewClientsPage</title>
    <!-- Links -->
    <link rel="stylesheet" href="../styles.css?v=<?php echo time(); ?>">
    <script src="../Data/Countries-cities/country-states.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <?php include_once '../Includes/Connect.php'; ?>
</head>

<body>
    <nav>
        <img src="../Images/Logo.png" alt="logo">
        <ul>
            <li class="menuButton"><a href="./Client.php">Back</a></li>
            <li><a>View Clients</a></li>
        </ul>
    </nav>
    <input type="text" id="searchBar" placeholder="Search...">
    <table>
        <thead>
            <th>Name</th>
            <th>Additional info</th>
            <th>Manager</th>
            <th>Edit</th>
            <th>X</th>
        </thead>
        <tbody id="body">
            <?php
            $sql = "SELECT CLIENT.id as 'id', CLIENT.name, CLIENT.additional_info, CONCAT(MEMBER.fname, ' ' ,MEMBER.surname) as 'manager' FROM CLIENT
                        JOIN MEMBER on MEMBER.id = CLIENT.fk_MANAGER_id";

            $result = $conn->query($sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr id="' . $row['id'] . '">' .
                    '<td>' . $row['name'] . '</td>' .
                    '<td>' . $row['additional_info'] . '</td>' .
                    '<td>' . $row['manager'] . '</td>' .
                    '<td><button type="button"><a href="./EditClient.php?id=' . $row['id'] . '">edit</a></button></td>' .
                    '<td><img src="../Images/Remove.png" alt="remove" style="width:20px;height:auto;"></td>' .
                    '</tr>';
            }
            ?>
        </tbody>
    </table>

    <!-- Scripts -->
    <script src="../Scripts/TableSearch.js"></script>
</body>

</html>