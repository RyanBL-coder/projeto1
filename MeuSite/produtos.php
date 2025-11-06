<?php

    require_once "admin/config.inc.php";
    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query($conexao, $sql);

?>

<div class="container mt-4" style="max-width: 800px; margin: 0 auto; text-align: center;">
    
    <?php
    if(mysqli_num_rows($resultado) > 0){
        echo "<h2>Nossos Produtos</h2>";
    ?>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Categoria</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while($dados = mysqli_fetch_array($resultado)){
            ?>
            <tr>
                <td><?=$dados['categoria']?></td>
                <td><?=$dados['preco']?></td>
                <td><?=$dados['quantidade']?></td>
            </tr>
            <?php
                }
            ?>

            </tbody>
        </table>
    </div>

    <?php
        }else{
            echo "<h2 class='text-center mt-5' style='color: #8FCDFF;'>Nenhum Produto Cadastrado!</h2>";
        }

        mysqli_close($conexao);
    ?>

</div>