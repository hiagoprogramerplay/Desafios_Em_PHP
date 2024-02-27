<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da operação</title>
    <link rel="STYLESHEET" href="style.css">
</head>
<body>
    <main>
    <strong><h1>Resultado Final</h1></strong>
        <P>
        <?php 
            $Número = $_GET["Número"] ?? 0;
            $manipulavel = 1;
            $antecessor = ($Número - $manipulavel);
            $sucessor = ($Número + $manipulavel);
            echo "O número escolhido foi: <strong>$Número</strong>";
            echo "<p>O seu antecessor é $antecessor"; 
            echo "<p>O seu sucessor é $sucessor"; 
        ?>
        </P>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>