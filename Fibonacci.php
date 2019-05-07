<?php

$f1 = -1;
$f2 = 1;
$getal = 0;
  echo "De Fibonacci reeks is: ";
  echo "<br />";

  function fib($n){
    global $f1;
    global $f2;
    global $getal;//je haalt de variabele op
    $f = $f1 + $f2;
    $f1 = $f2;//hier schuif je alle getallen 1 plaatsje op
    $f2 = $f;
    //hier roep je hem weer aan zolang het kleiner is al $n om een limit aan te geven
      if($f<$n){
        echo "Element";
        echo " = $f <br />";
        fib($n);
      }
  }
  fib(35);
?>
