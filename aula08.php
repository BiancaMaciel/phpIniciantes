<?php
/*Array_combine: combina dois arrays criando um terceiro contendo chave e valor*/
$chaves = array('nome', 'endereco', 'telefone');
$valores = array('Ricardo', 'rua tal', '0000');
echo "array_combine";
var_dump(array_combine($chaves,$valores));

/*Array_count_values: Conta quantas vezes um determinado valor apareceu no array */
$nomes = array('Ricardo','Pedro', 'Joao', 'José', 'Ricardo');
echo "array_count_values";
var_dump(array_count_values($nomes));

/*array_key_exists: Verifica se existe um indice no array*/
$cadastro = array_combine($chaves,$valores);
echo "array_key_exists";
var_dump(array_key_exists('nome', $cadastro));

/*array_keys: Cria um novo array contendo todos os indices do outro array*/
echo "array_keys";
var_dump(array_keys($cadastro));

/* Array_merge: Serve para combinar mais de um array*/
echo "array_merge";
var_dump(array_merge($chaves, $valores));

/* Array_rand: Retorna um indice randomico*/
$nomes2 = array(0 => 'Ricardo', 1 => 'Pedro', 2 => 'Joao', 3 =>'José');
echo "array_rand";
var_dump(array_rand($nomes2));

/* array_search: Retorna a posição do indice que contém o valor procurado*/
echo "array_search";
var_dump(array_search('Pedro', $nomes2));

/* array_sum: Soma os valores númericos se tiver um texto ele ignora*/
$numeros = array(15,30,10,20);
echo "array_sum";
var_dump(array_sum($numeros));

/*array_unique : Remove todos os valores duplicados*/
$numeros2 = array(15,30,10,20,20);
echo "array_unique";
var_dump(array_unique($numeros2));

/*array_values : retorna somente os valores */
echo "array_values";
var_dump(array_values($cadastro));

/*asort : organizar os valores de um array. Não retorna o novo array, retorna somente se foi possível 
ou não a ordenação. Ordem alfabetica de A-Z */
echo "asort";
asort($nomes2);
var_dump($nomes2);

/*arsort : organizar os valores de um array. Não retorna o novo array, retorna somente se foi possível 
ou não a ordenação. Z-A  */
echo "arsort";
arsort($nomes2);
var_dump($nomes2);

/*sizeof : Serve para contar quantidade de valores do array */
echo "sizeof";
var_dump(sizeof($numeros2));

/* extract : Decompoem o array, transforma cada chave, faz vira uma variável.  */
echo "extract";
var_dump(extract($cadastro));
echo $endereco.'<br/>';

/* in_array : Retorna um boolean informando se a palavra procurada existe dentro do array */
echo "in_array";
var_dump(in_array('Ricardo', $nomes2));

/* array_replace : Substitui palavras no array */
$acentos = array('á', 'é', 'í', 'ó', 'ú');
$vogais = array('a', 'e', 'i','o', 'u');
echo "array_replace";
var_dump(array_replace($acentos,$vogais));

//Navegação dentro do array
/* reset : reseta um array 
   next: avança para o próximo item do array
   current: vê onde está o ponteiro do array
   prev: volta uma posição do array
   key: mostra o indice atual 
   end: vai pro final do array
*/
echo "Navegação dentro do array";
echo reset($nomes2).'<br/>';
echo next($nomes2).'<br/>';
echo current($nomes2).'<br/>';
echo prev($nomes2).'<br/>';
echo key($nomes2).'<br/>';
echo end($nomes2).'<br/>';
?>