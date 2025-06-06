<?php
$host = 'localhost';
$use = 'root';
$pwd = "";
$db = "uc-collab";

$conn = mysqli_connect($host, $use, $pwd, $db);

if($conn->connect_error) {
    echo "<script type='text/javascript'>alert('Connection Failed!');</script>";
    die("Connection failed: " . $conn->connect_error);
}

return $conn;

//  function untuk close connection
function my_closeDB($conn) {
    mysqli_close($conn);
}

?>