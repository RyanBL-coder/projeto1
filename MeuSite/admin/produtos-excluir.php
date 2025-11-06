<?php

require_once "config.inc.php";

$codigo = $_GET['codigo'];

$sql = "DELETE FROM produtos WHERE codigo = '$codigo'";
$resultado = mysqli_query($conexao, $sql);

?>

<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-body">

            <?php if($resultado){ ?>

                <div class="alert alert-success" role="alert">
                    ✅ Produto excluído com sucesso!
                </div>

            <?php } else { ?>

                <div class="alert alert-danger" role="alert">
                    ❌ Erro ao excluir produto!
                </div>

            <?php } ?>

            <a href="?pg=produtos-admin" class="btn btn-primary">
                Voltar
            </a>

        </div>
    </div>
</div>

<?php
mysqli_close($conexao);
?>
