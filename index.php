<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Grigorjev PHP leht</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <script src="JS/lego.js"></script>
    <script src="JS/primo.js"></script>
    <script src="JS/cals.js"></script>

</head>
<body>
<?php
 include ('header.php');
 include ('navigation.php');

?>
<!---main--->
<main>
    <?php
    if(isset($_GET['leht'])){
        include('Content/'.$_GET['leht'].'.php');

    } else {
        include('Content/_main.php');
    }
    ?>
</main>
<?php
include('footer.php');

?>
</body>
</html>
