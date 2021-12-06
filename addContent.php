<?php
    session_start();
    if (!isset($_SESSION['userID'])){
        header("Location: index.php");
        die();
    }
?>

<div class="tengahSendiri">
    <br>
    <h1>Add Contents</h1>
    <form id="form" onsubmit="tambahKonten()">
    <br>
        <input type="text" name="judul" id="judul" placeholder="Judul konten"><br>
        <br>
        <!-- <input type="text" name="isi" id="isi" placeholder="Judul konten"><br>
        <br> -->
        <textarea rows = "5" cols = "60" type="text" name="isi" id="isi">
            Isi konten..
        </textarea><br><br>
        <input type="submit" value="submit">
    </form>
</div>