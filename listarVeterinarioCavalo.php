<?php
require_once 'cabecalho.php';
require_once 'model/Veterinario.php';

	$consulta=listarVetCav("");
if(!$consulta){
	echo "<h5>Não há nenhum Veterinario cadastrado!</h5>";
}else{

	echo "<table>";
	echo "<tr>";
	echo "<th>Identificação</th>";
	echo "<th>Tosa</th>";
	echo "<th>Nome </th>";
	echo "<th>Casqueamento</th>";
	echo "<th>Telefone</th>";
	echo "<th>Cuidados</th>";	
	echo "<th>Data de Visita</th>";
	echo "<th>Cavalo</th>";
	echo "</tr>";


	while ($linha=$consulta->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$linha['CFMV']."</td>";
		echo "<td>".$linha['Tosa_cav']."</td>";	
		echo "<td>".$linha['Nomevet_cav']."</td>";
	
		echo "<td>".$linha['Casqueamento_cav']."</td>";
		echo "<td>".$linha['Telefonevet_cav']."</td>";
		echo "<td>".$linha['Cuidados_cav']."</td>";
		echo "<td>".$linha['Datavisi_cav']."<td>";
		echo "<td>".$linha['Identificacao_cav']."</td>";
		echo "</tr>";
	}
		echo "</table>";
}


?>
</body>
</html>