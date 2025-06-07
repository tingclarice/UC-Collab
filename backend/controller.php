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

// function untuk buka connection
// untuk login sudah terlanjur di halaman php mereka masing-masing
function my_ConnectDB() {
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
}

//  function untuk close connection
function my_closeDB($conn) {
    mysqli_close($conn);
}

// Get data
function readEvent() {
    $allData = array();
    $conn = my_ConnectDB();

    if($conn!=NULL) {
        $sql_query = "SELECT * from `events`";
        $result = mysqli_query($conn,$sql_query) or die(mysqli_error($conn));

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                // simpan data dari database ke dalam array
                $data["event_id"] = $row["event_id"];
                $data["event_name"] = $row["event_name"];
                $data["description"] = $row["description"];
                $data["location"] = $row["location"];
                $data["application_deadline"] = $row["application_deadline"];
                $data["poster_url"] = $row["poster_url"];
                $data["organizer_id"] = $row["organizer_id"];
                
                array_push($allData, $data);
            }
        }
    }
    return $allData;
}
?>