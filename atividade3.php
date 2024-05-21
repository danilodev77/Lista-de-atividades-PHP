<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    
    <?php

        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
        $sexo = $_GET['sexo'];

        if ($idade < 25 and $sexo == "F"){
            echo "$nome ACEITA";
        } else {
            echo "$nome NÃO ACEITA";
        }
    ?>



</body>
</html>