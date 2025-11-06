<?php

    require_once "admin/config.inc.php";
    $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($conexao, $sql);

?>

<div class="container mt-4" style="max-width: 800px; margin: 0 auto; text-align: center;">

    <?php
    if(mysqli_num_rows($resultado) > 0){
        echo "<h2 class='mb-4'>Nossos Clientes</h2>";
    ?>

    <div class="table-responsive">
        <table class="table table-striped table-hover" style="text-align: left;">
            <thead class="table-primary">
                <tr>
                    <th>Nome</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while($dados = mysqli_fetch_array($resultado)){
            ?>
                <tr>
                    <td><?= $dados['nome'] ?></td>
                    <td><?= $dados['cidade'] ?></td>
                    <td><?= $dados['estado'] ?></td>
                </tr>
            <?php
                }
            ?>
            
            </tbody>
        </table>
    </div>

    <?php
        } else {
            echo "<h2 class='text-center text-muted mt-5'>Nenhum Cliente Cadastrado!</h2>";
        }

        mysqli_close($conexao);
    ?>

</div>
