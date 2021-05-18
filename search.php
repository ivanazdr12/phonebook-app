<?php
include('core/init.php');
include('libraries/Database.php');
?>
    <style>
        <?php include 'css/foundation.css'; include 'css/custom.css'; ?>
    </style>

<?php

$search = $_POST['search'];

//Development connection
//$servername = "localhost";
//$username = "root";
//$password = "";
//$db = "phonebook";

//Remote Database Connection
$servername = "remotemysql.com";
$username = "RM6oPbDSV3";
$password = "vrNrD3SeEl";
$db = "RM6oPbDSV3";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT * FROM contacts WHERE first_name LIKE '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
    while($row = $result->fetch_assoc() ){
        $message = $row["first_name"] . " " . $row["last_name"] . " " . $row['phone'] . " " . $row['email'];
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo file_get_contents("index.php");
    }

} else {
    $message = "0 records exist with that first name";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo file_get_contents("index.php");
}

$conn->close();

?>
