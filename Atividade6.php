<?php 

print " Digite três números e diga qual é o maior deles : \n\n" ; 

$n1 = (int) fgets (STDIN);
$n2 = (int) fgets (STDIN);
$n3 = (int) fgets (STDIN);

print "Agora qual é o maior deles : \n\n" ;

# Achando o maior número #

if ($n1 > $n2  ) {
    print "O $n1 é o maior número dos três ." ; 
}

if ($n1 > $n2) {
    print " O $n1 é o maior número dos três ." ; 
}

if ($n2 > $n1) {
     print " O $n2 é o maior número dos três ." ;
}

if ($n2 > $n3) {
     print "O $n2 é o maior número dos três .";
}

if ($n3 > $n1 ) {
    print " O $n3 é o maior número dos três . ";
}

if ($n3 > $n2) {
    print " O $n3 é o maior número dos três . ";
}


print " Fim do Algoritmo " ;


