<?php
 
print " Digite cinco números some-os e diga qual foi a média deles no final :/n/n ";

$n1 = (int) fgets (STDIN);
$n2 = (int) fgets (STDIN);
$n3 = (int) fgets (STDIN);
$n4 = (int) fgets (STDIN);
$n5 = (int) fgets (STDIN);

print " Agora some os cinco números : /n/n " ; 

$soma = $n1 + $n2 + $n3 + $n4 + $n5 ;

print " O valor da soma é : $soma . /n/n " ; 

print " Agora diga a média conseguida com a soma acima : /n/n ";;

$media = ( $soma / 2 ) ;

print " A média é : $media  . /n/n " ;

print " Fim Algoritmo " ;


