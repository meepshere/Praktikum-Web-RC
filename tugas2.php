
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP5 Soal 2</title>
    <link rel="stylesheet" type="text/css" href="stylebaru.css">
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
        <div class>
            <br>
            <br>
            <br>
            <br>
            <h1 style="font-size: 37px;">TUGAS 2 </h1>
        </div>  
    </div>
    <footer> 
        Sayyid Haris © 2021
    </footer> 
</body>
</html>

<?php

if(isset($_POST['submit']))
	{
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
		$num3=$_POST['num3'];
        function sortData(&$daftarnya){
            sort($daftarnya);
        }
    
    
        $daftarKata = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat", $num1, $num2, $num3);
        echo "<br><br> <div class='hasil'> Sebelum sorting : <br>";
        $i = 0;
        foreach($daftarKata as $kata){
            if($i < count($daftarKata)-1){
                echo $kata.", ";
            }else{
                echo $kata;
            }
            $i++;
        }
    
        echo "<br><br> Setelah sorting : <br>";
        
        sortData($daftarKata);
    
        $i = 0;
        foreach($daftarKata as $kata){
            if($i < count($daftarKata)-1){
                echo $kata.", ";
            }else{
                echo $kata;
            }
            $i++;
        }

        echo "</div>";
	}
?>

