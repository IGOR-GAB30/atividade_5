<?php

function mascararCpf($cpf){

$ultimos = substr($cpf, -4);

$mascara = str_repeat("*", strlen($cpf) - 4);

return $mascara . $ultimos;
}

$cpf = "136.444.479-85";

echo mascararCpf($cpf);

?>  

