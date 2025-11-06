<?php

    require_once "config.inc.php";
    $id = $_GET['id'];

    $sql = "DELETE FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);
?>

<div class="msg-container">
    <?php
        if($resultado){
            echo "<h3>Registro excluído com sucesso!</h3>";
        }else{
            echo "<h3>Erro ao excluir registro!</h3>";
        }
    ?>
    <a class="botao-voltar" href='?pg=clientes-admin'>Voltar</a>
</div>

<?php
    mysqli_close($conexao);
?>
