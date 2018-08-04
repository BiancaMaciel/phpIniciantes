<?php
/* time(): Retorna o número de segundos que se passaram do dia base 
   strtotime: retorna o segundo de acordo com a data passada, e se colocar um segundo parametro informa a partir daquele horario
   checkdate: retorna booleano verifica se a data é valida
   date: formata a data de uma forma amigavel date(formato, data) essa função vai mostrar o horario
   de acordo com o timezone que estiver no servidor do apache, php, wamp server. 
   Para contornar esse problema temos duas opções 1: mudar no wamp server o timezone 2: setar o timezone no código da seguinte maneira
   date_default_timezone_set('America/Sao_Paulo'); no lugar de America/Sao_Paulo pode trocar por qualquer outro valor

   */
echo time().'<br/>';
echo strtotime('2015-12-23 08:46:25').'<br/>';
var_dump(checkdate(02,29,2015)).'<br/>';
date_default_timezone_set('America/Sao_Paulo');
echo date('d-m-Y H:i:s', time());

/* file_exists: retorna booleano retornando se existe ou não dentro do diretório um determinado arquivo
   __FILE__ :mostra o diretorio mais o nome do arquivo
    basename(path): mostra somente o nome do arquivo
    dirname(path): mostra somente o caminho do arquivo sem o nome
    file: mostra todas as linhas do arquivo em forma de array.
    file_get_contents: retorna uma string completa com todos os dados contidos no arquivo 
    file_put_contents: adiciona linha no arquivo somente dessa forma (file_put_contents('arquivo.txt', 'linha04'));
    vai apagar os dados que já existem no arquivo e vai acrescentar somente 'linha04'
    Colocando unm terceiro parâmetro FILE_APPEND vai acrescentar no arquivo a linha04 e não vai sobreescrever o arquivo já exitente
    para pular linha dentro do arquivo "\r\n". 

    fopen(nome_do_arquivo, modo_procurar_na_doc_php) a é de abrir, r é de read
    essa função open serva para abrir o arquivo já existente ou criar um novo arquivo

    fclose($arquivo): assim que abre o arquivo ele deve ser fechado.
   
    setcookie() cria um cookie no computador do usuário. 
        terceiro parametro serve para dizer qual é o tempo que deve ser expirado.  

    */
echo "file_exists";
var_dump(file_exists('funcoes.php'));

echo "file_exists";
var_dump(__FILE__);

echo "basename(path)".'<br/>';
echo basename(__FILE__);

echo '<br/>'."dirname(path)".'<br/>';
echo dirname(__FILE__);

echo 'file';
var_dump(file('arquivo.txt'));

echo 'file_get_contents';
echo nl2br(file_get_contents('arquivo.txt'));

echo 'file_put_contents';
//echo file_put_contents('arquivo.txt', "\r\n".'linha04', FILE_APPEND);

echo 'fopen() cria arquivo vazio';
$arquivo = fopen('arquivo.txt', 'a');
fclose($arquivo);

echo 'fwrite adiciona linha no arquivo';
$arquivo = fopen('arquivo.txt', 'a');
fwrite($arquivo, 'Linha gravada via PHP'."\r\n");
fclose($arquivo);

var_dump($_COOKIE);
setcookie('bia', 'isso foi gravado para futuras consulta', time() + (30 * 24 * 3600));

?>