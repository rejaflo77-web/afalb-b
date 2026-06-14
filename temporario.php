<?php
session_start();

$_SESSION['nome'] = $_POST['nome'];
$_SESSION['dataNasc'] = $_POST['dataNasc'];
$_SESSION['pais'] = $_POST['pais'];
$_SESSION['telemovel'] = $_POST['telemovel'];
$_SESSION['aceita'] = $_POST['aceita'];

$foto_nome = time() . "_" . $_FILES['foto']['name'];
$foto_tmp = $_FILES['foto']['tmp_name'];

move_uploaded_file($foto_tmp, "img/" . $foto_nome);

$_SESSION['foto'] = $foto_nome;

header("Location: bloqForm.php");
exit;
?>