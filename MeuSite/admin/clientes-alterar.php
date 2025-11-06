<?php

    require_once "config.inc.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];

        $sql = "UPDATE clientes SET
                nome = '$nome',
                cidade = '$cidade',
                estado = '$estado'
                WHERE id = '$id'";

        echo "<div class='msg-container'>";

        if(mysqli_query($conexao, $sql)){
            echo "<h3>Cliente alterado com sucesso!</h3>";
        }else{
            echo "<h3>Erro ao alterar cadastro do cliente!</h3>";
        }

        echo "<a class='botao-voltar' href='?pg=clientes-admin'>Voltar</a>";
        echo "</div>";

    }else{

        echo "<div class='msg-container'>";
        echo "<h2>Acesso negado!</h2>";
        echo "<a class='botao-voltar' href='?pg=clientes-admin'>Voltar</a>";
        echo "</div>";
    }

    mysqli_close($conexao);
?>