<!DOCTYPE html>
<html lang="en">
	<head>
        <?php include_once '../Includes/Connect.php'; ?>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>ViewUsersPage</title>
        <link rel="stylesheet" href="../styles.css?v=<?php echo time(); ?>">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	</head>
	<body>
        <nav>
            <img src="../Images/Logo.png" alt="logo">
            <ul>
                <li class="menuButton"><a href="./User.php">Back</a></li>
                <li><a>View users</a></li>
            </ul>
        </nav>
        </nav>
        <input type="text" id="searchBar" placeholder="Search...">
        <table class="table">
        <thead>
                <th>Name</th>
                <th>Surname</th>
                <th>Birth date</th>
                <th>Phone number</th>
                <th>Email</th>
                <th>Country</th>
                <th>City</th>
                <th>Sex</th>
                <th>Role</th>
                <th>Client</th>
                <th>Edit</th>
                <th>X</th>
            </thead>
            <tbody id="body">
                <?php
                        $sql = "SELECT MEMBER.id as id, fname, surname, birth_day, phone_number, country, email, city, SEX.name as 'sex', fk_ROLE_name, CLIENT.name as 'client' FROM MEMBER
                        JOIN SEX on MEMBER.sex = SEX.id_SEX
                        LEFT JOIN CLIENT on MEMBER.fk_CLIENT_id = CLIENT.id";

                        $result = $conn->query($sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                            $client = $row['client'] ? $row['client'] : '';
                            $editLink = "<button><a href='./EditUser.php?id=" . $row['id'] . "'>edit</a></button>";
                            $removeButton = "<img src='../Images/Remove.png' alt='remove' style='width:20px;height:auto;'>";
                            echo "<tr>
                                    <td>".$row['fname']."</td>
                                    <td>".$row['surname']."</td>
                                    <td>".$row['birth_day']."</td>
                                    <td>".$row['phone_number']."</td>
                                    <td>".$row['email']."</td>
                                    <td>".$row['country']."</td>
                                    <td>".$row['city']."</td>
                                    <td>".$row['sex']."</td>
                                    <td>".$row['fk_ROLE_name']."</td>
                                    <td>".$client."</td>
                                    <td>".$editLink."</td>
                                    <td>".$removeButton."</td>
                                 </tr>";
                        }
                ?>
            </tbody>
        </table>
        <script src="../Scripts/TableSearch.js"></script>
    </body>
</html>