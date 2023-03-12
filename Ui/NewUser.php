<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NewUserPage</title>
    <link rel="stylesheet" href="style.css">
    <?php include_once 'Includes/Connect.php' ?>
</head>

<body>
    <nav>
        <ul>
            <li><a href="Home.html">Home</a></li>
            <li><a href="Project.html">Project</a></li>
            <li class="current"><a href="User.html">User</a></li>
            <li><a href="Settings.html">Settings</a></li>
        </ul>
    </nav>
    <form method="POST" action="Includes/NewUserAdd.php">
        <label for="fname">User first name:</label> <br>
        <input type="text" id="fname" name="fname" placeholder="Enter users first name" />
        <br><br>
        <label for="lname">User last name:</label> <br>
        <input type="text" id="lname" name="lname" placeholder="Enter users last name" />
        <br><br>
        <label for="sex">Select sex:</label> <br>
        <?php
        $sql = "SELECT id_SEX, name FROM sex";

        $result = $conn->query($sql) or die($conn->error);

        echo "<select name='sex'>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['id_SEX'] . "'>" . $row['name'] . "</option>";
        }
        echo "</select>";
        ?>
        <br><br>
        <label for="birthdate">Users birthday:</label> <br>
        <input type="date" id="birthdate" name="bday">
        <br><br>
        <label for="pnumber">Phone number:</label> <br>
        <input type="tel" id="pnumber" value="+370" name="pnumber" />
        <br><br>
        <label for="email">Email:</label> <br>
        <input type="text" id="email" placeholder="example@email.com" name="email" />
        <br><br>
        <label for="country">Country:</label> <br>
        <input type="text" id="country" placeholder="Enter users country" name="country" />
        <br><br>
        <label for="city">City:</label> <br>
        <input type="text" id="city" placeholder="Enter users city" name="city" />
        <br><br>
        <label for="role">Role:</label> <br>
        <?php
        $sql = "SELECT name FROM role";

        $result = $conn->query($sql) or die($conn->error);

        echo "<select name='role'>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
        }
        echo "</select>";
        ?>
        <br><br>
        <label for="client">Client:</label> <br>
        <?php
        $sql = "SELECT id, name FROM client";

        $result = $conn->query($sql) or die($conn->error);

        echo "<select name='client'>";
        echo "<option value='-'>-</option>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
        }
        echo "</select>";
        ?>
        <br><br>
        <input class="firstB" type="submit" value="Create user" />
    </form>

</body>

</html>