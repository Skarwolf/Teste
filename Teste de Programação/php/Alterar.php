<?php
 
 include("Conexao.php");

 $id = mysqli_real_escape_string($conexao, $_POST['id']);
 $cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);
 $creci = mysqli_real_escape_string($conexao, $_POST['creci']);
 $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
 
 $Info = "UPDATE Cliente SET nome_cliente='$nome', cpf_cliente='$cpf', creci_cliente ='$creci', data_cadastro=NOW() WHERE id_cliente='$id'";
 $InfoCompl = mysqli_query($conexao, $Info);

$conexao->close();
header('Location:../Cadastrar.php');
?>