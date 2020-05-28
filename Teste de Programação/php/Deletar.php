<?php
include("Conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$Deletar = "DELETE FROM Cliente WHERE id_cliente='$id'";
$Delet = mysqli_query($conexao, $Deletar);


$conexao->close();
header('Location:../Cadastrar.php');
?>