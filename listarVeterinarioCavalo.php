<?php
require_once 'cabecalho.php';
require_once 'model/Veterinario.php';

	$consulta=listarVetCav("");
if(!$consulta){
	echo "<h5>Não há nenhum Veterinario cadastrado!</h5>";
}else{

	echo "<table id=listarbicho>";
		echo "<tr>";
			echo "<th class='ident'>CFMV</th>";
			echo "<th class='nome'>Nome</th>";	
			echo "<th class='data'>Telefone</th>";
			echo "<th class='ident'>Equino</th>";
			echo "<th class='data'>Data de Visita</th>";
			echo "<th class='data'>Tosa</th>";
			echo "<th class='data'>Casqueamento</th>";
			echo "<th class='nome'>Cuidados</th>";	
		echo "</tr>";


	while ($linha=$consulta->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$linha['CFMV']."</td>";
		echo "<td>".$linha['Nomevet_cav']."</td>";
		echo "<td>".$linha['Telefonevet_cav']."</td>";
		echo "<td>".$linha['Identificacao_cav']."</td>";
		echo "<td>".$linha['Datavisi_cav']."</td>";
		echo "<td>".$linha['Tosa_cav']."</td>";	
		echo "<td>".$linha['Casqueamento_cav']."</td>";
		echo "<td>".$linha['Cuidados_cav']."</td>";
		echo "</tr>";
	}
		echo "</table>";
}


?>
</body>
</html>