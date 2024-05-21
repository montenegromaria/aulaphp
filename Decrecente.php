<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Des com crecente</title>
</head>

<body>

    <h1>Numbers em decrecente</h1>

    <form action="" method="get">

    <label for="Numero1">Insira o primeiro número: </label>
    <input type="number" name="Numero1" id="Numero1">
    <br><br>
    <label for="Numero2">Insira o segundo número: </label>
    <input type="number" name="Numero2" id="Numero2">
    <br><br>
    <label for="Numero3">Insira o terceiro número: </label>
    <input type="number" name="Numero3" id="Numero3">
    <br><br>
    <input type="submit" value="Enviar">

    </form>

<?php

function comparar($a, $b) {
    return $b - $a;
}

if(isset($_GET['Numero1'], $_GET['Numero2'], $_GET['Numero3'])) {
    $numeros = [$_GET['Numero1'], $_GET['Numero2'], $_GET['Numero3']];

    usort($numeros, 'comparar');
    echo "<br>Números em ordem decrescente: ";

    foreach ($numeros as $numero) {
        echo "$numero ";
    }
}

?>


</body>

</html>