<?php

function analisarTexto($texto) {
 $quantidadePalavras = str_word_count($texto);   
$quantidadeCaracteres = strlen($texto);
   
    $textoMinusculo = strtolower($texto);
$quantidadedeVogais = 0;
$quantidadedeConsoantes = 0;
$vogais = ['a', 'e', 'i', 'o', 'u'];

for ($i = 0; $i < strlen($textoMinusculo); $i++) {
    $caractere = $textoMinusculo[$i];
    if (ctype_alpha($caractere)) {
        if (in_array($caractere, $vogais)) {
            $quantidadedeVogais++;
        } else {
            $quantidadedeConsoantes++;
        }
    }
}

return[
"palavras" => $quantidadePalavras,
"caracteres" => $quantidadeCaracteres,
"vogais" => $quantidadedeVogais,
"consoantes" => $quantidadedeConsoantes
];
}

$texto_usuario = "Brasil perdeu pra bosta da Noruega";
$resultado = analisarTexto($texto_usuario);

echo $resultado["palavras"] . " palavras<br>";
echo $resultado["caracteres"] . " caracteres<br>";
echo $resultado["vogais"] . " vogais<br>";
echo $resultado["consoantes"] . " consoantes<br>";