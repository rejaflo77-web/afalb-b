<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
 <div class="server">
     <form action="salvar.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Formulário</legend>
        <div class="divisor">
            <section>
            <div>
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <br>

            <div>
                <label for="dataNasc">Data de Nascimento:</label>
                <input type="date" id="dataNasc" name="dataNasc" required>
            </div>

            <br>

            <div>
                <label for="pais">País da Residência:</label>
                <input type="text" id="pais" name="pais" required>
            </div>

            <br>

            <div>
                <label for="telemovel">Telemóvel:</label>
                <input type="tel" id="telemovel" name="telemovel" placeholder="Telemóvel" required>
            </div>

            <br>

            <div>
                <label for="foto">Foto:</label>
                <input type="file" id="foto" name="foto" required>
            </div>

            <br>

            <p>
                Você quer fazer parte desta organização e cumprir com todas as
                obrigações, assim como pagar quotas?
            </p>
            <div class="radio">
            <input type="radio" id="sim" name="aceita" value="sim" required>
            <label class="sim" for="sim">Sim</label>

            <input type="radio" id="nao" name="aceita" value="nao" required>
            <label class="nao" for="nao">Não</label>

            <br><br>
            </div>
            <button type="submit" id="salvar" disabled>Salvar</button>
            </section>
            <section >
             <img class="magem" src="img/luand.png" alt="logotipo">  
            </section>
            </div>
        </fieldset>
    </form>

  </div>
   
<script src="form.js"></script>
</body>
</html>