<?php

print " Digite qualquer letra , e depois diga se ela é uma vogal ou uma consoante" ;

$letra =  (string) fgetc (STDIN)  ;

if ($letra == 'a' or $letra == 'e' or $letra == 'i' or $letra == 'o' or $letra == 'u'  :\n\n ){
    print "$letra é uma vogal " ;
    
}else {
     print "$letra é uma consoante"
}

print "Fim Algoritmo" ;
