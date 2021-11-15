<?php include('mg6OOP.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 6 | 119140190</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <header>
        <img src="itera.png" id="logoitera">
        <b>
            Institut Teknologi Sumatera
        </b>
    </header>
    
    <nav>
        <div class="link">
            <li><a href="" id="linkPertama">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">About</a></li>
        </div>
    </nav>
    
    <div class="all-contents">
        <br>
        <br>
        <br>
        <div class="main-content">
            <img src="itera.png" id="potoMe">
            <div class="biodata">
                <h1 id="bioTitle">Masukkan Input Belanja</h1>
               
                <form action="" method="post">
                    <br>
                    <table class="tabel">
                        <tr>
                            <td>Buah</td>
                            <td>Harga/kg</td>
                            <td>Jumlah/kg</td>
                        </tr>
                        <tr>
                            <td>Mangga</td>
                            <td>15000</td>
                            <td><input id="mangga" type="number" name="mangga" value="0" min="0" required></td>
                        </tr>
                        <tr>
                            <td>Jambu</td>
                            <td>13000</td>
                            <td><input id="jambu" type="number" name="jambu" value="0" min="0" required></td>
                        </tr>
                        <tr>
                            <td>Salak</td>
                            <td>10000</td>
                            <td><input id="salak" type="number" name="salak" value="0" min="0" required></td>
                        </tr>
                        <tr>
                            <td><br><button type="submit" name="submit" onsubmit="totalSemua()" >submit</button></td>
                        </tr>
                    </table>
                </form>
            </div>
            
        </div>
        <div class="newss">
            <div class>
                <div class="berita1">
                    <div id="nantiDiisi">

                        </div>
                        <?php
                        
                            if(isset($_POST['submit']))
                            {
                                $mangga=$_POST['mangga'];
                                $jambu=$_POST['jambu'];
                                $salak=$_POST['salak'];

                                
                                $tes1 = new Mangga($mangga);
                                $tes2 = new Jambu($jambu);
                                $tes3 = new Salak($salak);
                                $semuanya = $tes1->getBanyak()*15000 + $tes2->getBanyak()*13000 + $tes3->getBanyak()*10000;
                                $biotitle = "bioTitle";
                                echo '<h1 id="'.$biotitle.'">Rincian Belanja <br> </h1>';
                                $tes = $tes1->getBanyak()*15000;
                                echo "<br><p>Harga total {$tes1->getBanyak()} Mangga : {$tes}</p>";
                                $tes = $tes2->getBanyak()*13000;
                                echo "<p>Harga total {$tes2->getBanyak()} Jambu : {$tes}</p>";
                                $tes = $tes3->getBanyak()*10000;
                                echo "<p>Harga total {$tes3->getBanyak()} Salak : {$tes}</p>";
                        ?>
                        <script>
                            function totalSemua(){
                                var banyakMangga = document.getElementById("mangga").value;
                                var banyakJambu = document.getElementById("jambu").value;
                                var banyakSalak = document.getElementById("salak").value;
                                
                                let totalHargaSemua = banyakMangga + banyakJambu + banyakSalak;

                                isinya = "<p> Banyak mangga yang dibeli : " + totalHargaSemua + "</p>";

                                var isiPrint = document.getElementByID("nantiDiisi");
                                isiPrint.innerHTML = isinya;
                            }
                        </script>

                        <?php
                            echo "<br> <br> <h2>TOTAL HARGA KESELURUHAN : {$semuanya} <h2>";}
                        ?>
                    </div>
            </div>
        </div> 
    </div>
    <footer> 
        Sayyid Haris © 2021
    </footer> 
</body>
</html>