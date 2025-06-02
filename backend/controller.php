<?php
// function untuk connect ke database
function my_connectDB() {
    $host = 'localhost';
    $use = 'root';
    $pwd = "";
    $db = "uc-collab";

    $conn = mysqli_connect($host, $use, $pwd, $db) or die("Error connect to database");

    return $conn;
}

//  function untuk close connection
function my_closeDB($conn) {
    mysqli_close($conn);
}

//  function untuk read database data
function readGuestbook() {
    $allData = array();
    $conn = my_connectDB();

    if ($conn!=NULL) {
        $sql_query = "SELECT * FROM `guestbook`";
        $result = mysqli_query($conn, $sql_query) or die (mysqli_error($conn)); // die(mysqli_error($conn)) akan memutuskan koneksi
    
        if ($result-> num_rows > 0) {
            // fetch_assoc() akan mengambil data dari array
            // yang dikirim dari $result
            // masing2 array akan disimpan dalam row
            while ($row = $result -> fetch_assoc()) {
                // simpan data dari database ke dalam array
                // $data[] = array(
                //     'id' => $row['guestbook_id'],
                //     'name' => $row['name'],
                //     'email' => $row['email'],
                //     'message' => $row['message']
                // );

                // or you can do this too :
                $data['id'] = $row["guestbook_id"];
                $data['name'] = $row["name"];
                $data['email'] = $row["email"];
                $data['message'] = $row["message"];
                array_push($allData, $data); // simpan data ke dalam array allData
            }
        }
    }
    my_closeDB($conn);
    return $allData; // kembalikan data ke pemanggil
}

// function deleteGuestbook($guestbook_id) {
//     $conn = my_connectDB();
//     if ($guestbook_id > 0) {
//         $conn = my_connectDB();
//         $sql_query = "DELETE FROM `guestbook` WHERE `guestbook_id` = '$guestbook_id'";
//         $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
//         my_closeDB($conn);
//     }
//     return $result;
// }

    function getGuestbookWithID($guestbook_id) {
        $data = array();
        if ($guestbook_id > 0) {
            $conn = my_connectDB();
            $sql_query = "SELECT * FROM `guestbook` WHERE guestbook_id = ".$guestbook_id;
            $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

            if ($result -> num_rows > 0) {
                // fetch_assoc() only one row expected(?)
                while ($row = $result -> fetch_assoc()) {
                    $data['id'] = $row["guestbook_id"];
                    $data['name'] = $row["name"];
                    $data['email'] = $row["email"];
                    $data['message'] = $row["message"];
                }
            }

            my_closeDB($conn);
            return $data; // kembalikan data ke pemanggil
        }
    }

    function updateGuestbook($id, $name, $email, $message) {
        if ($id != "" && $name != "" && $email != "" && $message != "") {
            $conn = my_connectDB();
            $sql_query = "UPDATE `guestbook`
                            SET `name` = '$name', 
                                `email` = '$email', 
                                `message` = '$message' 
                            WHERE `guestbook_id` = $id;";
            $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
            my_closeDB($conn);
        }
        return $result;
    }
?>