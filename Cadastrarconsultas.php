<?php require_once 'cabecalho.php'?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<form action="Cadastrarconsultas.php">
		<h1> Cadastrar Consultas </h1>
	
		<p><input type="submit" name="enviar" value="Cadastrar"></p>
	
<?php
		if(isset($_POST['enviar'])){
	
		require_once 'model/consulta.php';
			$codigo=retornaUltimaConsulta();
			if(!$codigo){
				echo "<h2>Não há consultas cadastradas!";
			}else{
				$codigo++;
				$resposta=cadastrarConsulta();
				if(!$resposta){
					echo "<h2>Falha na tentativa de cadastro!</h2>";
				}else{
					echo "<h2>Sua consulta foi cadastrada com sucesso!</h2>";
				}
			}

		}	
		
?>
	</form>