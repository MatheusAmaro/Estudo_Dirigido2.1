<?php 

print " Digite três números e diga qual é o maior deles : \n\n" ; 

$n1 = (int) fgets (STDIN);
$n2 = (int) fgets (STDIN);
$n3 = (int) fgets (STDIN);

print "Agora qual é o maior deles : \n\n" ;

if ($n1 > $n2 or $n3) {
    print "O $n1 é o maior número dos três :" ; 
}

if ($n2 > $n1 or $n3) {
    print "O $n2 é o maior número dos três :" ; 
}

if ($n3 > $n1 or $n2) {
    print "O $n3 é o maior número dos três :" ; 
}

print "Fim Algoritmo " ; 
