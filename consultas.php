<?php require_once 'cabecalho.php'?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<form action="consultas.php">
		<h1> Agendar Consultas </h1>
		<p>Identidade do Animal:<input type="number" name="identidade" size="35" maxlength="35" required></p>
		<p>Veterinário:<input type="text" name="nome" size="35" maxlength="35 required"></p>
		<p>Data:<input type="date" name="data" required></p>
		<p>Telefone:<input type="text" name="telefoneAnim" placeholder="(99)9999-9999" required></p>
		<p><input type="submit" name="enviar" value="Agendar"></p>
	

</form>
</body>
</html>