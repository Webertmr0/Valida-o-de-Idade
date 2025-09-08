<?php
$resultado = "";
$classe = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Pegando as validações das idades
    $idade = $_POST['idade'];

    if ($idade >= 0 && $idade <= 13) {
        $resultado = "Criança";
        $classe = "crianca";
    } elseif ($idade >= 14 && $idade <= 17) {
        $resultado = "Adolescente";
        $classe = "adolescente";
    } elseif ($idade >= 18 && $idade <= 59) {
        $resultado = "Adulto(a)";
        $classe = "adulto";
    } else {
        $resultado = "Idoso(a)";
        $classe = "idoso";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Validação de idade</title>
    <link rel="stylesheet" href="styles.css?v=3">
</head>

<body>
    <!-- Todo o conteudo do site para pegar as informações das idades, acrescentei uma DIV para que a cor fique apenas no conteúdo -->
    <div class="superior">
        <h3>Informe sua idade!</h3>
        <form method="post">
            <input type="number" name="idade" min="0" required value="<?= $_POST['idade'] ?? '' ?>">
            <input type="submit" value="Verificar">
            <a href="validacao.php" class="btn-limpar">Limpar</a>
        </form>

        <?php if ($resultado): ?>
            <p class="<?= $classe ?>"><?= $resultado ?></p>
        <?php endif; ?>
    </div>
</body>

</html>
