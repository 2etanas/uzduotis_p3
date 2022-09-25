<?php
// 4. Papildikite 3 programą:
// *Jei duomenys yra įvesti teisingi, vartotojas nukreipiamas į failą - manopaskyra.php.
// *Kitu atveju, vartotojas nukreipiamas į puslapį - 404.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
    <input type="text" name = "vardas" placeholder="Vardas">
    <input type="password" name="password" placeholder="Slaptazodis">
    <button type="submit" name="ieiti">Ieiti</button>
    </form>
</body>
</html>
<?php
    $storedN = "admin";
    $storedP = "123456";
if (isset($_POST["ieiti"])){   
    $Vardas = $_POST["vardas"];
    $Slaptazodis = $_POST["password"];
if ($Vardas == $storedN && $Slaptazodis == $storedP) {
    // echo "<script>alert('Sėkmingai prisijungta')</script>";
    header('Location:'."manopaskyra.php");
} else {
    // echo "<script>alert('Įvesti duomenys neteisingi')</script>";
    header('Location:'."404.php");
};
};
?>