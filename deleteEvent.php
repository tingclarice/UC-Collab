<?php
    require_once("backend/controller.php");
    session_start();

    $conn = my_ConnectDB();

    if (isset($_GET['deleteid'])) {
        $deleteid=$_GET['deleteid'];

        $sql="DELETE FROM `events` WHERE event_id=$deleteid";
        $result=mysqli_query($conn, $sql);

        if($result){
            header("Location: dashboard.php?success=deleted");
            exit();
        } else {
            echo "<script type='text/javascript'>alert('Failed to delete event.')</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('No event ID provided.')</script>";
    }
?>