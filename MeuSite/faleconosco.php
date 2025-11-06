<div class="container mt-4" style="max-width: 600px; margin: 0 auto; text-align: center;">

    <h2 class="mb-4">Fale Conosco</h2>

    <form action="/action_page.php" method="post" style="text-align: left;">

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="Seu nome" name="nome" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" class="form-control" id="email" placeholder="Seu e-mail" name="email" required>
        </div>

        <div class="mb-3">
            <label for="assunto" class="form-label">Assunto:</label>
            <input type="text" class="form-control" id="assunto" placeholder="Assunto da mensagem" name="assunto" required>
        </div>

        <div class="mb-3">
            <label for="mensagem" class="form-label">Mensagem:</label>
            <textarea class="form-control" id="mensagem" placeholder="Digite sua mensagem" name="mensagem" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>

</div>
