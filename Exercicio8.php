<?php
print "Digite o preço do 1º produto: ";
$numero1= (float) fgets(STDIN);
print "Digite o preço do 2º produto: ";
$numero2= (float) fgets(STDIN);
print "Digite o preço do 3º segundo: ";
$numero3= (float) fgets(STDIN);

if ($numero1<$numero2 and $numero1<$numero3) 
    {print "O preço do 1º produto é mais barato\n";}
if ($numero2<$numero1 and $numero2<$numero3) 

    {print "O preço do 2º produto é mais barato\n";}
if ($numero3<$numero1 and $numero3<$numero2) 

    {print "O preço do 3º produto é mais barato\n";}
if ($numero1==$numero2 and $numero2==$numero3) 

    {print "Todos os produtos custam a mesma quantia\n";}
