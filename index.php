<?php
$folio = "1";
for ($number = $folio; $number<11; $number++) {
   echo 'TECESINF'.$number;
   echo '<br>';
}



function generarCodigo($longitud) {
 $key = '';
 $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}
 
//Ejemplo de uso
 
echo generarCodigo(10); // genera un código de 6 caracteres de longitud.

?>