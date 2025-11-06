<?php
    include_once "../topo.php";     // mantém o topo do site
    include_once "../menu.php";     // mantém o menu principal
?>

<div class="container mt-4">

    <h1 class="mb-3">Painel Administrativo</h1>

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <a href="?pg=clientes-admin" class="btn btn-primary me-2">Listar Clientes</a>
            <a href="?pg=produtos-admin" class="btn btn-primary">Listar Produtos</a>
        </div>
    </div>

    <?php
        // Área de conteúdo dinâmico
        if(empty($_SERVER['QUERY_STRING']) || $_GET['pg'] == "admin"){
            echo '<div class="alert alert-info">Bem-vindo ao Painel Admin! Selecione uma opção acima.</div>';
        } else {
            $pg = $_GET['pg'];

            // Segurança: impede incluir arquivos fora da pasta admin
            if(file_exists("$pg.php")){
                include_once "$pg.php";
            } else {
                echo '<div class="alert alert-danger">Página não encontrada!</div>';
            }
        }
    ?>

</div>

<?php
    include_once "../rodape.php"; // mantém o rodapé do site
?>
