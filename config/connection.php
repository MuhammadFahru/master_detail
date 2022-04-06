<?php
    // Settingan untuk koneksi ke database (sesuaikan dengan profile masing masing)
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'ik_web_master';

    $mysqli = mysqli_connect($host,$user,$pass,$db) or die ('Tidak Dapat Terhubung ke Database');
?>