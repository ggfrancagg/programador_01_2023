<!DOCTYPE html>
<html>
<head>
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
</html>