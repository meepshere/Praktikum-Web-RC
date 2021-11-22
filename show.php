<table  id="table">
    <thead>
    <tr>
        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo</th>
        <th>&nbsp&nbspNama</th>
        <th>&nbsp&nbspMessages</th>
        <th>&nbsp&nbspCP</th>
        <th>&nbsp&nbspRating Web</th>
    </tr>
    </thead>
    <?php
        include "conn.php";
        $hasil=mysqli_query($kon, "select * from pesan order by id asc");
        $no=0;
        while ($data = mysqli_fetch_array($hasil)):
            $no++;
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        
        <td><?php echo $data['nama']; ?></td>
        
        <td><?php echo $data['msgs']; ?></td>
       
        <td><?php echo $data['cp']; ?></td>
        
        <td><?php echo $data['rate']; ?></td>
        
        <td> <button type="button" name="edit" class="btn btn-danger btn-xs edit" onclick="update('<?php echo $data['id']; ?>')">Edit </button> </td>
        <td> <button type="button" name="delete" class="btn btn-danger btn-xs delete" id='<?php echo $data['id']; ?>'>Delete</button> </td>
    </tr>
    <?php endwhile;?>
</table>

<script>

</script>
