<?php

print " Digite cinco números e diga qual é o maior entre eles : /n/n" ;

$n1 = (int) fgets (STDIN) ;
$n2 = (int) fgets (STDIN) ;
$n3 = (int) fgets (STDIN) ;
$n4 = (int) fgets (STDIN) ;
$n5 = (int) fgets (STDIN) ;

print " Agora diga-me qual é o maior entre eles : /n/n " ;

if ( $n1 > $n2 or $n1 > $n3 or $n1 > $n4 or $n1 > $n5 ){
print " O $n1 é o maior número entre os cinco que você digitou " ;
}
---------------------------------------------------------------------
if ($n2 > $n1 or $n2 > $n3 or $n2 > $n4 or $n2 > $n5 ){
print " O $n2 é o maior número entre os cinco que você digitou " ;
}
--------------------------------------------------------------------
if ($n3 > $n1 or $n3 > $n2 or $n3 > $n4 or $n3 > $n5 ){
print " O $n3 é o maior número entre os cinco que você digitou " ;
}
--------------------------------------------------------------------
if ($n4 > $n1 or $n4 > $n2 or $n4 > $n3 or $n4 > $n5 ){
print " O $n4 é o maior número entre os cinco que você digitou " ;
}
--------------------------------------------------------------------
if ($n5 > $n1 or $n5 > $n2 or $n5 > $n3 or $n5 > $n4 ){
print " O $n5 é o maior número entre os cinco que você digitou " ;
}
--------------------------------------------------------------------
  
  print " Fim do Algoritmo " ;
