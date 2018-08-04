<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Manipulação de String</title>
</head>
<body>
    <?php if(isset($aviso)) echo $aviso; ?>
    <form action="" method="post">
        <p><textarea name="mensagem" id="" cols="50" rows="10"><?php echo $_POST['mensagem']; ?></textarea></p>
        <p><input type="submit" name="enviar"></p>
    </form>
    <?php
    if(isset($_POST['enviar'])):
            //echo addslashes($_POST['mensagem']);
            echo number_format(15252.69, 2, ',','.');
    endif;
            

    ?>
</body>
</html>