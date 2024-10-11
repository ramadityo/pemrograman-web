<?php

$host = "localhost:3306";
$username = "root";
$password = "";
$db = "karyawan";

// $port = 3306; # OPSIONAL


// $koneksi = new mysqli($servername, $username, $password, $dbname);
// $koneksi = mysqli_connect($host, $username, $password, $db);

// if(!$koneksi){
//     die("Koneksi gagal: " . mysqli_connect_error());
// }

mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $koneksi = mysqli_connect($host, $username, $password, $db);
} catch (mysqli_sql_exception $e) {
    echo $e->getMessage();
}

?>