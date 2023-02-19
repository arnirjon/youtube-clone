<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "youtube";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

$selectdb = mysqli_select_db($con, $dbname);

// if($selectdb) {
// 	echo "Selected";
// }
// else {
// 	echo "not Selected";
// }

?>