<?php 
//pirmos
// //1. Užduotis "Skaičiuotuvas".

// Sukurti skaičiuotuvą. Skaičiuotuve įvedami du skaičiai į du skirtingus input.
// Aritmetinis veiksmas perduodamas per GET. Pvz.: sukuriamas trečias input, jei tame input yra + ženklas,
// jis perduodamas per GET, ir PHP kode if tikrina, koks aritmetinis veiksmas buvo perduotas.
// Rezultatas išvedamas į div.
$skaicius1 = $_GET["skaicius1"];
$skaicius2 = $_GET["skaicius2"];

$veiksmas = $_GET["veiksmas"];

$rezultatas = 0;
 $zenklas = "+";
if($veiksmas == "+")
{
    $rezultatas = $skaicius1 + $skaicius2;
}
else if($veiksmas == "-")
{
    $rezultatas = $skaicius1 - $skaicius2;
} 
else if($veiksmas == "*")
{
    $rezultatas = $skaicius1 * $skaicius2;
} 
else if($veiksmas == "/")
{
    $rezultatas = $skaicius1 / $skaicius2;
} 


echo "<div id='result1'>Rezultatas: $rezultatas</div>";


?>