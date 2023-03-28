<?php
require_once 'cabecalho.php';
require_once 'model/Veterinario.php';

$consulta=listarVet();
if(!$consulta){
	echo "<h2>Nenhum Veterinario cadastrado!";
}else{

	echo "<table>";
	echo "<tr>";
	echo "<th>Identificação</th>";
	echo "<th>Nome</th>";
	echo "<th>Nascimento</th>";
	echo "<th>Telefone</th>";
	echo "<th>Data da Visita</th>";
	echo "<th>Cuidados do Veterinario</th>"
	echo "</tr>";


	while ($linha=$consulta->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$linha['id_vet']."</td>";
		echo "<td>".$linha['nome_vet']."</td>";
		echo "<td>".$linha['nasc_vet']."</td>";
		echo "<td>".$linha['tel_vet']."</td>";
		echo "<td>".$linha['data_visita']."</td>";
		echo "<td>".$linha['cuidados_vet']."</td>";
		echo "</tr>";
	}
}


?>
</body>
</html>