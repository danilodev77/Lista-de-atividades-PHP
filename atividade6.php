<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mês</title>
</head>
<body>
    
    <?php

        $mes = $_GET['mes'];

        if ($mes > 12 or $mes < 1){
            echo "Número Inválido!";
        }

        if ($mes == 1){
            echo "Janeiro";
        } else if ($mes == 2){
            echo "Fevereiro";
        } else if ($mes == 3){
            echo "Março";
        } else if ($mes == 4){
            echo "Abril";
        } else if ($mes == 5){
            echo "Maio";
        } else if ($mes == 6){
            echo "Junho";
        } else if ($mes == 7){
            echo "Julho";
        } else if ($mes == 8){
            echo "Agosto";
        } else if ($mes == 9){
            echo "Setembro";
        } else if ($mes == 10){
            echo "Outubro";
        } else if ($mes == 11){
            echo "Novembro";
        } else if ($mes == 12) {
            echo "Dezembro";
        }
    ?>



</body>
</html>