<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<?php

$students = array(
  '1' => "Šimon Siksta",
  '2' => "Honza Hladík",
  '3' => "Thanh Hieu Ngo",
  '4' => "Martin Lédl",
  '5' => "Jakub Vávrů",
  '6' => "Štěpán Kolarovský",
  '7' => "Libor Pluháček",
  '8' => "Karel Nakládal",
  '9' => "Jan Šlechta",
  '10' => "Michal Plaček",

);
?>

<H1> Závod </H1>

<?php
for ($i = 1; $i <= 10 ; $i++) {?>
 <?= $i?>. <?=$students[$i]?> <br>

<?php }

?>





    
</body>
</html>