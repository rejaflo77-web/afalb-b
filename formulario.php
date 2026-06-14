<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário AFALB</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>

<div class="server">

<form action="temporario.php" method="POST" enctype="multipart/form-data">

    <fieldset>
        <legend>FORMULÁRIO DE INSCRIÇÃO NA AFALB</legend>
        <div class="divisor">
             <section>
                <label>Nome Completo:</label>
                <input type="text" name="nome" required>

                <br><br>

                <label>Data de Nascimento:</label>
                <input type="date" name="dataNasc" required>

                <br><br>

                <label>País da Residência:</label>
                <input type="text" name="pais" required>

                <br><br>

                <label>Telemóvel:</label>
                <input type="tel" name="telemovel" required>

                <br><br>

                <label>Foto:</label>
                <input type="file" name="foto" required>

                <br><br>

                <p>
                    Você quer fazer parte desta organização e cumprir com todas as obrigações, assim como pagar quotas?
                </p>
                <div class="radio">
                <input class="nao" type="radio" id="sim" name="aceita" value="sim" required>
                <label class="sim" for="sim">Sim</label>

                <input class="nao" type="radio" id="nao" name="aceita" value="nao" required>
                <label class="sim" for="nao">Não</label>
                </div>
                <br><br>

                <button type="submit" id="salvar" disabled>
                    Salvar
                </button>
                </section>
                <section > 
                    <img class="magem" src="img/luand.png" alt="logotipo"> 
             </section>
        </div>

    </fieldset>

</form>

</div>

<script>
const sim = document.getElementById("sim");
const nao = document.getElementById("nao");
const botao = document.getElementById("salvar");

sim.addEventListener("change", () => {
    botao.disabled = false;
});

nao.addEventListener("change", () => {
    botao.disabled = true;
});
</script>

</body>
</html>