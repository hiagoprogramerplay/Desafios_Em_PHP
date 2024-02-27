<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numeros aleatorios</title>
    <link rel="STYLESHEET" href="style.css">
</head>
<body>
    <main>
        <strong><h1>Trabalhando com números aleatórios</h1></strong>
        <?php 
        $min = 0;
        $max = 100;
        $num = mt_rand($min, $max);

        echo "<p>Gerando um número aleatório entre $min e $max... <br>O valor gerado foi <strong>$num</strong><p/>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F054; De novo</button>
</main>
</body>
</html>