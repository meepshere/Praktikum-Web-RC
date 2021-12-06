<?php
    session_start();
    if (!isset($_SESSION['userID'])){
        header("Location: index.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 2</title>
    <link rel="stylesheet" type="text/css" href="assets/style2.css">
</head>
<body>
    <header>
        <img src="assets/pic/itera.png" id="logoitera">
        <b>
            Institut Teknologi Sumatera
        </b>
    </header>
    
    <nav> 
        <div class="link">
            <li><a href="home.php" id="linkPertama">Home</a></li>
            <li><a href="javascript:void(0)">Profile</a></li>
            <li><a href="https://github.com/meepshere/Praktikum-Web-RC/tree/minggu8"  target=”_blank”>GitHub</a></li>
            <li><a href="logout.php">Logout</a></li>
        </div>
    </nav>
    
    <div class="all-contents">
        <br>
        <br>
        <br>
        <div class="main-content">
            <img src="assets/pic/mepoto.jpg" id="potoMe">
            <div class="biodata">
                <h1 id="bioTitle">Biodata</h1>
                <table class="tabel">
                    <tr>
                        <td>Nama</td>
                        <td>: Sayyid Muhammad Umar Al Haris</td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>: 119140190</td>
                    </tr>
                    <tr>
                        <td>Program Studi</td>
                        <td>: Teknik Informatika</td>
                    </tr>
                    <tr>
                        <td>Tempat, Tanggal Lahir</td>
                        <td>: Palembang, 12 Oktober 2001</td>
                    </tr>
                    <tr>
                        <td>Hobi</td>
                        <td>: Ga ngapa-ngapain</td>
                    </tr>
                    <tr>
                        <td>Keahlian</td>
                        <td>: Menunda-nunda</td>
                    </tr>
                    <tr>
                        <td>Kelas Pemweb</td>
                        <td>: RC</td>
                    </tr>
                </table>
            </div>
            
        </div>
        <div class="newss">
            <div class>
                <h1 id="bioTitle">News</h1>
                <div class="berita1">
                <h2>Fantasy Basketball Rankings 2021: Sleepers, breakouts, busts from proven NBA simulation</h2>
                <p>
                    There are plenty of options at the small forward position, so you need to look at trusted 2021 Fantasy basketball rankings before finalizing your roster. Should Warren be considered among the top 2021 Fantasy basketball sleepers, or will he be among the biggest 2021 Fantasy basketball busts?
                    <a href="https://www.cbssports.com/fantasy/basketball/news/fantasy-basketball-rankings-2021-sleepers-breakouts-busts-from-proven-nba-simulation/" target="blank" class="link-more">(more)</a>
                </p>
                </div>
                
                <div class="berita1">
                <h2>8 men's basketball Final Four dark horses for the 2022 NCAA tournament, according to Andy Katz</h2>
                <p>
                    On the latest March Madness 365 podcast (#MM365) March Madness correspondent Andy Katz is joined by Mark Titus and Tate Frazier of FOX Sports' "Titus & Tate" to preview several conferences for the 2021-22 season, and Katz also talks with Arkansas coach Eric Musselman. Katz also ranked his top eight Final Four dark horses.
                    <a href="https://www.ncaa.com/news/basketball-men/article/2021-10-05/8-mens-basketball-final-four-dark-horses-2022-ncaa-tournament-according-andy" target="blank" class="link-more">(more)</a>    
                </p>
                </div>

                
                <div class="berita1">
                <h2>Media selects preseason 2021-22 Pac-12 Men's Basketball All-Conference Teams</h2>
                <p>
                    Preseason league favorite UCLA led the way with three First Team selections on the 2021-22 Pac-12 Men’s Basketball preseason All-Conference Teams as selected by media who cover the league and revealed ahead of the league’s media day on Wednesday.

                    2021 NCAA Final Four All-Tournament Team and East Regional Most Outstanding Player Johnny Juzang was joined by Tyger Campbell and Jaime Jaquez Jr. as Bruins picked to the First Team.
                    <a href="https://pac-12.com/article/2021/10/13/media-selects-preseason-2021-22-pac-12-mens-basketball-all-conference-teams" target="blank" class="link-more">(more)</a>
                </p>
                </div>
            </div>
        </div> 
    </div>
    <footer> 
        Sayyid Haris © 2021
    </footer> 
</body>
</html>