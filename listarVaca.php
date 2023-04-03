<?php<?php
require_once 'cabecalho.php';
require_once 'model/Vaca.php';

$consulta=listarVaca("");
if(!$consulta){
	echo "<h5 id='texto'>Nenhuma vaquinha cadastrada!</h5>";
}else{

	echo "<table id='listarbicho'>";
	echo "<tr>";
	echo "<th class='ident'> Identificação </th>";
	echo "<th class='nome'> Nome</th>";
	echo "<th class='raça'> Raça</th>";
	echo "<th class='sexo'> Sexo </th>";
	echo "<th class='data'> Data de nascimento</th>";
	echo "<th class='raça'> Raça do Mãe </th>";
	echo "<th class='raça'> Raça da Pai </th>";
	echo "<th class='alt'> Altura </th>";	
	echo "<th class='peso'> Peso </th>";
	echo "</tr>";


	while ($linha=$consulta->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$linha['Identificacao_vac']."</td>";
		echo "<td>".$linha['Nome_vac']."</td>";
		echo "<td>".$linha['Raca_vac']."</td>";
		echo "<td>".$linha['sexo_vac']."</td>";		
		echo "<td>".$linha['Datanasc_vac']."</td>";
		echo "<td>".$linha['Racamae_vac']."</td>";	
		echo "<td>".$linha['Racapai_vac']."</td>";
		echo "<td>".$linha['Altura_vac']."</td>";
		echo "<td>".$linha['Peso_vac']."</td>";
		echo "</tr>";


	}
	echo "</table>";
}


?>

</body>
</html>
