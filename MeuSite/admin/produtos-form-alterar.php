<?php

require_once "config.inc.php";

$codigo = $_GET['codigo'];

$sql = "SELECT * FROM produtos WHERE codigo = '$codigo'";
$resultado = mysqli_query($conexao, $sql);

if(mysqli_num_rows($resultado) > 0){
    while($dados = mysqli_fetch_array($resultado)){
        $categoria = $dados['categoria'];
        $preco = $dados['preco'];
        $quantidade = $dados['quantidade'];
        $codigo = $dados['codigo'];
    }
?>

<h2 class="mt-4">Alterar Produto</h2>

<div class="container mt-3">
    <div class="card shadow-sm">
        <div class="card-body">

            <form action="?pg=produtos-alterar" method="post">

                <input type="hidden" name="codigo" value="<?=$codigo?>">

                <div class="mb-3">
                    <label class="form-label">Categoria:</label>
                    <input type="text" name="categoria" class="form-control" value="<?=$categoria?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Preço:</label>
                    <input type="number" step="0.01" name="preco" class="form-control" value="<?=$preco?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Quantidade:</label>
                    <input type="number" name="quantidade" class="form-control" value="<?=$quantidade?>">
                </div>

                <button type="submit" class="btn btn-primary">
                    Salvar Alterações
                </button>

            </form>

        </div>
    </div>
</div>

<?php
}else{
    echo "<h2 class='mt-4 text-danger'>Nenhum produto encontrado!</h2>";
}
?>
