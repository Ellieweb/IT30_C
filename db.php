<?php
$conn = mysqli_connect("localhost", "root", "", "LeanneDashboard");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());

}

echo "Database Connected Successfully!";