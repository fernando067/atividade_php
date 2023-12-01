<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RODRIGO MORAES</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
$valor1 = $_GET['V1']??0;
$valor2 = $_GET['V2']??0;
?>
    <main>
        <h1> Somador de valor </h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="V1">Valor 1</label>
            <input type="number" name="V1" id="v1" value="<?= $valor1 ?>">
            <label type="v2">Valor 2</label>
            <input type="number" name="V2" id="V2" value="<?= $valor2 ?>">
            <input type="submit" value="somar">
    </main>
    <section id="Resultado">
        <h2>Resultado da soma</h2>
        <?php
        $soma = $valor1 + $valor2;
        echo "<p>A soma entre os valores <strong> $valor1 </strong> e <strong> $valor2 </strong> é igual
        a <strong>$soma</strong></p>"
        ?>


    </section>
    </form>

</body>

</html>