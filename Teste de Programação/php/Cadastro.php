<?php
 
 include("Conexao.php");

 $cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);
 $creci = mysqli_real_escape_string($conexao, $_POST['creci']);
 $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
 
 $Info = "INSERT INTO Cliente (nome_cliente, cpf_cliente, creci_cliente, data_cadastro) VALUES ('$nome', '$cpf', '$creci', NOW())";
 $InfoCompl = mysqli_query($conexao, $Info);

 $conexao->close();
 header('Location:../Cadastrar.php');