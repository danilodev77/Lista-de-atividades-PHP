<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triângulos</title>
</head>
<body>
    
    <?php

        $l1 = $_GET['l1'];
        $l2 = $_GET['l2'];
        $l3 = $_GET['l3'];

        if ($l1 == $l2 and $l2 == $l3){
            echo "TRIÂNGULO EQUILÁTERO";
        } else if ($l1 != $l2 and $l2 != $l3) {
            echo "TRIÂNGULO ESCALENO";
        } else {
            echo "TRIÂNGULO ISÓSCELES";
        }
    ?>



</body>
</html>