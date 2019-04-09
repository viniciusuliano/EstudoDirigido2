<?php
print "Digite o 1º número: ";
$numero1= (float) fgets(STDIN);
print "Digite o 2º número: ";
$numero2= (float) fgets(STDIN);
print "Digite o 3º número: ";
$numero3= (float) fgets(STDIN);

if ($numero1>$numero2 and $numero1>$numero3) 
    {print "O 1º número é o maior";}
if ($numero2>$numero1 and $numero2>$numero3) 
    {print "O 2º número é o maior";}
if ($numero3>$numero1 and $numero3>$numero2) 
    {print "O 3º número é o maior";}

if ($numero1==$numero2 and $numero1==$numero3) 
    {print "Ambos 3 números são iguais";}
if ((float)($numero1 and $numero2 and $numero3))
        {if ($numero1==$numero2) 
            {print "O 1º e 2º número são iguais";}
            
        if ($numero2==$numero3) 
            {print "O 2º e 3º número são iguais";}
            
        if ($numero3==$numero1) 
            {print "O 1º e 3º número são iguais";}}
