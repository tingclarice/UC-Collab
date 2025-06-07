<?php
    require_once("backend/controller.php");
    session_start();

    $conn = my_ConnectDB();

    if (isset($_GET['deleteid'])) {
        $deleteid=$_GET['deleteid'];

        $sql="DELETE FROM `organizers` WHERE organizer_id=$deleteid";
        $result=mysqli_query($conn, $sql);

        if($result){
            header("Location: logout.php?success=deleted");
            exit();
        } else {
            echo "<script type='text/javascript'>alert('Failed to delete account.')</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Organizer account has been deleted!')</script>";
    }
?>