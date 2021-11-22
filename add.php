<?php
include "conn.php";

$nim=$_POST['nim'];
$nama=$_POST['nama'];
$prodi=$_POST['prodi'];
$angkatan=$_POST['angkatan'];

$sql="insert into pesan (nama,msgs,cp,rate) values('$nim', '$nama', '$prodi', '$angkatan')";

$hasil=mysqli_query($kon,$sql);

?>