<?php
print "Digite alguma letra: ";
$letra=  fgetc(STDIN);

if ($letra== "A" or $letra== "E" or $letra== "I" or $letra== "O"or $letra== "U")
{
    print "Essa letra é uma vogal";
}
else {
    print "Essa letra é uma consoante";
}
