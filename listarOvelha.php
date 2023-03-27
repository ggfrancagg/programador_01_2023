<?php
require_once 'cabecalho.php';
require_once 'model/ovelha.php';

$consulta=ListarOvelha();
if(!$consulta){
	echo "<h2>Nenhuma ovelha cadastrada!";
}else{

	echo "<table>";
	echo "<tr>";
	echo "<th>Id</th>";
	echo "<th>Nome";
	echo "<th>Idade";
	echo "<th>Raça";
	echo "<th>Sexo";
	echo "<th>Cor";
	echo "<th>peso";
	echo "<th>Altura";
	echo "</tr>";


	while ($linha=$consulta->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$linha['id_ovl']."</td>";
		echo "<td>".$linha['Nome_ovl']."</td>";
		echo "<td>".$linha['raca_ovl']."</td>";
		echo "<td>".$linha['Sexo_ovl']."</td>";
		echo "<td>".$linha['cor_ovl']."</td>";
		echo "<td>".$linha['peso_ovl']."</td>";
		echo "<td>".$linha['altura_ovl']."</td>";
		echo "</tr>";
	}
}

?>

</body>
</html>
	