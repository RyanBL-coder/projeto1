<?php

    require_once "config.inc.php";

    // Apenas se veio de um formulário
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $nome = $_POST["nome"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];

        $sql = "INSERT INTO clientes (nome, cidade, estado)
                VALUES ('$nome', '$cidade', '$estado')";

        echo "<div class='msg-container' style='
                max-width: 500px;
                margin: 60px auto;
                text-align: center;
                padding: 25px;
                border-radius: 12px;
                border: 1px solid #dcdcdc;
                background: #ffffff;
                box-shadow: 0 2px 8px rgba(0,0,0,0.07);
             '>";

        if(mysqli_query($conexao, $sql)){
            echo "<h3>Cliente cadastrado com sucesso!</h3>";
        }else{
            echo "<h3>Erro ao cadastrar cliente!</h3>";
        }

        echo "<a class='botao-voltar' href='?pg=clientes-admin' style='
                display: inline-block;
                margin-top: 20px;
                padding: 10px 18px;
                background: #0d6efd;
                color: #fff;
                border-radius: 8px;
                text-decoration: none;
             '>Voltar</a>";
        echo "</div>";

    }else{

        echo "<div class='msg-container' style='
                max-width: 500px;
                margin: 60px auto;
                text-align: center;
                padding: 25px;
                border-radius: 12px;
                border: 1px solid #dcdcdc;
                background: #ffffff;
                box-shadow: 0 2px 8px rgba(0,0,0,0.07);
             '>";
        echo "<h2>Acesso negado!</h2>";
        echo "<a class='botao-voltar' href='?pg=clientes-admin' style='
                display: inline-block;
                margin-top: 20px;
                padding: 10px 18px;
                background: #0d6efd;
                color: #fff;
                border-radius: 8px;
                text-decoration: none;
             '>Voltar</a>";
        echo "</div>";

    }

    mysqli_close($conexao);
?>
