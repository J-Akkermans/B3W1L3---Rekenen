<!-- Lab 3b - Loops & functions -->
<!-- 1. Maak een PHP applicatie die met een for loopje de tafel van 6 laat zien. -->
<!-- 2. Zorg er nu voor dat de for loop in een functie staat die de waarde 6 mee krijgt als parameter. -->
<?php
    echo "<br> Loop";
    for($i = 1; $i <= 10; $i++) {
        $num1 = 6;
        echo ("<br> $num1 * $i = "), $num1 * $i;
    }

function tafel($num){
    for($i = 1; $i <= 10; $i++) {
        echo ("<br> $num * $i = "), $num * $i;
    }
}
echo "<br> <br> Functie";
tafel(6);

echo "<br><br> ForEach";
$arrayNumbers = array(3,5,8,12);
foreach ($arrayNumbers as $value) {
    tafel($value);
  }
?>