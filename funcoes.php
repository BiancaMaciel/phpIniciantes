<?php

function nome_funcao(){
    return "Esse eh o meu arquivo de funcoes";
} 
function dobro($num){
    return $num * 2;
} 
function media($nota1, $nota2){
    if(!is_numeric($nota1) || !is_numeric($nota2))
        return 'Informe valores númericos';
    return ($nota1 + $nota2) / 2;
} 
?>