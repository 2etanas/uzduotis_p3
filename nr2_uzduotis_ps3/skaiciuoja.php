<?php 
//antros

// 2. Sukurkite skaičiuotuvą, sudedantį dvi trupmenas. Rezultatas atvaizduojamas su sveikąja ir trupmenine dalimi į div.
// Kiekvienas laukelis turi turėti patikrinimą, ar jame yra įvestas skaičius.
$skaicius1 = $_GET["skaicius1"]; //vardiklis
$skaicius2 = $_GET["skaicius2"];// daliklis
$skaicius3 = $_GET["skaicius3"];//vardiklis
$skaicius4 = $_GET["skaicius4"];//daliklis

$rezultatas = (($skaicius1*$skaicius4)+($skaicius3*$skaicius2))/($skaicius2*$skaicius4);

$naujasSkaitiklis = ($skaicius1*$skaicius4)+($skaicius3*$skaicius2);
$naujasVardiklis = $skaicius2*$skaicius4;

$Liekana = $naujasSkaitiklis % $naujasVardiklis;
$sveikojiDalis = ($naujasSkaitiklis - $Liekana) / $naujasVardiklis;

echo "<div id='result1'>Rezultatas: $rezultatas</div>";
echo "<div id='result1'>Rezultatas: sveikoji dalis: $sveikojiDalis trukmeninė dalis: $Liekana /$naujasVardiklis </div>";
echo "<div>";
echo "<span>$sveikojiDalis</span>";
echo "<div class='frac'>";
echo "<span>$Liekana</span>";
echo "<span class='symbol'>/</span>";
echo "<span class='bottom'>$naujasVardiklis</span>";    
echo "</div>";
echo "</div>";

?>
<style>
        .cont{
            display: inline-flex;
        }
        .frac {
            display: inline-block;
            position: relative;
            vertical-align: middle;
            letter-spacing: 0.001em;
            text-align: center;
        }
        .frac > span {
            display: block;
            padding: 0.1em;
        }
        .frac span.bottom {
            border-top: thin solid black;
        }
        .frac span.symbol {
            display: none;
        }
    </style>