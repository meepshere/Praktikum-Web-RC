<table  id="table">
    <thead>
    <tr>
        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo</th>
        <th>&nbsp&nbspNIM</th>
        <th>&nbsp&nbspNama</th>
        <th>&nbsp&nbspProdi</th>
        <th>&nbsp&nbspAngkatan</th>
    </tr>
    </thead>
    <?php
        include "conn.php";
        $hasil=mysqli_query($kon, "select * from mahasiswa order by nim asc");
        $no=0;
        while ($data = mysqli_fetch_array($hasil)):
            $no++;
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        
        <td><?php echo $data['nim']; ?></td>
        
        <td><?php echo $data['nama']; ?></td>
       
        <td><?php echo $data['prodi']; ?></td>
        
        <td><?php echo $data['angkatan']; ?></td>
        
        <td> <button type="button" name="edit" class="btn btn-danger btn-xs edit" onclick="update('<?php echo $data['id']; ?>')">Edit </button> </td>
        <td> <button type="button" name="delete" class="btn btn-danger btn-xs delete" id='<?php echo $data['id']; ?>'>Delete</button> </td>
    </tr>
    <?php endwhile;?>
</table>

<script>

</script>
