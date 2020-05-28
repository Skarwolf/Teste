<?php
include("php/Conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$Edi_Cada = "SELECT * FROM Cliente WHERE id_cliente = '$id' ";
$Alterar = mysqli_query($conexao, $Edi_Cada);
$row_cliente = mysqli_fetch_assoc($Alterar
);


?>

<!DOCTYPE html>
<html>

<head>

    <title></title>
    <link rel="stylesheet" href="css/EstiloCD.css" />

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
    
			<form name="FormCada"  method="POST" action="php/Alterar.php">
				<fieldset>
                    <legend><b>Cadastro de Corretor</b></legend>
                    
                    <input type="hidden" name="id" value="<?php echo $row_cliente['id_cliente'];?>"

					<p class="CPF">
                       <input type="text" name="cpf"  maxlength="11" placeholder="Altera seu CPF" value="<?php echo $row_cliente['cpf_cliente'];?>">
                    </p>

                    <p class="Creci">
                        <input type="text" name="creci"   placeholder="Altera seu Creci" value="<?php echo $row_cliente['creci_cliente'];?>">
                    </p>

                    <p class="Nome">
                        <input type="text" name="nome"  placeholder="Altere seu Nome" value="<?php echo $row_cliente['nome_cliente'];?>">
                    </p>

                    <input class="BT" type="submit" onclick="return validar()" name="" value="Salvar">
                 
            	</fieldset>

            </form>






</body>
</html>