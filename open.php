<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formularz recezencki</title>
</head>

<body class="bodyo">
<?php
echo "<p class='maino'> FORMULARZ RECENZENCKI </p><br>";
echo "<p class='echo'>Imie: ".$_POST["imie"]."</p><br>";
echo "<p class='echo'>Nazwisko: ".$_POST["nazwisko"]."</p><br>";
echo "<p class='echo'>Email: ".$_POST["email"]."</p><br>";
echo "<p class='echo'>Wiek: ".$_POST["wiek"]."</p><br>";
echo "<p class='echo'>File: ".$_POST["file"]."</p><br>";
if ($_POST["zgoda"]=="on") {
    echo "<p class='echo'></p> Zgoda: zgoda uzyskana</p> <br>";
}
else {
    echo "<p class='echo'> Zgoda: brak mozliwosci wziecia udzialu</p><br>";
}

?>
</body>
</html>
