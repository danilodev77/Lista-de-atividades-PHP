<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ler números</title>
</head>
<body>
    
    <?php

        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $soma = $n1 + $n2;

        if ($soma > 20){
            $resultado = $soma + 8;
        } else {
            $resultado = $soma - 5;
        }

        echo "<h1> O resultado do cálculo é $resultado</h1>";

    ?>



</body>
</html>