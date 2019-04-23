<?php 

print "Digite o valor de três produtos e depois veja qual é o mais barato entre os três : \n\n"  ;

    print "Digite o valor do primeiro produto: ";
    $p1 = (int) fgets (STDIN);
    
    print "Digite o valor do segundo produto: ";
    $p2 = (int) fgets (STDIN);

    print "Digite o valor do terceiro produto: ";
    $p3 = (int) fgets (STDIN);


print "Agora veja quais dos produtos possui o melhor preço  (lembrando que o melhor preço é o do produto que for mais barato) :\n\n" ;

if ($p1 < $p2 or $p1 < $p3) {
    print " Então o produto 1 é o mais barato  " ;
}

if ($p2 < $p1 or $p2 < $p3) {
    print "Então o produto 2 é o mais barato  " ;
}

if ($p3 < $p1 or $p3 < $p2) {
    print "Então o produto 3 é o mais barato  " ;
}


print "Fim do Algoritmo" ;
