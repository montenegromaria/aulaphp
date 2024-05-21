<html lang="pt-br">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Divisão</title>
</head>

<body>

    <h2>Não temos dívidas, apenas divisões</h2>

    <form method="post" action="">
        <label for="numero">Coloque um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Confirmar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        if ($numero % 10 == 0) {
            echo "$numero é divisível por 10.";
        } elseif ($numero % 5 == 0) {
            echo "$numero é divisível por 5, mas não por 10.";
        } elseif ($numero % 2 == 0) {
            echo "$numero é divisível por 2, mas não por 5 nem por 10.";
        } else {
            echo "$numero não é divisível por 2, 5 ou 10.";
        }
    }
    ?>

</body>

</html>
