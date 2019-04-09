<?php
print "Digite o 1º número: ";
$numero1= (float) fgets(STDIN);

print "Digite o 2º número: ";
$numero2= (float) fgets(STDIN);

print "Digite o 3º número: ";
$numero3= (float) fgets(STDIN);

print "Digite o 4º número: ";
$numero4= (float) fgets(STDIN);

print "Digite o 5º número: ";
$numero5= (float) fgets(STDIN);

$soma= ($numero1+$numero2+$numero3+$numero4+$numero5);
$media= ($soma/5);
print "A soma é de: $soma\nA média é de: $media";
