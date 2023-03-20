<?php
    include '../Includes/Connect.php';
    $member_id = $_GET['id'];
    $role = $_GET['role'];

    if($role == "teacher")
    {
        $sql = "SELECT * 
        FROM TEACHER
        LEFT JOIN PROJECT_TEACHER
        ON TEACHER.id = PROJECT_TEACHER.fk_TEACHER_id 
        WHERE fk_MEMBER_id = '$member_id'";

        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);

        if($row['fk_TEACHER_id'] == NULL)
        {
            $conn->begin_transaction();

            $query1 = "DELETE FROM TEACHER WHERE fk_MEMBER_id = '$member_id'";
            $result1 = $conn->query($query1);
        
        
            $query2 = "DELETE FROM MEMBER WHERE id = '$member_id'";
            $result2 = $conn->query($query2);
        
        
            if ($result1 && $result2) {
        
            $conn->commit();
            } else {
        
            $conn->rollback();
            echo "Error: " . $conn->error;
            }
        
            $conn->close();
            header("Location: ../User/ViewUsers.php?status=RemoveSuccess");
        }

        else{
            header("Location: ../User/ViewUsers.php?status=UserInUse");
        }
    }

    else if($role == "manager")
    {
        $sql = "SELECT MEMBER.id, CLIENT.fk_MANAGER_id as client_manager_id, PROJECT.fk_MANAGER_id  
        FROM MEMBER
        LEFT JOIN CLIENT
        ON MEMBER.id = CLIENT.fk_MANAGER_id 
        LEFT JOIN PROJECT
        ON MEMBER.id = PROJECT.fk_MANAGER_id
        WHERE MEMBER.id = '$member_id'";

        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);

        if($row['client_manager_id'] == NULL && $row['fk_MANAGER_id'] == NULL)
        {
            $sql = "DELETE FROM MEMBER WHERE id = '$member_id'";
           
            $conn->query($sql) or die($conn->error);

            $conn->close();
            header("Location: ../User/ViewUsers.php?status=RemoveSuccess");
        }

        else{
            header("Location: ../User/ViewUsers.php?status=UserInUse");
        }
    }

    else{
        $sql = "DELETE FROM MEMBER WHERE id = '$member_id'";
           
            $conn->query($sql) or die($conn->error);

            $conn->close();
            header("Location: ../User/ViewUsers.php?status=RemoveSuccess");
    }
?>