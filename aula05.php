<?php
require('funcoes.php');

echo 'Arquivo de funcoes: '.nome_funcao().'<br/>';
echo 'Funcao Dobro: '.dobro(3).'<br/>';
echo 'Funcao Media: '.media(10, 4).'<br/>';

echo 'Verificar se a função existe raiz existe: ';
var_dump(function_exists('raiz'));

echo 'Verificar se a função existe media existe: ';
var_dump(function_exists('media'));


?>