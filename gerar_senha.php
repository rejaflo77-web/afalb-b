
<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli(
    "sql213.infinityfree.com",
    "if0_42100722",
    "afalb2023",
    "if0_42100722_afalbunidade"
);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

/* GERAR SENHA ÚNICA */
function gerarSenha() {
    return "NDB-" . strtoupper(substr(bin2hex(random_bytes(4)), 0, 8));
}

$senha = gerarSenha();

/* GARANTIR QUE NÃO REPETE */
$check = $conn->query("SELECT id FROM senhas_inscricao WHERE senha = '$senha'");

while ($check->num_rows > 0) {
    $senha = gerarSenha();
    $check = $conn->query("SELECT id FROM senhas_inscricao WHERE senha = '$senha'");
}

/* INSERIR NO BANCO */
$sql = "INSERT INTO senhas_inscricao (senha, usado)
        VALUES ('$senha', 'nao')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Senha gerada com sucesso:</h2>";
    echo "<h1 style='color:green;'>$senha</h1>";
    echo "<p>Envie esta senha ao membro após pagamento.</p>";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>