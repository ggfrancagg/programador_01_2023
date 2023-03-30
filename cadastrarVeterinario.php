<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/cadastro.css">
</head>
<body>

<form action="cadastrarVeterinario.php" method="POST">
	<h1>Cadastro de Veterinário</h1>
	<br>
	<p>Nome: 
	<input type="text" name="nome" size="80" maxlength="80"></p>
	<p>Data de Nascimento:
	<input type="date" name="data" required></p>
	<p>Telefone: 
    <input type="text" name="telefone" required></p>
    <p>Data de Visita: 
    <input type="date" name="visita" required></p>
    <p>Cuidados: 
    <input type="text" name="cuidados" required></p>
    <br>
    <p><input type="submit" class="enviar" value="Cadastrar"></p>
</form>

<?php
if(isset($_POST['nome'])){
	$nome=$_POST['nome'];
	$data=$_POST['data'];
	$telefone=$_POST['telefone'];
	$visita=$_POST['visita'];
	$cuidados=$_POST['cuidados'];
	require_once 'model/Veterinario.php';
	$codigo=retornaUltimoVeterinario();
	if($codigo>=0){
		$codigo++;
		$resposta=cadastrarVeterinario($codigo,$nome,$data,$telefone,$visita,$cuidados);
		if(!$resposta){
			echo "<h2>Falha na tentativa de cadastro!</h2>";
		}else{
			echo "<h2>Cadastrado com sucesso!</h2>";
		}
		
		}else{
		echo "<h2>Não há veterinário cadastrado</h2>";
	}
}

?>

</body>
</form>
=======
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
		<p>Data da visita do Veterinário: <input type="date" name="data" required></p>
		<p>Cuidados: <input type="text" name="cuidados" size="80" maxlength="80" required></p>
<<<<<<< HEAD
				<p><input type="submit" onclick="mostra()" name="enviar" value="Cadastrar"></p>
=======
<<<<<<< HEAD
		</br>
				<h3><input type="submit" name="enviar" value="cadastrar"></h3>
=======
				<p><input type="submit" name="enviar" value="Cadastrar"></p>
>>>>>>> 89e9e2169c410e4a5f76ec41d7bb057e1b28fd73
>>>>>>> 6212e129b8348027d204f2798c203f345a574891


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
>>>>>>> 5f7e6517ddf9dade28ce664e68075a88dd6e0057
</html>