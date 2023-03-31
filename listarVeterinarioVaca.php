<?php
require_once 'cabecalho.php';
require_once 'model/VeterinarioVac.php';

	$consulta=listarVetVac("");
if(!$consulta){
	echo "<h2>Não há nenhum Veterinario cadastrado!</h2>";
}else{

	echo "<table>";
	echo "<tr>";
	echo "<th>Identificação</th>";
	echo "<th>Data de Visita</th>";
	echo "<th>Nome </th>";	
	echo "<th>Telefone</th>";	
	echo "<th>Nascimento</th>";
	echo "<th>Cuidados</th>";
	echo "<th>Casqueamento</th>";	

	echo "<th>Vaca</th>";
		


	echo "</tr>";


	while ($linha=$consulta->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$linha['CFMV']."</td>";
		echo "<td>".$linha['Datavisita_vac']."</td>";	
		echo "<td>".$linha['Nomevet_vac']."</td>";
			echo "<td>".$linha['Telefonevet_vac']."</td>";
			echo "<td>".$linha['nascvet_vac']."</td>";	
			echo "<td>".$linha['Cuidados_vac']."</td>";
		echo "<td>".$linha['Casqueamento_vac']."</td>";

		echo "<td>".$linha['Identificacao_vac']."</td>";
		echo "</tr>";
	}
		echo "</table>";
}


?>
</body>
</html>