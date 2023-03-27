<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/cadastro.css">
</head>
<body>

<form action="cadastrarOvelha.php" method="POST">
	<h1>Cadastro de Ovelha</h1>
	<br>
	<p>Nome: 
	<input type="text" name="nome" size="80" maxlength="80"></p>
	<p>Idade:
	<input type="number" name="idade" size="75" maxlength="75" required></p>
	<p>Sexo: 
    <input type="radio" name="sexo" value="F">F
	<input type="radio" name="sexo" value="M">M</p>
    <p>Raça: 
    <input type="text" name="raca" size="75" maxlength="75" required></p>
    <p>Cor: 
    <input type="text" name="cor" required></p>
    <p>Peso: 
    <input type="text" name="peso" required></p>
    <p>Altura: 
    <input type="text" name="altura" required></p>
    <br>
    <p><input type="submit" class="enviar" value="Cadastrar"></p>
</form>

<?php
if(isset($_POST['nome'])){
	$nome=$_POST['nome'];
	$idade=$_POST['idade'];
	$sexo=$_POST['sexo'];
	$raca=$_POST['raca'];
	$cor=$_POST['cor'];
	$peso=$_POST['peso'];
	$altura=$_POST['altura'];
	require_once 'model/Ovelha.php';
	$codigo=retornaUltimaOvelha();
	if($codigo>=0){
		$codigo++;
		$resposta=cadastrarOvelha($codigo,$nome,$idade,$raca,$sexo,$cor,$peso,$altura);
		if(!$resposta){
			echo "<h2>Falha na tentativa de cadastro!</h2>";
		}else{
			echo "<h2>Cadastrado com sucesso!</h2>";
		}
	}else{
		echo "<h2>Não há ovelha cadastrada</h2>";
	}
}

?>

</body>
</form>
</html>