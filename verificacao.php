<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Sesi</title>
</head>
<body>
    <?php

    echo "<h1> Informações do candidato </h1>";
    $nome = $_GET['nomeFuncionario'];
    $idade= $_GET['idade'];
    $sexo= $_GET['sexo'];

    echo "<h1>Funcionário $nome</h1>";

    if ($idade<25 && $sexo == 'feminino') {
        echo "<h1>Você foi aceito</h1>";
    }
    else{
        echo "<h1>Você não foi aceito</h1>";
    };
    ?>
    
</body>
</html>