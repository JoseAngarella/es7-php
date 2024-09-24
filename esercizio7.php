<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $min=0;
        $max=50;
        $x=rand($min, $max);
        $y=rand($min, $max);
        echo "<p>x: $x , y: $y</p>";
        if($x > $y){
            $valoreMassimo=$x;
            echo "<h1>x è maggiore</h1>";
        }elseif ($x < $y){
            $valoreMassimo=$y;
            echo "<h1>x è minore</h1>";
        }else{
            $valoreMassimo=$x;
            echo "<h1> x è uguale</h1>";
        }

        if($valoreMassimo<10){
            echo "<p> il valore massimo è minore di 10</p>";
        }elseif($valoreMassimo>9 and $valoreMassimo<21){
            echo "<p> il valore massimo è compreso tra 10 e 20</p>";
        }elseif($valoreMassimo>20 and $valoreMassimo<31){
            echo "<p> il valore massimo è compreso tra 21 e 30</p>";
        }else{
            echo "<p> il valore massimo è maggiore di 30</p>";

        }



    ?>
</body>
</html>