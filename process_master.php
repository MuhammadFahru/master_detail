<?php

    include 'config/connection.php';

    $id = @$_GET['id'];

    if (empty($id)) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Digunakan untuk memeriksa apakah ada request dalam bentuk POST yang dikirim ke halaman ini? (Halaman create.php)
            $nama        = @$_POST['nama'];
            $alamat      = @$_POST['alamat'];
            $telp        = @$_POST['telp'];
            $email       = @$_POST['email'];
            $pendidikan  = @$_POST['pendidikan'];
    
            // Untuk membuat SQL string untuk memasukan data ke tabel mahasiswa
            $sql = "INSERT INTO t_drh_master VALUES (0, '$nama', '$alamat', '$telp', '$email', '$pendidikan')";
    
            // Digunakan untuk eksekusi query ke SQL. Apabila error maka akan memunculkan pesan error nya
            $mysqli->query($sql) or die($mysqli->error);
    
            // Digunakan untuk mengarahkan (redirect) halaman ke index.php
            header('location: index.php');
        }
    } else if (!empty($id)) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Digunakan untuk memeriksa apakah ada request dalam bentuk POST yang dikirim ke halaman ini? (Halaman create.php)
            $nama        = @$_POST['nama'];
            $alamat      = @$_POST['alamat'];
            $telp        = @$_POST['telp'];
            $email       = @$_POST['email'];
            $pendidikan  = @$_POST['pendidikan'];
    
            // Digunakan untuk membuat SQL string untuk mengubah data pada tabel mahasiswa
            $sql = "UPDATE t_drh_master SET
            nama = '$nama',
            alamat = '$alamat',
            telp = '$telp', 
            email = '$email',
            pendidikan = '$pendidikan'
            WHERE id_drh_master = $id";
    
            // Digunakan untuk eksekusi query ke SQL. Apabila error maka akan memunculkan pesan error nya
            $mysqli->query($sql) or die($mysqli->error);
    
            // Digunakan untuk mengarahkan (redirect) halaman ke index.php
            header('location: index.php');
        }
    }

?>