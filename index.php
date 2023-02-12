<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title> Formularz recenzencki </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<h1 class="main"> FORMULARZ RECENZENCKI </h1>
<form action="open.php" method="POST">
    <label>
    <input type="text" name="imie" size=30 placeholder="Tutaj wpisz imie"><br><br>
    <input type="text" name="nazwisko" size=30 placeholder="Tutaj wpisz nazwisko"><br><br>
    <input type="text" name="email" size=30 placeholder="Tutaj wpisz email"><br><br>
    <input type="text" name="wiek" size=30 placeholder="Tutaj wpisz wiek"><br><br>
    Zdjecie instagrama
    <input type="file" name="fileto"><br><br>
    Do jakiej ksiazki sie zglaszasz?
    <select name="book">
        <option value="">opcje...</option>
        <option value="">Legenda</option>
        <option value="M">This Poison Heart</option>
        <option value="F">Never Never</option>
    </select>
    <br><br>
    <label for="zgoda">Czy zgadzasz sie na przetwarzanie danych?</label>
    <input type="checkbox" name="zgoda"><br><br>
    <input type="submit" value="Send"><br><br>
    </label>
</Form>
</body>
</html>
