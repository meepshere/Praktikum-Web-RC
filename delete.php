<?php
include "conn.php";

if(isset($_POST["id"]))
{
    $sql="DELETE FROM pesan WHERE id = '".$_POST["id"]."'";

    $hasil=mysqli_query($kon,$sql);
    if($hasil)
    {
        echo 'Data Deleted';
    }
}
?>