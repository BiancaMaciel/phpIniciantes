<?php
if(isset($_POST['enviar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    if(mail('bianca.maciel.c@gmail.com', $assunto, $mensagem, 'From: '.$email))
        $aviso = "Email enviado com sucesso";
    else
        $aviso = "erro ao enviar o email";
} 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Envio de dados via GET e POST</title>
</head>
<body>
    <?php if(isset($aviso)) echo $aviso; ?>
    <form action="" method="post">
        <p><label for="">Nome:</label><input type="text" name="nome"></p>
        <p><label for="">Email:</label><input type="text" name="email"></p>
        <p><label for="">Assunto:</label><input type="text" name="assunto"></p>
        <p><label for="">Mensagem:</label><textarea name="mensagem" id="" cols="30" rows="10"></textarea></p>
        <p><input type="submit" name="enviar"></p>
    </form> 
</body>
</html>
