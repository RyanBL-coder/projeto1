<h2 class="text-center my-4">Cadastro de Cliente</h2>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">

            <form action="?pg=clientes-cadastro" method="post" class="p-3 border rounded shadow-sm bg-light">

                <label class="form-label">Nome:</label>
                <input type="text" name="nome" class="form-control mb-2" required>

                <label class="form-label">Cidade:</label>
                <input type="text" name="cidade" class="form-control mb-2" required>

                <label class="form-label">Estado:</label>
                <input type="text" name="estado" maxlength="2" placeholder="UF" class="form-control mb-3" required>

                <button type="submit" class="btn btn-primary w-100">Cadastrar Cliente</button>
            </form>

        </div>
    </div>
</div>
