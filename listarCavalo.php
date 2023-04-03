<?php
require_once 'cabecalho.php';
require_once 'model/Cavalo.php';

$consulta=listarCavalo();
if(!$consulta){
	echo "<h5 id='texto'>Nenhum cavalo cadastrado!</h5>";
}else{

	echo "<table id='listarbicho'>";
	echo "<tr>";
	echo "<th class='ident'> Identificação </th>";
	echo "<th class='nome'> Nome </th>";
	echo "<th class='raça'> Raça </th>";
	echo "<th class='sexo'> Sexo </th>";
	echo "<th class='data'> Data de nascimento </th>";
	echo "<th class='raça'> Raça da Mãe </th>";
	echo "<th class='raça'> Raça do Pai </th>";
	echo "<th class='alt'> Altura </th>";
	echo "<th class='peso'> Peso </th>";
	echo "</tr>";


	while ($linha=$consulta->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$linha['Identificacao_cav']."</td>";
		echo "<td>".$linha['Nome_cav']."</td>";
		echo "<td>".$linha['Raca_cav']."</td>";
		echo "<td>".$linha['Sexo_cav']."</td>";
		echo "<td>".$linha['Datanasc_cav']."</td>";
		echo "<td>".$linha['Racamae_cav']."</td>";
		echo "<td>".$linha['Racapai_cav']."</td>";
		echo "<td>".$linha['Altura_cav']."</td>";
		echo "<td>".$linha['Peso']."</td>";
		echo "</tr>";
	}
	echo "</table>";
}


?>
</body>
</html>