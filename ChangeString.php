<?php

class ChangeString
{
    #Solucion 1
    public function build ($cadena)
    {

        $abecedario= array(1=>'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'ñ', 'o', 'p', 'q', 'r','s', 't', 'u', 'v', 'w', 'x', 'y', 'z');
        $nueva_cadena='';
        $mayuscula=[];

        $can=str_split($cadena);

        for($i=0;$i<count($can);$i++){
            $indice=array_search(strtolower($can[$i]),$abecedario);

            if($indice!=null){

                if($indice==count($abecedario)){
                    $nueva_cadena.=$abecedario[1];
                }else{
                    $nueva_cadena.=$abecedario[$indice+1];
                }
            }else{
                $nueva_cadena.=    $can[$i];
            }
            if(ctype_upper($can[$i])){
                $mayuscula[$i]=strtoupper ($nueva_cadena[$i]);
            }
        }
         count($mayuscula)>0?$cadena_final=implode(array_replace(str_split($nueva_cadena),$mayuscula)):$cadena_final= $nueva_cadena;
        return $cadena_final;
    }



}

  $objt= new ChangeString;
  var_dump($objt->build('123 abcd*3'));
  var_dump($objt->build('**Casa 52'));
  var_dump($objt->build('**Casa 52Z'));

?>