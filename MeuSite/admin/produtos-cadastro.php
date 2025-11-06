<?php

require_once "config.inc.php";
?>

<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-body">

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $categoria = $_POST["categoria"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];

    $sql = "INSERT INTO produtos (categoria, preco, quantidade)
            VALUES ('$categoria', '$preco', '$quantidade')";

    if(mysqli_query($conexao, $sql)){ ?>

        <div class="alert alert-success" role="alert">
            ✅ Produto cadastrado com sucesso!
        </div>

    <?php } else { ?>

        <div class="alert alert-danger" role="alert">
            ❌ Erro ao cadastrar produto!
        </div>

    <?php } ?>

    <a href="?pg=produtos-admin" class="btn btn-primary mt-2">Voltar</a>

<?php
} else {
?>

        <div class="alert alert-warning" role="alert">
            ⚠️ Acesso negado!
        </div>
        <a href="?pg=produtos-admin" class="btn btn-primary mt-2">Voltar</a>

<?php
}

mysqli_close($conexao);
?>

        </div>
    </div>
</div>
