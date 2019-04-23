<?php 

print " Digite três números e diga qual é o maior deles : \n\n" ; 

$n1 = (int) fgets (STDIN);
$n2 = (int) fgets (STDIN);
$n3 = (int) fgets (STDIN);

print "Agora qual é o maior deles : \n\n" ;

if ($n1 > $n2 or $n1 > $n3 ) {
    print "O $n1 é o maior número dos três ." ; 
}

if($n2 > $n1 or $n2 > $n3){
print "então $n2 é o maior número dos três ." ; }


elseif ($n3 > $n1 or $n3 > $n2){
    print " Logo  $n3 é o maior número dos três .";
}
