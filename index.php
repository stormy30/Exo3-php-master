<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  ...
  <?php
// exo1
  $i = 0;
while ($i <= 10) {
    echo $i++;
}
  ?></br>
  <!-- Exo2 -->
  <?php
   $var1=0;
   $var2=50;
   while($var1!=20){
     echo $var1*$var2;
     $var1++;
   }
  ?></br>
  <!-- exo3 -->
<?php
// $var1 =100;
// $var2=60;
// while ($var1<=10){
//   echo $var1*$var2;
//   $var1--;
// }
$var1 = 100;
$var2 = 50;

for($var1 = 100; $var1 >= 10; $var1--*$var2){
  echo "<p>$var1 </p>";
}

?></br>
<!-- Exo4 -->
 <?php
$var1=1;
for($var1=1;$var1<=10;$var1+=0.5){
  echo "$var1";
}
 ?></br>
 <!-- Exo5 -->
<?php
    $i=null;
for($i=1 ; $i<=15; $i++){
  echo " On y arrive presque!</br>";
}
  ?></br>
  <!-- Exo6 -->
<?php

$i=null;
for($i=0 ; $i<20; $i++){
echo " c'est presque bon!</br>";
}
 ?></br>
 <!-- Exo7 -->
 <?php
 $i=1;
 for($i=1 ; $i<=100; $i+=15){
 echo " on tient le bon bout !</br>";
 }
  ?>
<!-- Exo8 -->
<?php
$i=200;
for($i=200 ; $i>=0; $i-=12){
echo " Enfin ! !</br>";
}
 ?>
</body>
</html>
