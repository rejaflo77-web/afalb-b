<?php
session_start();

$conn = new mysqli(
    "sql213.infinityfree.com",
    "if0_42100722",
    "afalb2023",
    "if0_42100722_afalbunidade"
);

$senha = trim($_POST['senha']);

/* VERIFICAR SENHA */
$sql = "SELECT * FROM senhas_inscricao 
        WHERE senha = '$senha' 
        AND usado = 'nao'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    /* 🔥 MARCAR COMO USADA */
    $conn->query("UPDATE senhas_inscricao 
                  SET usado = 'sim' 
                  WHERE senha = '$senha'");

    $_SESSION['liberado'] = true;
    $_SESSION['senha'] = $senha;

    header("Location: formulario.php");

} else {

    echo "Senha inválida ou já usada!";
}

$conn->close();
?>