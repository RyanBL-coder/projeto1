<?php

    require_once "config.inc.php";

    $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($conexao, $sql);
?>

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Lista de Clientes</h2>
        <a href="?pg=clientes-form" class="btn btn-success">+ Cadastrar Cliente</a>
    </div>

    <?php
        if(mysqli_num_rows($resultado) > 0){
    ?>
    
    <table class="table table-striped table-hover">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th style="width: 150px;">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($dados = mysqli_fetch_array($resultado)){
            ?>
            <tr>
                <td><?= $dados['id'] ?></td>
                <td><?= $dados['nome'] ?></td>
                <td><?= $dados['cidade'] ?></td>
                <td><?= $dados['estado'] ?></td>
                <td>
                    <a href="?pg=clientes-form-alterar&id=<?= $dados['id'] ?>" class="btn btn-sm btn-primary">Editar</a>
                    <a href="?pg=clientes-excluir&id=<?= $dados['id'] ?>" class="btn btn-sm btn-danger"
                       onclick="return confirm('Tem certeza que deseja excluir este cliente?');">
                       Excluir
                    </a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>

    <?php
        }else{
            echo "<div class='alert alert-warning mt-3'>Nenhum cliente cadastrado!</div>";
        }

        mysqli_close($conexao);
    ?>

</div>
