<?php
include "conn.php";

$id=$_POST['id'];
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$prodi=$_POST['prodi'];
$angkatan=$_POST['angkatan'];

$sql="UPDATE pesan SET nama='$nim', msgs='$nama', cp='$prodi', rate='$angkatan' WHERE id='$id'";

$hasil=mysqli_query($kon,$sql);

?>