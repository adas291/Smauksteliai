<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EditClientPage</title>
    <!-- Links -->
    <link rel="stylesheet" href="../styles.css?v=<?php echo time(); ?>">
    <?php

    include_once '../Includes/Connect.php';
    $query = "SELECT * FROM CLIENT WHERE ID = " . $_GET['id'];
    $tmp = $conn->query($query);
    $old_row = mysqli_fetch_array($tmp);

    ?>
</head>

<body>
    <nav>
        <img src="../Images/Logo.png" alt="logo">
        <ul>
            <li class="menuButton"><a href="./ViewClients.php">Back</a></li>
            <li><a>Edit client</a></li>
        </ul>
    </nav>
    <form method="post" action="SaveEditedClient.php?id=<?php echo $_GET['id'];  ?>">
        <label for="name">Client's name:</label> <br>
        <?php

        echo '<input type="text" id="name" name="name"  value="' . $old_row['name'] . '"';
        ?>
        <br><br>
        <label for="additional">Additional info:</label> <br>

        <?php
        echo '<textarea name="additional_info" id="additional" cols="30" rows="5"';
        if (isset($old_row['additional_info'])) {
            echo '>' . $old_row['additional_info'] . '"</textarea>';
        } else {
            echo 'placeholder="Enter additional comments"></textarea>';
        }
        ?>
        <br><br>
        <label for="manager">Select manager:</label> <br>
        <?php
        // $sql = "SELECT id,fname, surname FROM MEMBER WHERE fk_ROLE_name = 'manager'";
        $sql = "SELECT id, CONCAT(fname, ' ', surname) as name FROM MEMBER WHERE fk_ROLE_name = 'manager'";


        $result = $conn->query($sql) or die($conn->error);

        echo "<select name='fk_MANAGER_id'>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option ";
            if ($old_row['fk_MANAGER_id'] == $row['id']) {
                echo 'selected ';
            }
            echo "value='" . $row['id'] . "'>" . $row['name'] . "</option>";
        }
        echo "</select>";
        ?>
        <br><br>
        <input class="firstB" type="submit" value="Save changes" />
    </form>

    <!-- Scripts -->
</body>

</html>