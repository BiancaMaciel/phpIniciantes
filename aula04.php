<?php

//if 
echo "if: ";
$valor = 15;
if($valor == 10): 
    echo "O valor eh igual a 10";
elseif ($valor > 10):
    echo "O valor eh maior que 10";
else:
    echo "O valor eh menor que 10";
endif;
echo '<br/>';

/*
if($valor == 10) 
    echo "O valor eh igual a 10";
elseif ($valor > 10)
    echo "O valor eh maior que 10";
else
    echo "O valor eh menor que 10";

*/

//while 
echo "while: ";
$contador = 1;
while ($contador <= 10):
    echo $contador.' ';
    $contador++;
endwhile;
echo '<br/>';

/* Também pode utilizar 
while ($contador <= 10){

    echo $contador.' ';
    $contador++;
}
*/

//do while 
echo 'Do while:';
$contador = 1;
do{
    echo $contador;
    $contador++;
}while($contador <= 10);
echo '<br/>';


//for
echo 'For: ';
for($num=1; $num<=10;$num++):
    echo $num;
endfor;
echo '<br/>';

//foreach
$nome = array('nome1' => 'Bianca', 'nome2' => 'Marcos');
echo 'ForEach: ';
foreach($nome as $chave => $valor):
    echo $chave.' = '.$valor." ";
endforeach;
echo '<br/>';




?>