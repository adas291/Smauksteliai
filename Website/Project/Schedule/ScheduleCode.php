<?php
    include "../../Includes/Connect.php";
    function generateScheduleRows($projectId) {
        $query = "SELECT * FROM `SCHEDULE` WHERE fk_PROJECT_id=$projectId;";

        global $conn;

        $result =  $conn->query($query);

        for($i = 1; $i <= 5; $i++) {
            $scheduleString = "";

            mysqli_data_seek($result, 0);

            while($row = mysqli_fetch_assoc($result)) {
                if($i == $row['day_of_week']) {
                    $scheduleString .= "{$row['start_time']} - {$row['end_time']}\n";
                }                        
            }
            echo "<td> <span style='color: red'> $scheduleString </span> </td>";
        }
    }

?>