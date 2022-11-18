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

    if($conn->connect_error){
        echo "Nem sikerült csatlakozni az adatbázis szerverhez.";
    }
}

$bong = trim($_POST["browser"]);
$ip = trim($_POST["ip"]);
$orszag = trim($_POST["orsz"]); 
$opr = trim($_POST["os"]);

$keres = "INSERT INTO adatok (adatok.bongeszo, adatok.Ip_cim, adatok.orszag, adatok.oprendsz) VALUES ('". $bong ."','". $ip ."', '". $orszag ."','". $opr ."');";
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
            <div class="browser">Böngésző: <input readonly value='' id = "browser" name ="browser"></div>
            <div class="version">Publikus IP cím: <input readonly value = '' id = "ip" name = "ip"></div>
            <div class="orszag">Ország: <input readonly value = '' id = "orszag" name = "orsz"></div>
            <div class="os">Op. rendsz.: <input readonly value = '' id ="os" name = "os"></div>
        </form>
        <script src="asd.js"></script>
    </body> 
    </html>