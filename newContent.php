<?php
    include "app/db/Koneksi.php";
    $db = new Koneksi();
    $conn = $db->connect();

    $conn->query("insert into post(judul,isi) values('".$_POST['judul']."','".$_POST['isi']."')");

    header("Location: index.php");
?>