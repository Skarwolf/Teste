<?php
 include("php/Conexao.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Corretor</title>

	<link rel="stylesheet" href="css/Estilo.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script type="text/javascript">
		function validar(){
			var cpf = FormCada.cpf.value; 
			var nome = FormCada.nome.value;
			var creci = FormCada.creci.value;


			if(nome == ""){
				alert('Preencha o campo nome.');
				FormCada.nome.focus();
				return false;
			}
			else if(nome.length <= 3){
				alert('No minimo 2 Caracteres em nome');
				FormCada.nome.focus();
				return false;
			}

			if(creci == ""){
				alert('Preencha o campo creci.');
				FormCada.creci.focus();
				return false;
			}
			else if(creci.length <= 3){
				alert('No minimo 2 Caracteres em Creci');
				FormCada.cpf.focus();
				return false; 

			}

			if(cpf == ""){
				alert('Preencha o campo CPF');
				FormCada.cpf.focus();
				return false;
			}
			else if(cpf.length <= 10){
				alert('Cpf Incorreto');
				FormCada.cpf.focus();
				return false; 

			}
		}
	
	</script>

</head>
<body>
		<div class="Inter"> 

			<form name="FormCada"  method="POST" action="php/Cadastro.php">
				<fieldset>
					<legend><b>Cadastro de Corretor</b></legend>

					<p class="CPF">
                       <input type="text" name="cpf"  maxlength="11" placeholder="Digite seu CPF">
                    </p>

                    <p class="Creci">
                        <input type="text" name="creci"   placeholder="Digite seu Creci" >
                    </p>

                    <p class="Nome">
                        <input type="text" name="nome"  placeholder="Digite seu Nome">
                    </p>

                    <input class="BT" type="submit" onclick="return validar()" name="" value="Cadastrar">

            	</fieldset>

            </form>

		 </div>

		 <div ID="tabela">

			 <h1 Id="titulo">Lista de Cadastros</h1>
			 			
			 <?php
			 $result_cadastro = "SELECT * FROM Cliente";
			 $resultado_cadastro = mysqli_query($conexao, $result_cadastro);
			 while($row_cada = mysqli_fetch_assoc($resultado_cadastro)){
				 			
				 echo "<b>ID: </b>". $row_cada['id_cliente'] . "<br>";
				 echo "<b>nome: </b>". $row_cada['nome_cliente'] .  "<br>";
				 echo "<b>cpf: </b>". $row_cada['cpf_cliente'] . "<br><hr>";
				 echo "<b><a href='EditarCD.php?id=" . $row_cada['id_cliente'] ."'>Editar</a><br><hr>";
				 echo "<a href='php/Deletar.php?id=". $row_cada['id_cliente'] ."'>Deletar</a><br><hr>";

			 }
			 ?>
		 	
		 </div>
    

</body>
</html>



<style>
#tabela{
	position: relative;
	border: 2px solid #000000;
	left:25%;
	top:20px;
	width: 50%;
	border-radius: 4px;
	padding: 5px 20px 5px 5px;
}
#titulo{
	text-align:center;
}

	</style>