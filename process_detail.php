<?php

    include 'config/connection.php';

    $id = @$_GET['id'];

    if (empty($id)) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Digunakan untuk memeriksa apakah ada request dalam bentuk POST yang dikirim ke halaman ini? (Halaman create.php)
            $id_master     = @$_POST['id_master'];
            $tahun         = @$_POST['tahun'];
            $perusahaan    = @$_POST['perusahaan'];
            $bidang        = @$_POST['bidang'];
            $keterangan    = @$_POST['keterangan'];
    
            // Untuk membuat SQL string untuk memasukan data ke tabel mahasiswa
            $sql = "INSERT INTO t_drh_detail VALUES (0, '$id_master', '$tahun', '$perusahaan', '$bidang', '$keterangan')";
    
            // Digunakan untuk eksekusi query ke SQL. Apabila error maka akan memunculkan pesan error nya
            $mysqli->query($sql) or die($mysqli->error);
    
            // Digunakan untuk mengarahkan (redirect) halaman ke index.php
            header('location: index.php');
        }
    } else if (!empty($id)) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Digunakan untuk memeriksa apakah ada request dalam bentuk POST yang dikirim ke halaman ini? (Halaman create.php)
            $id_master     = @$_POST['id_master'];
            $tahun         = @$_POST['tahun'];
            $perusahaan    = @$_POST['perusahaan'];
            $bidang        = @$_POST['bidang'];
            $keterangan    = @$_POST['keterangan'];
    
            // Digunakan untuk membuat SQL string untuk mengubah data pada tabel mahasiswa
            $sql = "UPDATE t_drh_detail SET
            id_drh_master = '$id_master',
            tahun = '$tahun',
            perusahaan = '$perusahaan',
            bidang = '$bidang', 
            keterangan = '$keterangan'
            WHERE id_drh_detail = $id";
    
            // Digunakan untuk eksekusi query ke SQL. Apabila error maka akan memunculkan pesan error nya
            $mysqli->query($sql) or die($mysqli->error);
    
            // Digunakan untuk mengarahkan (redirect) halaman ke index.php
            header('location: index.php');
        }
    }

?>