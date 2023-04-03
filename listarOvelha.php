<?php
require_once 'cabecalho.php';
require_once 'model/Ovelha.php';

$consulta=ListarOvelha();
if(!$consulta){
	echo "<h5 id='texto'>Nenhuma ovelha cadastrada!</h5>";
}else{

	echo "<table id='listarbicho'>";
	echo "<tr>";
	echo "<th class='ident'> Identificação </th>";
	echo "<th class='nome'> Nome </th>";
	echo "<th class='data'> Idade </th>";
	echo "<th class='raça'> Raça </th>";
	echo "<th class='sexo'> Sexo </th>";
	echo "<th class='raça'> Cor </th>";
	echo "<th class='peso'> Peso </th>";
	echo "<th class='alt'> Altura </th>";
	echo "</tr>";


	while ($linha=$consulta->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$linha['id_ovl']."</td>";
		echo "<td>".$linha['nome_ovl']."</td>";
		echo "<td>".$linha['idade_ovl']."</td>";
		echo "<td>".$linha['raca_ovl']."</td>";
		echo "<td>".$linha['sexo_ovl']."</td>";
		echo "<td>".$linha['cor_ovl']."</td>";
		echo "<td>".$linha['peso_ovl']."</td>";
		echo "<td>".$linha['altura_ovl']."</td>";
		echo "</tr>";
	}
	echo "</table>";
}

?>

</body>
</html>
	