<?php
// Niargampang aku manggil
$con = mysqli_connect("localhost","root","","db_nukwan");

// Check Connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>