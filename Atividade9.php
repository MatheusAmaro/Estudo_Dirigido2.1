<?php

print "  Digite três números  : " ;

$n1= (int) fgets (STDIN) . "\n\n" ;
$n2= (int) fgets (STDIN) . "\n\n" ;
$n3= (int) fgets (STDIN) . "\n\n" ;

print "Agora leia esses números de maneira decrescente : \n\n" ;

     if ($n1 > $n2  > $n3 ){
        print " Então a ordem é  $n1 , $n2, $n3 \n\n";
    }
    
     if ($n2 >  $n1> $n3 ){
        print " Então a ordem é  $n2 , $n1, $n3 \n\n";
    }
    
     if ($n3 > $n1 > $n2 ){
        print " Então a ordem é  $n3 , $n1 , $n2 \n\n";
    }

    if ($n3 > $n2 > $n1 ){
        print " Então a ordem é  $n3 , $n2 , $n1 \n\n";
    }

     if ($n2 > $n3 > $n1 ){
        print " Então a ordem é  $n2 , $n3 , $n1 \n\n";
    }

    if ($n1 = $n2 = $n3 ){
        print " A ordem está invalida segundo o que foi pedido \n\n";
    }
  
  



    print "Fim Algoritmo" ;
    
    
    
