<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .cont{
            display: inline-flex;
        }
        .saldu {
            color: green;
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
    <title>Trupmenu sudetis</title>
</head>
<body>
    <form method="get" action="skaiciuoja.php">
        <div class="frac saldu">
        <input type="number" name="skaicius1" placeholder="1 vardiklis" class= "cont">
        
        <span class="bottom"><input type="number" name="skaicius2" placeholder="1 daliklis"> </span>
        <div>
        <!-- <input type="text" name="veiksmas" placeholder="veiksmas +-*/" style="background-color:Tomato;"> -->
            
        </div>
        <br>      
        <div class="frac">
        <input type="number" name="skaicius3" placeholder="2 vardiklis">
       
        <span class="bottom"><input type="number" name="skaicius4" placeholder="2 vardiklis" class="bottom"> </span>
        </div>
        <br>
        <br>
        <button type="submit" name="vyk" value="s" color="green">Vykdyk</button>
    </form>    
   
</div>


</body>

</html>