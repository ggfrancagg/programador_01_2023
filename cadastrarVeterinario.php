<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/principal.css">
	
</head>
<body>

	<form action="cadastrarVeterinario.php" id="veterinario">
		<h1>&#9877; Veterinário &#9877;</h1>
		</br>
		<p>Identidade do Veterinário: <input type="number" name="id" size="20" maxlength="20" required></p>
		<p>Nome do Veterinário: <input type="text" name="nome" size="80" maxlength="80" required></p>
		<p>Nascimento: <input type="date" name="nasc" required></p>
		<p>Telefone: <input type="text" name="tel" placeholder="(99)9999-9999" required></p>
<<<<<<< HEAD

=======
		<p>Data da visita do Veterinário: <input type="date" name="data" required></p>
		<p>Cuidados: <input type="text" name="cuidados" size="80" maxlength="80" required></p>
<<<<<<< HEAD
				<p><input type="submit" onclick="mostra()" name="enviar" value="Cadastrar"></p>
=======
<<<<<<< HEAD
		</br>
				<h3><input type="submit" name="enviar" value="cadastrar"></h3>
=======
>>>>>>> b82e56fc747dd4a109e9c39c588898dc16820921
				<p><input type="submit" name="enviar" value="Cadastrar"></p>
>>>>>>> 89e9e2169c410e4a5f76ec41d7bb057e1b28fd73
>>>>>>> 6212e129b8348027d204f2798c203f345a574891


<?php
		if(isset($_POST['enviar'])){
		$nome_vet=$_POST['nome'];
		$nasc_vet=$_POST['nasc'];
		$tel_vet=$_POST['tel'];

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

<<<<<<< HEAD
	<div id="load">
  <div>G</div>
  <div>N</div>
  <div>I</div>
  <div>D</div>
  <div>A</div>
  <div>O</div>
  <div>L</div>
</div>
	<script src="js/mensagem.js"></script>
=======

>>>>>>> 6212e129b8348027d204f2798c203f345a574891
</body>
</html>