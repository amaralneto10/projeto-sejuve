<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secretaria de Juventude e Esportes</title>
</head>
<body>
    <header><h1>SEJUVE</h1></header>

    <main>
        <?php
            $n = $_GET["nome"];
            $s = $_GET["sobrenome"];
            $m = $_GET["mora"];
            echo "<p>É um prazer te conhecer, <strong>$n $s<strong>! Vi aqui que voce mora em $m, seja bem vindo(a) ao site OFICIAL da Secretaria de Juventude e Esportes de Amonatada";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>