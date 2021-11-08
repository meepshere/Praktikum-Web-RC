
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP5 Soal 1</title>
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
            <h1 style="font-size: 37px;">TUGAS 1 </h1>
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
        function tambah($x, $y){
            return $x+$y;
        }
        function kurang($x, $y){
            return $x-$y;
        }
        function kali($x, $y){
            return $x*$y;
        }
        function bagi($x, $y){
            return $x/$y;
        }
        function sisa($x, $y){
            return $x%$y;
        }
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
			if(isset($_POST['submit']))
			{
                $resultPlus=tambah($num1,$num2);
                $resultMinus=kurang($num1,$num2);
                $resultTimes=kali($num1,$num2);
                $resultDivide=bagi($num1,$num2);
                $resultModulo=sisa($num1,$num2);
                echo "<div class='hasil'", "<br><br> HASIL OPERASI ",$num1," dan ",$num2," <div> <br>";
                echo "<div class='hasil'", "<br> Hasil Penjumlahan : ",$resultPlus,"<div>";
                echo "Hasil Pengurangan : ",$resultMinus;
                echo "<br> Hasil Perkalian : ",$resultTimes;
                echo "<br> Hasil Pembagian : ",$resultDivide;
                echo "<br> Hasil Modulo : ",$resultModulo;
                
            }
		else
		{
			$result="Please enter numeric values only";
		}
	}
?>

