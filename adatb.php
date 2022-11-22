<?php
/*foreach ($_POST as $key => $value) {
    echo "<tr>";
    echo "<td>";
    echo $key;
    echo "</td>";
    echo "<td>";
    echo $value;
    echo "</td>";
    echo "</tr>";
}*/

if (isset($_POST["mentes"])){
    $conn = new mysqli("localhost", "root", "","projekt");
/*if (isset($_POST["mentes"])){
    $conn = new mysqli("localhost", "projadb", "123456789","projadb");
*/    

if($conn->connect_error){
    echo "Nem sikerült csatlakozni az adatbázis szerverhez.";
    }
}



$bong = trim($_POST["browser"]);
$ip = trim($_POST["ip"]);
$orszag = trim($_POST["orsz"]); 
$opr = trim($_POST["os"]);
$eszkoz = trim($_POST["esz"]);
$RAM = trim($_POST["ram"]);
$video = trim($_POST["vid"]);
$aksi = trim($_POST["aksi"]);
$mag = trim($_POST["log"]);

$keres = "INSERT INTO adatok (adatok.bongeszo, adatok.Ip_cim, adatok.orszag, adatok.oprendsz, adatok.esz, adatok.ram, adatok.vid, adatok.aksi, adatok.log) 
VALUES ('". $bong ."','". $ip ."', '". $orszag ."','". $opr ."','". $eszkoz ."','". $RAM ."','". $video ."','". $aksi ."','". $mag ."');";
    $result = $conn->query($keres);
    
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>
        
        <form action = '' method= ''>
            <div>Böngésző: <?php echo $bong?></div>
            <div>Publikus IP cím: <?php echo $ip?></div>
            <div>Ország: <?php echo $orszag?></div>
            <div>Op. rendsz.: <?php echo $opr?></div>
            <div>Eszköz: <?php echo $eszkoz?></div>
            <div>RAM: <?php echo $RAM?></div>
            <div>Videókártya: <?php echo $video?></div>
            <div>Akkumlátor: <?php echo $aksi?></div>
            <div>Logikai proc. száma: <?php echo $mag?></div>
        </form>
    </body> 
    </html>
