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
	echo "<th>Nome</th";
	echo "<th>Raça</th>";
	echo "<th>Data de nascimento</th>";
	echo "<th>Sexo</th>";
	echo "<th>Peso</th>";
	echo "<th>Raça do Pai</th>";
	echo "<th>Altura</th>";
	echo "<th>Raça da Mãe</th>";
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
		echo "<td>".$linha['Racamae_cav']."</td>";
		echo "</tr>";
	}
}


?>
</body>
</html>