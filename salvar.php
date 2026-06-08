<?php

$host = "sql213.infinityfree.com";
$usuario = "if0_42100722";
$senha = "afalb2023";
$banco = "if0_42100722_afalbunidade";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$dataNasc = $_POST['dataNasc'];
$pais = $_POST['pais'];
$telemovel = $_POST['telemovel'];
$aceita = $_POST['aceita'];

/* VERIFICAR DUPLICIDADE */
$verifica = "SELECT id FROM membros 
             WHERE nome = '$nome' 
             AND data_nasc = '$dataNasc' 
             AND pais = '$pais'";

$resultado = $conn->query($verifica);

if ($resultado->num_rows > 0) {
    die("Erro: Já existe uma pessoa cadastrada com este nome, data de nascimento e país.");
}

/* ===== UPLOAD DA IMAGEM ===== */
$foto_nome = $_FILES['foto']['name'];
$foto_tmp = $_FILES['foto']['tmp_name'];

$destino = "img/" . $foto_nome;

move_uploaded_file($foto_tmp, $destino);

/* ===== INSERIR NO BANCO ===== */
$sql = "INSERT INTO membros (nome, data_nasc, pais, telemovel, aceita, foto)
VALUES ('$nome', '$dataNasc', '$pais', '$telemovel', '$aceita', '$foto_nome')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();

?>