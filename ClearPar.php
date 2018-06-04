<?php

class ClearPar
{
    #Solucion 1
    public function build ($cadena)
    {
        return implode(array_fill(0,count(explode('()',$cadena))-1,'()'));
    }




}

$objt= new ClearPar;

var_dump($objt->build('()())()'));
var_dump($objt->build('()(()'));
var_dump($objt->build(')('));
var_dump($objt->build('((()'));

?>