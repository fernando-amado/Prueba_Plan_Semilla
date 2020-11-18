<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>Sincosoft</title>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <h1>Sincosoft </h1>
            <input type="number" name="credito" placeholder="Valor Crédito">
            <input type="number" name="N_cuota" placeholder="Número de cuotas">
            <input type="number" name="T_interes" placeholder="Tasa de interés">
            <button name="submit">Calcular</button>
        </form>

        <div class="main-container">
            <?php
            include_once "tabla.php"
            ?>
        </div>
        
</body>

</html>