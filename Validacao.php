<?php
$resultado = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idade = $_POST['idade']; // pega o valor digitado no input

    if ($idade >= 0 and $idade <= 13) {
        $resultado = "Criança";
        $classe = "crianca";
    } elseif ($idade >= 13 and $idade <= 17) {
        $resultado = "Adolescente";
        $classe = "adolescente";
    } elseif ($idade >= 18 and $idade <= 59) {
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title> Validação de idade </title>
</head>

<body>
    <div class="superior">
        <h3> Informe sua idade! </h3>
        <form method="post">
            <input type="number" name="idade" required value="<?= $_POST['idade'] ?? '' ?>">
            <input type="submit" value="Verificar">
            <a href="validacao.php" class="btn-limpar">Limpar</a>
        </form>
    </div>
    <?php if ($resultado): ?>
        <p class="<?= $classe ?>"><?= $resultado ?></p>
    <?php endif; ?>
</body>

</html>