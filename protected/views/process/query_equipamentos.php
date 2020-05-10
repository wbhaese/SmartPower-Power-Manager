<?php
include("conection.php");
$query = sprintf("SELECT * FROM equipamentos");
// executa a query
$dados = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);

if ($linha['nome_equip']) {
    # code...
}

?>