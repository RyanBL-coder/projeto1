<?php

require_once "config.inc.php";
?>

<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-body">

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Pegando os valores do formulário
    $codigo = $_POST['codigo'];
    $categoria = $_POST["categoria"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];

    // Atualizando o produto no banco
    $sql = "UPDATE produtos SET
                categoria = '$categoria',
                preco = '$preco',
                quantidade = '$quantidade'
            WHERE codigo = '$codigo'";

    if(mysqli_query($conexao, $sql)){ ?>

        <div class="alert alert-success" role="alert">
            ✅ Produto alterado com sucesso!
        </div>

    <?php } else { ?>

        <div class="alert alert-danger" role="alert">
            ❌ Erro ao alterar o produto!
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
