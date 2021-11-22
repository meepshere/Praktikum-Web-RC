<?php
        
include "conn.php";

if(isset($_GET["id"]))
{
    
    $id=$_GET['id'];
    
    $sql=$kon->query("select * from mahasiswa where id='$id'");
    while($row=$sql->fetch_object()){
        $nim=$row->nim;
        $nama=$row->nama;
        $prodi=$row->prodi;
        $angkatan=$row->angkatan;
    }
}

?>
    
   <form action="" method="post" id="form_edit">
       <h2> Edit Data </h2>
        <input type="hidden" name="id" id="id0" value = '<?php echo $id; ?>'>
        <br>
        <label>NIM</label>
        <input type="number" name="nim" id="nim1" value= '<?php echo $nim; ?>'>
        <br>
        <label>Nama</label>
        <input type="text" name="nama" id="nama2" value= '<?php echo $nama; ?>'>
        <br>
        <label>Prodi &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
        <select name="prodi" id="prodi3">
            <option value="IF">Informatika</option>
            <option value="EL">Elektro</option>
        </select>
        <br>
        <label>Angkatan  &nbsp:</label>
        <select name="angkatan" id="angkatan4">
            <option value="2019">2019</option>
            <option value="2020">2020</option>
        </select>
        <br>
        <br>
        <input type="submit" name="submit" id="btn-edit" class="button" value="Submit"/>
    </form>
