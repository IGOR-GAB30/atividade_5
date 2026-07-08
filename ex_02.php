<?php

function inverterTexto($texto){
echo "Quantidade de caracteres: " . strlen($texto) . "<br>";

return strrev($texto);
}

$texto = "Haaland pronuncia-se Rolan";

echo "Texto original: $texto <br>";
echo "Texto invertido: " . inverterTexto($texto);

?> 

