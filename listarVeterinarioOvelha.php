<?php
require_once 'cabecalho.php';
require_once 'model/Veterinario.php';

	$consulta=listarVet("");
if(!$consulta){
	echo "<h5>Não há nenhum Veterinario cadastrado!</h5>";
}else{


	echo "<table id=listarbicho>";
		echo "<tr>";
			echo "<th class='ident'>CFMV</th>";
			echo "<th class='nome'>Nome</th>";	
			echo "<th class='data'>Data Nascimento</th>";
			echo "<th class='data'>Telefone</th>";
			echo "<th class='ident'>Ovino</th>";
			echo "<th class='data'>Data de Visita</th>";
			echo "<th class='nome'>Cuidados</th>";
		echo "</tr>";


	while ($linha=$consulta->fetch_assoc()){
			echo "<tr>";
				echo "<td>".$linha['CFMV']."</td>";
				echo "<td>".$linha['nome_vet']."</td>";
				echo "<td>".$linha['nasc_vet']."</td>";
				echo "<td>".$linha['tel_vet']."</td>";
				echo "<td>".$linha['id_ovl']."</td>";
				echo "<td>".$linha['data_visita']."</td>";
				echo "<td>".$linha['cuidados_vet']."</td>";
			echo "</tr>";
	}
		echo "</table>";
}


?>
</body>
</html>