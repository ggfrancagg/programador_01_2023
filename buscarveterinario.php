<?php require_once 'cabecalho.php';
?>

<form action="buscarVeterinario.php" method="GET">
<h1>Buscar</h1>
	<p><input type="search" name="busca" placeholder="Nome ou CFMV" required></p>
	<p><fieldset>
		<legend>Buscar Veterinário:</legend>
			
			<input id="rad" type="radio" name="tipo" value="veterinariocav" required>Veterinario de Equino &#9877;
			<input id="rad" type="radio" name="tipo" value="veterinariovac" required>Veterinario de Bovino &#9877;
			<input id="rad" type="radio" name="tipo" value="veterinarioovl" required>Veterinario de Ovino &#9877;
			
		</fieldset>
</p>
	<h3><input type="submit" onclick='mostra()' value="Buscar"></h3>
</form>

<div id="load">
  <div>G</div>
  <div>N</div>
  <div>I</div>
  <div>D</div>
  <div>A</div>
  <div>O</div>
  <div>L</div> 
</div>

<?php
	
	if(isset($_GET['busca'])){
	$busca=$_GET['busca'];
	$tipo=$_GET['tipo'];
	if ($tipo=='veterinariocav') {
			require_once 'model/Veterinario.php';


			$consulta=buscarVeterinarioCav($busca);
			if (!$consulta) {
				echo "<h2>Nenhum Veterinário correspondente!</h2>";
			}else{

				echo "<table>";
				echo "<tr>";
				echo "<th>Código</th>";
				echo "<th>Tosa</th>";
				echo "<th>Nome Veterinario</th>";
				echo "<th>Casqueamento</th>";
				echo "<th>Telefone Veterinario</th>";
				echo "<th>Cuidados</th>";
				echo "<th>Data da visita</th>";
				echo "<th>Código cavalo</th>";
				echo "</tr>";

				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$linha['CFMV']."</td>";
				echo "<td>".$linha['Tosa_cav']."</td>";
				echo "<td>".$linha['Nomevet_cav']."</td>";
				echo "<td>".$linha['Casqueamento_cav']."</td>";
				echo "<td>".$linha['Telefonevet_cav']."</td>";
				echo "<td>".$linha['Cuidados_cav']."</td>";
				echo "<td>".$linha['Datavisi_cav']."</td>";
				echo "<td>".$linha['Identificacao_cav']."</td>";
				echo "</tr>";
		
				}
				echo "</table>";
			}
	}else if ($tipo=='veterinariovac') {
			require_once 'model/Veterinario.php';


			$consulta=buscarVeterinarioVac($busca);
			if (!$consulta) {
				echo "<h2>Nenhum Veterinário correspondente!</h2>";  	
			}else{

				echo "<table>";
				echo "<tr>";
				echo "<th>Código</th>";
				echo "<th>Data da visita</th>";
				echo "<th>Nome Veterinario</th>";
				echo "<th>Telefone Veterinario</th>";
				echo "<th>Data de Nascimento</th>";
				echo "<th>Cuidados</th>";
				echo "<th>Casqueamento</th>";
				echo "<th>Código vaca</th>";
				echo "</tr>";
				
			

				
		while($linha=$consulta->fetch_assoc()) {
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
	}else if ($tipo=='veterinarioovl') {
			require_once 'model/Veterinario.php';


			$consulta=buscarVeterinarioOvl($busca);
			if (!$consulta) {
				echo "<h2>Nenhum Veterinário correspondente!</h2>";
			}else{

				echo "<table>";
				echo "<tr>";
				echo "<th>Código</th>";				
				echo "<th>Nome Veterinario</th>";
				echo "<th>Nascimento veterinario</th>";
				echo "<th>Telefone Veterinario</th>";
				echo "<th>Data da visita</th>";
				echo "<th>Cuidados</th>";
				echo "<th>Código Ovelha</th>"; 
				echo "</tr>";

				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$linha['CFMV']."</td>";				
				echo "<td>".$linha['nome_vet']."</td>";
				echo "<td>".$linha['nasc_vet']."</td>";
				echo "<td>".$linha['tel_vet']."</td>";
				echo "<td>".$linha['data_visita']."</td>";
				echo "<td>".$linha['cuidados_vet']."</td>";
				echo "<td>".$linha['id_ovl']."</td>";
				echo "</tr>";
		
				}
				echo "</table>";
			}
	}
}

	?>
<script src="js/mensagem.js"></script>
</body>
</html>
