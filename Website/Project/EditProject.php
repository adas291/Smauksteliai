<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../Includes/Connect.php';
    
    $query = "SELECT * FROM PROJECT WHERE id = " . $_GET['id'];
    $result = $conn->query($query);
    $old_row = $result->fetch_assoc();
    ?>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EditProjectPage</title>
    <link rel="stylesheet" href="../styles.css?v=<?php echo time(); ?>">
</head>

<body>
    <nav>
        <img src="../Images/Logo.png" alt="logo">
        <ul>
            <li class="menuButton"><a href="./ViewProjects.php">Back</a></li>
            <li><a>Edit project</a></li>
        </ul>
    </nav>
    <form action="SaveEditedProject.php?id=<?php echo $_GET['id']; ?>" method="post">
        <label for="pname">Project's name:</label> <br>
        <input name="title" type="text" id="pname" value="<?php echo $old_row['title'] ?>" />
        <br>
        <br>
        <label for="subject">Subject: </label>
        <br>
        <?php

        $sql = "SELECT id, name FROM QUALIFICATION ";
        $result = $conn->query($sql) or die($conn->error);
        echo '<select  name="fk_QUALIFICATION_id">';
        while ($tmp_row = mysqli_fetch_array($result)) {

            echo '<option ';
            if ($tmp_row['id'] == $old_row['fk_QUALIFICATION_id']) {
                echo "selected";
            }
            echo ' value="' . $tmp_row['id'] . '">' . $tmp_row['name'] . "</option>";
        }
        echo "</select>";

        ?>
        <br><br>
        <label for="">Assign manager:</label> <br>
        <?php
        $sql = "SELECT id, fname, surname FROM MEMBER WHERE `fk_ROLE_name` = 'manager'";
        $result = $conn->query($sql) or die($conn->error);

        echo '<select name="fk_MANAGER_id">';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option ';
            if ($row['id'] == $old_row['fk_MANAGER_id']) {
                echo "selected ";
            }
            echo  'value="' . $row['id'] . '">' . $row['fname'] . $row['surname'] .
                "</option>";
        }

        echo "</select>";

        ?>
        <br><br>
        <label for="">Teaching material: </label> <br>
        <?php

        $sql = "SELECT * FROM TEACHING_MATERIAL";
        $result = $conn->query($sql) or die($conn->error);

        echo "<select name='fk_TEACHING_MATERIAL_id'>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option ";
            if ($old_row['fk_TEACHING_MATERIAL_id'] == $row['id'])
                echo " selected ";
            echo "value=" . $row["id"] . ">" . $row['title'] . "</option>";
        }

        echo "</select>";
        ?>
        <br><br>
        <label for="city">City:</label> <br>
        <!-- <input type="text" id="city" name="city" placeholder="Enter city" /> -->

        <select id="city" name="city">
            <option value="">Select city</option>
            <option value="01">Akmen?? District Municipality</option>
            <option value="02">Alytus City Municipality</option>
            <option value="AL">Alytus County</option>
            <option value="03">Alytus District Municipality</option>
            <option value="05">Bir??tonas Municipality</option>
            <option value="06">Bir??ai District Municipality</option>
            <option value="07">Druskininkai municipality</option>
            <option value="08">Elektr??nai municipality</option>
            <option value="09">Ignalina District Municipality</option>
            <option value="10">Jonava District Municipality</option>
            <option value="11">Joni??kis District Municipality</option>
            <option value="12">Jurbarkas District Municipality</option>
            <option value="13">Kai??iadorys District Municipality</option>
            <option value="14">Kalvarija municipality</option>
            <option value="15">Kaunas City Municipality</option>
            <option value="KU">Kaunas County</option>
            <option value="16">Kaunas District Municipality</option>
            <option value="17">Kazl?? R??da municipality</option>
            <option value="18">K??dainiai District Municipality</option>
            <option value="19">Kelm?? District Municipality</option>
            <option value="20">Klaipeda City Municipality</option>
            <option value="KL">Klaip??da County</option>
            <option value="21">Klaip??da District Municipality</option>
            <option value="22">Kretinga District Municipality</option>
            <option value="23">Kupi??kis District Municipality</option>
            <option value="24">Lazdijai District Municipality</option>
            <option value="MR">Marijampol?? County</option>
            <option value="25">Marijampol?? Municipality</option>
            <option value="26">Ma??eikiai District Municipality</option>
            <option value="27">Mol??tai District Municipality</option>
            <option value="28">Neringa Municipality</option>
            <option value="29">Pag??giai municipality</option>
            <option value="30">Pakruojis District Municipality</option>
            <option value="31">Palanga City Municipality</option>
            <option value="32">Panev????ys City Municipality</option>
            <option value="PN">Panev????ys County</option>
            <option value="33">Panev????ys District Municipality</option>
            <option value="34">Pasvalys District Municipality</option>
            <option value="35">Plung?? District Municipality</option>
            <option value="36">Prienai District Municipality</option>
            <option value="37">Radvili??kis District Municipality</option>
            <option value="38">Raseiniai District Municipality</option>
            <option value="39">Rietavas municipality</option>
            <option value="40">Roki??kis District Municipality</option>
            <option value="41">??akiai District Municipality</option>
            <option value="42">??al??ininkai District Municipality</option>
            <option value="43">??iauliai City Municipality</option>
            <option value="SA">??iauliai County</option>
            <option value="44">??iauliai District Municipality</option>
            <option value="45">??ilal?? District Municipality</option>
            <option value="46">??ilut?? District Municipality</option>
            <option value="47">??irvintos District Municipality</option>
            <option value="48">Skuodas District Municipality</option>
            <option value="49">??ven??ionys District Municipality</option>
            <option value="TA">Taurag?? County</option>
            <option value="50">Taurag?? District Municipality</option>
            <option value="TE">Tel??iai County</option>
            <option value="51">Tel??iai District Municipality</option>
            <option value="52">Trakai District Municipality</option>
            <option value="53">Ukmerg?? District Municipality</option>
            <option value="UT">Utena County</option>
            <option value="54">Utena District Municipality</option>
            <option value="55">Var??na District Municipality</option>
            <option value="56">Vilkavi??kis District Municipality</option>
            <option value="57">Vilnius City Municipality</option>
            <option value="VL">Vilnius County</option>
            <option value="58">Vilnius District Municipality</option>
            <option value="59">Visaginas Municipality</option>
            <option value="60">Zarasai District Municipality</option>
        </select>
        <br><br>
        <label for="">Additional comments</label>
        <br>

        <textarea name="additional_info" id="comments" cols="30" rows="5"><?php echo $old_row['additional_info'] ?></textarea>
        <!-- <input type="text" rows="4" size="30" name="comments" /> -->
        <br><br>
        <label for="">Start date</label>
        <?php

        echo '<input type="date" name="start_date"';
        if ($old_row['start_date'] != null) {
            echo 'value="' . $old_row['start_date'] . '"';
        }
        echo '>'
        ?>

        <br><br>

        <label for="">End date</label>
        <?php
        echo '<input type="date" name="end_date"';
        if ($old_row['end_date'] != null) {
            echo 'value="' . $old_row['end_date'] . '"';
        }
        echo '>'
        ?>
        <br><br>

        <label for="">Academic hours per project</label>
        <?php
        echo '<input type="number" name="academic_hours_per_project"';
        if ($old_row['academic_hours_per_project'] != null) {
            echo 'value="' . $old_row['academic_hours_per_project'] . '"';
        }
        echo ">"
        ?>
        <br><br>

        <label for="">Academic hours per project</label>
        <?php
        echo '<input type="number" name="academic_hours_per_session"';
        if ($old_row['academic_hours_per_project'] != null) {
            echo 'value="' . $old_row['academic_hours_per_session'] . '"';
        }
        echo ">"
        ?>
        <br><br>


        <label for="">Project state</label>
        <select name="project_state" >
            <?php
            $query = "SELECT * FROM PROJECT_STATE";
            $result = $conn->query($query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<option ';
                if($old_row['project_state'] == $row['id']) {
                    echo 'selected ';
                }
                echo 'value="' . $row['id'] . '">' . $row['name'] . '</option>';
            }
            ?>
        </select>
        <br><br>

        <label for="">Classroom</label>
        <select name="fk_ROOM_id" >
            <?php
            $query = "SELECT * FROM ROOM";
            $result = $conn->query($query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<option ';
                if($old_row['fk_ROOM_id'] == $row['id'])
                    echo 'selected ';
                echo 'value="' . $row['id'] . '">' . $row['title'] . '</option>';
            }
            ?>
        </select>
        <br>
        <input class="firstB" type="submit" value="Save changes" />


        <label for="">Academic group name</label>
        <input type="checkbox">
    </form>

    <!-- Scripts -->
    </body>
</body>

</html>