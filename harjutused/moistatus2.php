<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ülessane 403</title>
</head>
<body>
<a href="../phptest.php">tagasi.....Ülesannete leht</a>
<h1>... mõistatus </h1>
<?php

echo "<br>";
echo "<a href='vastus.php'> Õiged vastused</a>";
echo "<br>";
echo "<h2> Arva ära EESTI LINNANIMI</h2>";

$nimi="Tartu";
//teksti pikkus
echo "<br>Linnunimi pikkus - : ".strlen($nimi);
//esimene täht
echo "<br>Linnanimi esimine täht - : ".substr($nimi,0,1);


echo "<br>Linn läbi iga täht punkti- : ".strrev($nimi);
echo "<br>Linn läbi iga täht punkti- : ".str_shuffle($nimi);
echo "<br>";
echo "<a href='vastus2.php'> Õiged vastused</a>";






?>

