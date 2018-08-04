<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <?php
    $idade = 25;
    $idade2 = '25';
    $altura = 1.75;
    $nome = "Bianca";
    $casada = true;

    $cadastro = array('cliente1', 'cliente2', 'cliente3');

    echo $idade;
    echo gettype($idade);

    echo $idade + $idade2;
    echo "Olá meu nome é $nome e eu tenho $idade anos.";
    
    var_dump($cadastro);

    ?>
    
</body>
</html>
