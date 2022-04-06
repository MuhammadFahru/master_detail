<?php 

    include 'config/connection.php';

    // untuk mengambil value dari GET parameter dengan key id
    $id_master = @$_GET["id_master"];
    $id_detail = @$_GET["id_detail"];

    if (!empty($id_master)) {
        $sql = "DELETE FROM t_drh_master WHERE id_drh_master = $id_master";
        if($mysqli->query($sql)) {
            // Digunakan untuk mengarahkan (redirect) halaman ke index.php
            header('location: index.php');
        } else {
            echo 'Gagal hapus';
        }
    } else if (!empty($id_detail)) {
        $sql = "DELETE FROM t_drh_detail WHERE id_drh_detail = $id_detail";
        if($mysqli->query($sql)) {
            // Digunakan untuk mengarahkan (redirect) halaman ke index.php
            header('location: index.php');
        } else {
            echo 'Gagal hapus';
        }
    }

?>