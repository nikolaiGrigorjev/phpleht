<?php
$data=[
    "nimi"=>"Nikolai Grigorejev",
    "aadress"=>"Arzamas 3,Tallinn",
    "pilt"=>"mem.jpg",
    "koduleht"=>"https://grigorjev20.thkit.ee/"
];
?>
<h1>Ülesanne 401/Variant 1</h1>
<p><b>
    <?=$data["nimi"]?>

    </b></p>
<p><i>

        <?=$data["aadress"]?>

</p></i>
<img src="<?=$data["pilt"]?>" alt="pildike">
<a href="<?=$data["koduleht"]?>" target="_blank">Grigorjev koduleht</a>

<h1>Ülesanne 401/Variant 2 - array()</h1>
<?php
//massiv array funktiooniga
$array=array("Grigorjev koduleht","Tallinn, Arzamas 3","mem.jpg","grigorjev20.thkit.ee");
echo "<b>Nimi:".$array[0]."</b><br>";
echo "<i>Aadress:".$array[1]."</i><br>";
echo "<img src='$array[2]' alt='pildike'>";
echo "<br><a href='https://$array[3]'>Koduleht</a>";
?>
<a href="../phptest.php">tagasi.....Ülesannete leht</a>

