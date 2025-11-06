<h2 class="mt-4" style="text-align: center;">Cadastro de Produtos</h2>

<div class="container mt-3" style="max-width: 600px; margin: 0 auto; text-align: center;">
    <div class="card shadow-sm">
        <div class="card-body">

            <form action="?pg=produtos-cadastro" method="post" style="text-align: left;">

                <div class="mb-3">
                    <label class="form-label">Categoria:</label>
                    <input type="text" name="categoria" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Preço:</label>
                    <input type="number" step="0.01" name="preco" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Quantidade:</label>
                    <input type="number" name="quantidade" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">
                    Cadastrar Produto
                </button>

            </form>

        </div>
    </div>
</div>
