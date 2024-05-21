<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenar</title>
</head>
<body>
    
    <?php

        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $n3 = $_GET['n3'];

        $numeros = array($n1, $n2, $n3);

        rsort($numeros);

        echo "<h2>Números em ordem decrescente:</h2>";
        foreach ($numeros as $numero) {
            echo $numero . "<br>";
        }



    ?>



</body>
</html>