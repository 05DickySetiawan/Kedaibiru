<?php 
    $hostname = 'localhost';
    $username = 'root';
    $paswword = '';
    $dbname   = 'db_kedaibiru';

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke database');
?>