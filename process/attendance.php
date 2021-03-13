<?php
require('../connection/config.php');

if(isset($_GET['developer_id']))
{
    $id = $_GET['developer_id'];
    $status = $_GET['status'];

    if($status==1)
    {
        $year_id = date("Y");
        $month_id = date("m");
        $day_id = date("d");
    
        $query = "INSERT INTO tbl_attendance(developers_id,year_id,month_id,day_id,status) 
        VALUES('$id','$year_id','$month_id','$day_id',1)";
        $result = mysqli_query($conn,$query);
        if($result)
        {
            echo header('Location: ../add-attendance.php');
        }
        else 
        {
            echo "Attendance couldn't done successfully.";
        }
    }
    else 
    {
        $delete_query = "DELETE FROM tbl_attendance WHERE developers_id='$id'";
        $delete_result = mysqli_query($conn,$delete_query);
        if($delete_result)
        {
            echo header('Location: ../add-attendance.php');
        }
        else 
        {
            echo "Attendance couldn't done successfully.";
        }
    }

}

?>