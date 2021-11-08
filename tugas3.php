
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP5 Soal 3</title>
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
            <h1 style="font-size: 37px;">TUGAS 3 </h1>
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
        function prima($n){
            if($n!=1){
                for($i=2;$i<$n/2;$i++){
                    if($n % $i==0){
                            return 0;
                        }
                }
                return 1;
            }
            else{
                return 0;
            }
        }
    
        echo "<br><br> <div class='hasil'> Daftar bilangan prima (1-50) : <br>";

    
        for($i=1;$i<=50;$i++){
            $a=prima($i);
            if($a==1){
                echo $i, "  ";
            }
        }
    
        
        $tes = prima(3);

        echo "<br><br> </div>";
	}
?>

