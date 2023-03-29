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
	<title></title>
</head>
<body>

	<form action="cadastrarVeterinario.php">
		<h1>Veterinario</h1>
		<p>Identitadade do Veterinario:<input type="number" name="id" size="20" maxlength="20" required></p>
		<p>Nome do Veterinario:<input type="text" name="nome" size="80" maxlength="80" required></p>
		<p>Nascimento: <input type="date" name="nasc" required></p>
		<p>Telefone: <input type="text" name="tel" placeholder="(99)9999-9999" required></p>
		<p>Data da visita do Veterinario:<input type="date" name="data" required></p>
		<p>Cuidados: <input type="text" name="cuidados" size="80" maxlength="80" required></p>
		<p><input type="submit" value="Agendar"></p>


<?php
		if(isset($_POST['nome'])){
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
</body>
>>>>>>> 5f7e6517ddf9dade28ce664e68075a88dd6e0057
</html>