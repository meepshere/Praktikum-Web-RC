<?php
        
include "conn.php";

if(isset($_GET["id"]))
{
    
    $id=$_GET['id'];
    
    $sql=$kon->query("select * from pesan where id='$id'");
    while($row=$sql->fetch_object()){
        $nim=$row->nama;
        $nama=$row->msgs;
        $prodi=$row->cp;
        $angkatan=$row->rate;
    }
}

?>
    
   <form action="" method="post" id="form_edit">
       <h2> Edit Pesan </h2>
        <input type="hidden" name="id" id="id0" value = '<?php echo $id; ?>'>
        <br>
        <label>Nama</label>
        <input type="text" name="nim" id="nim1" value= '<?php echo $nim; ?>'>
        <br>
        <label>Messages</label>
        <input type="text" name="nama" id="nama2" value= '<?php echo $nama; ?>'>
        <br>
        <label>Contact Person</label>
        <input type="text" name="prodi" id="prodi3" value= '<?php echo $prodi; ?>'>
        <br>
        <label>Rating Web</label>
        <input type="number" name="angkatan" id="angkatan4" value= '<?php echo $angkatan; ?>'>
        <br>
        <br>
        <input type="submit" name="submit" id="btn-edit" class="button" value="Submit"/>
    </form>
