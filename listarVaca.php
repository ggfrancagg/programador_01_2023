<?php<?php
require_once 'cabecalho.php';
require_once 'model/Vaca.php';

$consulta=listarVaca();
if(!$consulta){
	echo "<h2>Nenhuma vaquinha cadastrada!";
}else{

	echo "<table>";
	echo "<tr>";
	echo "<th>Identificação</th>";
	echo "<th>Nome</th>";
	echo "<th>Raça</th>";
	echo "<th>Data de nascimento</th>";
	echo "<th>Sexo</th>";
	echo "<th>Raça do Mãe</th>";
	echo "<th>Raça da Pai</th>";
	echo "<th>Altura</th>";
	echo "<th>ID reprodução</th>";
	echo "<th>ID vacina</th>";	
	echo "<th>Peso</th>";
	echo "</tr>";


	while ($linha=$consulta->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$linha['Identificacao_vac']."</td>";
		echo "<td>".$linha['Nome_vac']."</td>";
		echo "<td>".$linha['raca_vac']."</td";
		echo "<td>".$linha['Datanasc_vac']."</td>";
		echo "<td>".$linha['Sexo_vac']."</td>";		
		echo "<td>".$linha['Racamae_vac']."</td>";	
		echo "<td>".$linha['Racapai_vac']."</td>";
		echo "<td>".$linha['Altura_vac']."</td>";
		echo "<td>".$linha['IDrepr_vac']."</td>";
		echo "<td>".$linha['IDvasc_vac']."</td>";
		echo "<td>".$linha['Peso_vac']."</td>";
		echo "</tr>";


	}
}


?>
</body>
</html>
