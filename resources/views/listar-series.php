<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series</title>
</head>

<body>
    <h1>Séries</h1>
    <ul>
        <?php foreach ($series as $serie) :
            // a variavel $series veio da funcao view chamada no controller, passando o valor 'series' com os dados definidos no controller
            ?>
            <li><?= $serie ?></li>
        <?php
        endforeach
        ?>
    </ul>

</body>

</html>