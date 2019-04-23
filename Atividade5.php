<?php 
 print " Digite duas notas pertensentes a uma aluno: \n\n" ;
 
 $nota1 = (int)  fgets (STDIN);
 $nota2 = (int)  fgets  (STDIN);
 
 print "Agora calcule a média \n\n" ; 
 
 $soma = $nota1 + $ $nota2 ;

 $media = $soma / 2 ;
 
 if ($media >= 7) {
    print " A média do aluno foi : $media . Então ele passou  \n\n " ;
 }
 
 if ($media < 7 ) {
    print "A média do aluno foi : $media . Então ele reprovou \n\n" ;
 }

 elif ($media = 10){
    print "A média do aluno foi : $media . Então ele passou com distinção \n\n" ;
 }

 print "Fim do Algoritmo";
