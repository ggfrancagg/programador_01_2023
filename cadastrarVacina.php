<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/cadastro.css">
</head>
<body>

<form action="cadastrarVacina.php" method="POST">
	<h1>Vacinação</h1>
	<br>
	<p>Nome: 
	<input type="text" name="nome" size="80" maxlength="80"></p>
	<p>Marca:
	<input type="text" name="marca" size="75" maxlength="75" required></p>
	<p>Lote: 
    <input type="number" name="lote" size="75" maxlength="75" required></p>
    <p>Fabricação: 
    <input type="date" name="fabricacao" size="75" maxlength="75" required></p>
    <p>Validade: 
    <input type="date" name="validade" required></p>
    <p>Tipo: <select name="tipo" required></p>
		<option value="raiva">Raiva</option>
		<option value="clostridiose">Clostridiose</option>
		<option value="linfa">Linfadenite caseosa</option>
	</select></p>
    <br>
    <p><input type="submit" class="enviar" value="Cadastrar"></p>
</form>

<?php
if(isset($_POST['nome'])){
	$nome=$_POST['nome'];
	$marca=$_POST['marca'];
	$lote=$_POST['lote'];
	$fabricacao=$_POST['fabricacao'];
	$validade=$_POST['validade'];
	require_once 'model/Vacina.php';
	$codigo=retornaUltimaVacina();
	if($codigo>=0){
		$codigo++;
		$resposta=cadastrarVacina($codigo,$nome,$marca,$lote,$fabricacao,$validade);
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