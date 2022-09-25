<?php
// 3. Sukurkite du input laukelius. Vienas -  vardas, kitas - slaptažodis. Susigalvokite vardą ir slaptažodį. Pvz. vardas - "admin",
// slaptažodis - "123456". Jei sugalvota kombinacija sutampa su tuo, kas įvesta į input laukelius, išvedamas pranešimas - "prisijungėte sėkmingai", kitu atveju - "Įvesti duomenys neteisingi".
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
    echo "<script>alert('Sėkmingai prisijungta')</script>";
} else {
    echo "<script>alert('Įvesti duomenys neteisingi')</script>";
};
};
?>