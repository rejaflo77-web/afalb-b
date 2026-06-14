<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso ao Formulário</title>
    <link rel="stylesheet" href="bloqForm.css">
</head>
<body>

<div class="container">

    <div class="icone">🔒</div>

    <h2>Inscrição Bloqueada</h2>

    <p>
        Para concluir a inscrição, deve primeiro efetuar o pagamento da quota e da taxa de inscrição.
    </p>

    <h3>Contacte um dos responsáveis:</h3>

    <div class="botoes">
        <a href="https://wa.me/245955368780" target="_blank">
            WhatsApp África
        </a>

        <a href="https://wa.me/351920216835" target="_blank">
            WhatsApp Europa
        </a>
    </div>

    <form action="validar_senha.php" method="POST">
        <label>Senha de Confirmação</label>
        <input type="password" name="senha" placeholder="Digite a senha" required>

        <button type="submit">
            Confirmar Pagamento
        </button>
    </form>

</div>

</body>
</html>