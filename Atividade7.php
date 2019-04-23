<?php 
print " Digite três números e diga é o maior e o menor entre eles :\n\n" ;

$n1 = (int) fgets (STDIN);
$n2 = (int) fgets (STDIN);
$n3 = (int) fgets (STDIN);

print "Agora diga o maioir entre os três :" ;
 
if ($n1 > $n2 or $n1 > $n3) {
    print "O $n1 é o maior número dos três :" ; 
}
if ($n2 > $n1 or $n2 > $n3) {
    print "O $n2 é o maior número dos três :" ; 
}
if ($n3 > $n1 or $n3 > $n2) {
    print "O $n3 é o maior número dos três :" ; 
}



print "Agora diga qual o menor dos três :\n\n" ;


    if ($a < $b and $a < $c){
        print "O $n1 é o menor número dos três  \n\n";
    }

    if ($n2 < $n1 and $n2 < $n3){
        print "O $n2 é o menor número dos três  \n\n" ; 
    }

    if ($n3 < $n1 and $n3 < $n2) {
        print "O $n3 é o menor número dos três \n\n" ;   
    }

print "Fim do Algoritmo" ; 
