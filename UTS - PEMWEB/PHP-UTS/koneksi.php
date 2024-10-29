<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "portfolio";
$port = 3400;
$conn = "";

try {
    $conn = mysqli_connect($host, $username, $password, $db_name, $port);
} catch(mysqli_sql_exception) {
    echo "Koneksi gagal";
}

?>