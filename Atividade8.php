<?php 

print "Digite o valor de três produtos e depois veja qual é o mais barato entre os três : \n\n"  ;

    print "Digite o valor do primeiro produto: ";
    $produto1 = (int) fgets (STDIN);
    
    print "Digite o valor do segundo produto: ";
    $produto2 = (int) fgets (STDIN);

    print "Digite o valor do terceiro produto: ";
    $produto3 = (int) fgets (STDIN);


print "Agora veja quais dos produtos possui o melhor preço  (lembrando que o melhor preço é o do produto que for mais barato) :\n\n" ;

if ($produto1 < $produto2 or $produto1 < $produto3) {
    print "Então o $produto1 possui o menor preço dentre os três " ;
}

if ($produto2 < $produto1 or $produto2 < $produto3) {
    print "Então o $produto2 possui o menor preço dentre os três " ;
}

if ($produto3 < $produto1 or $produto3 < $produto2) {
    print "Então o $produto3 possui o menor preço dentre os três " ;
}



print "O produto que possui  o valor mais barato, é o melhor para se comprar . " ;

print "Fim do Algoritmo" ;
