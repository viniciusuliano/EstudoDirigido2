<?php
print "Digite M ou F: ";
$sexo= fgetc (STDIN);

if ($sexo== "F"){ 
    print "Sexo é feminino";

}

elseif ($sexo== "M"){
    print "Sexo é masculino";
}

else {

    print "O sexo é invalido";
    
}
