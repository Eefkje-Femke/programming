<?php
//functie voor het optellen
function optellen($getal1, $getal2){
  $answer = $getal1 + $getal2;
  return $answer;
}
//functie voor aftrekken
function subtract($getal1, $getal2){
  $answer = $getal1 - $getal2;
  return $answer;
}

//functie voor vermenigvuldigen
function multiply($aantalkeer, $getal) {
   if ($aantalkeer == 0) {
   return 0;
   } else if ($aantalkeer == 1) {
   return $getal;
   } else {
     $answer = $aantalkeer * $getal;
   return $answer;
   }
 }
//functie voor delen
function divide($getal1, $getal2){
  $answer = intdiv($getal1, $getal2);
  return $answer;
}

//functie om het cijfer om te zetten naar postitief of negatief
function opposite($getal1){
  $answer = $getal1 *-1;
  return $answer;
}

?>
