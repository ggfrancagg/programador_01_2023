<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/cadastro.css">
	<title></title>
</head>
<body>

	<form action="cadastrarVeterinario">
		<h1>Cadastro de Veterinario</h1>
		<p>Identitadade do Veterinario:<input type="number" name="id" size="20" maxlength="20" required></p>
		<p>Nome do Veterinario:<input type="text" name="nome" size="80" maxlength="80" required></p>
		<p>Nascimento: <input type="date" name="nasc" required></p>
		<p>Telefone: <input type="text" name="tel" placeholder="(99)9999-9999" required></p>

<?php
		if(isset($_POST['nome'])){
		$nome_vet=$_POST['nome'];
		$nasc_vet=$_POST['nasc'];
		$tel_vet=$_POST['tel'];

		require_once 'model/Veterinario.php';
			$codigo=retornaUltimoVet();
			if(!$codigo){
				echo "<h2>Não tem Veterinario cadastrado!";
			}else{
				$codigo++;
				$resposta=cadastrarVeterinario($id_vet,$nome_vet,$nasc_vet,$tel_vet);
				if(!$resposta){
					echo "<h2>Falha na tentativa de cadastro!</h2>";
				}else{
					echo "<h2>Cadastrado com sucesso!</h2>";
				}
			}

		}	
		
?>
	</form>
</body>
</html>