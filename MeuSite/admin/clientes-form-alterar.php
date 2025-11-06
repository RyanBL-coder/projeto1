<?php

    require_once 'config.inc.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            $nome = $dados['nome'];
            $cidade = $dados['cidade'];
            $estado = $dados['estado'];
            $id = $dados['id'];
        }
?>

<h2 class="titulo-pagina" style="text-align: center;">Alterar Cliente</h2>

<div class="form-container" style="max-width: 500px; margin: 0 auto;">
    <form action="?pg=clientes-alterar" method="post">

        <input type="hidden" name="id" value="<?=$id?>">

        <label>Nome:</label>
        <input type="text" name="nome" value="<?=$nome?>" required><br>

        <label>Cidade:</label>
        <input type="text" name="cidade" value="<?=$cidade?>" required><br>

        <label>Estado:</label>
        <input type="text" name="estado" value="<?=$estado?>" maxlength="2" required><br>

        <input type="submit" value="Salvar Alterações" class="botao">
    </form>
</div>

<?php
    }else{
        echo "<h2 style='text-align: center;'>Nenhum cliente encontrado!</h2>";
    }
?>
