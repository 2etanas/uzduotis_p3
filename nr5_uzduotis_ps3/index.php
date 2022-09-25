<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5uzduotis</title>
</head>
<body>
        <form action ="index.php" method="post">
            <input type="text" name="spalva">
            <button type="submit" name="nudazyk">nudazyk</button>
        </form>
        <?php
// 5. Sukurkite programą, kurioje perdavus kintamuosius per POST "juoda", "raudona", "melyna", puslapis nusidažo atitinkama spalva.
        if(isset($_POST["spalva"])) {
            $spalva = $_POST["spalva"];
            if ($spalva == "juoda") {
                $color = "black";
            } elseif($spalva == "raudona") {
                $color = "red";
            } elseif($spalva == "melyna") {
                $color = "blue";
            };
        } else {
                $color = "lightgreen";
        };
?>
<style>
        *{
            background-color : <?php echo "$color" ?>;
        };
</style>
</body>
</html>