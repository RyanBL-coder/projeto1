<?php

require_once "config.inc.php";

$sql = "SELECT * FROM produtos";
$resultado = mysqli_query($conexao, $sql);

?>

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Lista de Produtos</h2>
        <a href="?pg=produtos-form" class="btn btn-primary">Cadastrar Produto</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

<?php
if(mysqli_num_rows($resultado) > 0){
?>

            <table class="table table-striped table-bordered text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Código</th>
                        <th>Categoria</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                <?php while($dados = mysqli_fetch_array($resultado)){ ?>
                    <tr>
                        <td><?= $dados['codigo'] ?></td>
                        <td><?= $dados['categoria'] ?></td>
                        <td>R$ <?= number_format($dados['preco'], 2, ',', '.') ?></td>
                        <td><?= $dados['quantidade'] ?></td>
                        <td>
                            <a href="?pg=produtos-form-alterar&codigo=<?= $dados['codigo'] ?>" class="btn btn-warning btn-sm">
                                Editar
                            </a>
                            <a href="?pg=produtos-excluir&codigo=<?= $dados['codigo'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Deseja realmente excluir este produto?');">
                                Excluir
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>

            </table>

<?php
}else{
?>

            <div class="alert alert-info text-center">
                Nenhum produto cadastrado!
            </div>

<?php
}

mysqli_close($conexao);
?>

        </div>
    </div>
</div>
