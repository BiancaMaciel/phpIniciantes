<?php
//var_dump($_POST);

if(isset($_POST['campo1'])) $campo1 = $_POST['campo1'];
//echo $campo1;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Envio de dados via GET e POST</title>
</head>
<body>
    <form action="" method="post">
        <p><input type="text" name="campo1"></p>
        <p><input type="submit" name="enviar"></p>
    </form>

    
</body>
</html>


<?php
(isset($_GET['acao'])) ? $acao = $_GET['acao'] : $acao = null;
if(isset($_GET['id']))  $id = $_GET['id'];

switch($acao){
    case 'excluir':
        echo 'excluir um registro do banco de dados '.$id;
        break;
    default:
        break;
}
?>