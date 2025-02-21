<?php 

$Arquiv = "../env";
$conteudoArquivo = file($Arquiv);



$variaveis = [];

array_map(
    function($linha)use(&$variaveis){
        list($key, $val) = explode('=', $linha);

        $variaveis[$key] = $val;
    },
    $linhas
);
echo "<pre>";
print_r($variaveis);
echo "</pre>";
?>