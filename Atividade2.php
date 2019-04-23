<?php 


print "Digite um número e diga se ele é positivo ou negativo :\n\n" ;

$num = (int) fgets (STDIN);


 if ($num> 0){
        print "O  $num  é  um  número positivo \n\n";
    }

    if ($num < 0){
        print "O  $num  é  um  número negativo \n\n";
    }

    if ($num == 0){
        print "O  $num  é  um  número neutro \n\n" ;
    }



     print "Fim Algoritmo";
 
