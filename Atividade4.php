<?php

print " Digite qualquer letra , e depois diga se ela é uma vogal ou uma consoante" ;

$letra : (string) fgets (STDIN) ;

if ($letra == 'A','E','I','O','U'){
    print "$letra é uma vogal " ;
    }
else {
     print "$letra é uma consoante"
}

print "Fim Algoritmo" ;
