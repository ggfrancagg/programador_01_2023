<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/principal.css">
	
</head>
<body>

	<form action="cadastrarVeterinario.php">
		<h1>Veterinário</h1>
		<p>Identitadade do Veterinário:<input type="number" name="id" size="20" maxlength="20" required></p>
		<p>Nome do Veterinário:<input type="text" name="nome" size="80" maxlength="80" required></p>
		<p>Nascimento: <input type="date" name="nasc" required></p>
		<p>Telefone: <input type="text" name="tel" placeholder="(99)9999-9999" required></p>
		<p>Data da visita do Veterinário:<input type="date" name="data" required></p>
		<p>Cuidados: <input type="text" name="cuidados" size="80" maxlength="80" required></p>
				<p><input type="submit" name="enviar" value="Cadastrar"></p>


<?php
		if(isset($_POST['enviar'])){
		$nome_vet=$_POST['nome'];
		$nasc_vet=$_POST['nasc'];
		$tel_vet=$_POST['tel'];
		$data_visita=$_POST['data'];
		$cuidados_vet=$_POST['cuidados'];

		require_once 'model/Veterinario.php';
			$codigo=retornaUltimoVet();
			if(!$codigo){
				echo "<h2>Não tem Veterinario cadastrado!";
			}else{
				$codigo++;
				$resposta=cadastrarVeterinario($CFMV,$nome_vet,$nasc_vet,$tel_vet);
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