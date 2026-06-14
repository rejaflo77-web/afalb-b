<?php
session_start();

$conn = new mysqli(
    "sql213.infinityfree.com",
    "if0_42100722",
    "afalb2023",
    "if0_42100722_afalbunidade"
);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$senha = trim($_POST['senha']);

$sql = "SELECT * FROM senhas_inscricao
        WHERE senha='$senha'";

$result = $conn->query($sql);

if ($result->num_rows == 0) {
    die("Senha inválida.");
}

$dados = $result->fetch_assoc();

if ($dados['usado'] == 'sim') {
    die("Esta senha já foi utilizada.");
}

/* Verificar duplicidade */

$nome = $_SESSION['nome'];
$dataNasc = $_SESSION['dataNasc'];
$pais = $_SESSION['pais'];

$verifica = "SELECT id FROM membros
             WHERE nome='$nome'
             AND data_nasc='$dataNasc'
             AND pais='$pais'";

$res = $conn->query($verifica);

if ($res->num_rows > 0) {
    die("Já existe uma pessoa cadastrada com estes dados.");
}

/* Inserir */

$telemovel = $_SESSION['telemovel'];
$aceita = $_SESSION['aceita'];
$foto = $_SESSION['foto'];

$sql = "INSERT INTO membros
(nome,data_nasc,pais,telemovel,aceita,foto)
VALUES
('$nome','$dataNasc','$pais','$telemovel','$aceita','$foto')";

if ($conn->query($sql) === TRUE) {

    $conn->query("
        UPDATE senhas_inscricao
        SET usado='sim'
        WHERE senha='$senha'
    ");

    session_destroy();

    echo "
    
    <h2>Cadastro realizado com sucesso!</h2>
    <a href='index.html'>Voltar ao início</a>
    ";

} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>
<link rel="stylesheet" href="validar.css">