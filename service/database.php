<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "learnphp";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if ($db->connect_error) {
    echo "Koneksi Database Eror";
    die("Error");
}

?>