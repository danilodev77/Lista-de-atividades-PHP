<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisibilidade</title>
</head>
<body>
    <?php

        $numero = $_GET['numero'];
        $resto10 = $numero % 10;
        $resto5 = $numero % 5;
        $resto2 = $numero % 2;
        
        if($resto10 == 0 and $resto5 == 0 and $resto2 == 0){
            echo "ESSE NÚMERO É DIVISÍVEL POR 2, 5 E 10";
        } else if ($resto2 == 0 and $resto5 != 0 and $resto10 != 0){
            echo "ESSE NÚMERO É DIVISÍVEL POR 2 APENAS";
        } else if ($resto2 != 0 and $resto5 == 0 and $resto10 == 0){
            echo "ESSE NÚMERO É DIVISÍVEL POR 5 E POR 10";
        } else if ($resto2 != 0 and $resto5 == 0 and $resto10 != 0){
            echo "ESSE NÚMERO É DIVISÍVEL POR 5";
        }
    ?>
</body>
</html>