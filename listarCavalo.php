<?php
require_once 'cabecalho.php';
require_once 'model/cavalo.php';

$consulta=listarCavalo();
if(!$consulta){
	echo "<h2>Nenhum cavalo cadastrado!";
}else{

	echo "<table>";
	echo "<tr>";
	echo "<th>Identificação</th>";
	echo "<th>Nome";
	echo "<th>Raça";
	echo "<th>Data de nascimento";
	echo "<th>Sexo";
	echo "<th>Peso";
	echo "<th>Raça do Pai";
	echo "<th>Altura";
	echo "Raça da Mãe";
	echo "</tr>";


	while ($linha=$consulta->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$linha['Identificacao_cav']."</td>";
		echo "<td>".$linha['Nome_cav']."</td>";
		echo "<td>".$linha['Datanasc_cav']."</td>";
		echo "<td>".$linha['Sexo_cav']."</td>";
		echo "<td>".$linha['Peso']."</td>";
		echo "<td>".$linha['Racapai_cav']."</td>";
		echo "<td>".$linha['Altura_cav']."</td>";
		echo "<td>".$linha['Racamae_cav'];
		echo "<tr>";
	}
}


?>
</body>
</html>