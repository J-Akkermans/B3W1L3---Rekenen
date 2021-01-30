<!-- Lab 3A -->
<!-- Maak een applicatie die met 2 random getallen een vermenigvuldiging, optelsom, aftreksom en deelsom laat zien, gebruik hiervoor de functie rand() of mt_rand() -->
<?php 
$num1 = rand(1,10);
$num2 = rand(1,10);


// Vermenigvuldiging
echo ("Vermenigvuldiging $num1 * $num2 = "), $num1 * $num2;
// Optelsom
echo ("<br> Optelsom $num1 + $num2 = "), $num1 + $num2;
// Aftreksom
echo ("<br> Aftreksom $num1 - $num2 = "), $num1 - $num2;
// Deelsom
echo ("<br> Aftreksom $num1 / $num2 = "), $num1 / $num2;
?>

