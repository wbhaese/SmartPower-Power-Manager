<?php
session_start();
include_once("conection.php");
if ((isset($_POST['cpf'])) && (isset($_POST['senha']))) {
    $cpf               = mysqli_real_escape_string($conexao, $_POST['cpf']);
    $senha             = mysqli_real_escape_string($conexao, $_POST['senha']);
    $senha             = md5($senha);
    $result_usuario    = "SELECT * FROM usuarios WHERE cpf = '$cpf' && senha = '$senha' LIMIT 1";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);
    $resultado         = mysqli_fetch_assoc($resultado_usuario);
    if (empty($resultado)) {
        $_SESSION['loginErro'] = $cpf . " e1 " . $senha;
        header("Location: index.php");
    } elseif (isset($resultado)) {
        header("Location: ../pages/admin.php");
        $_SESSION['nome'] = $resultado['nome'];
    } else {
        $_SESSION['loginErro'] = $cpf . " e2 " . $senha;
        echo $cpf;
        header("Location: index.php");
    }
} else {
    $_SESSION['loginErro'] = "Usuário ou senha inválido3";
    header("Location: index.php");
}