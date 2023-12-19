<?php
$config['host'] = "localhost";
$config['username'] = "root";
$config['password'] = "";
$config['dbname'] = "lab_5db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// else{ echo"koneksi berhasil";}
?>
