<?php require_once 'cabecalho.php';
?>

<form action="buscarVeterinario.php" method="GET">
<h1>Buscar</h1>
	
	<fieldset>
		<legend><h2>Veterinário:</h2></legend>
		<p><input type="search" name="busca" placeholder="Nome ou CFMV" required></p>
			</br>
			<p><input type="radio" name="tipo" value="veterinariocav" required> Veterinario de Equino </p>
		  <p><input  type="radio" name="tipo" value="veterinariovac" required> Veterinario de Bovino</p>
			<p><input  type="radio" name="tipo" value="veterinarioovl" required> Veterinario de Ovino</p>
			</br>
			<input id="botbus" type="submit" onclick='mostra()' value="Buscar">
		</fieldset>

	
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
				echo "<h5>Nenhum Veterinário correspondente!</h5>";
			}else{

				echo "<table id='buscaBicho'>";
				echo "<tr>";
				echo "<th class='ident'>CFMV</th>";
				echo "<th class='nome'>Nome</th>";
				echo "<th class='data'>Telefone</th>";
				echo "<th class='data'>Data da visita</th>";
				echo "<th class='ident'>Código Equino</th>";
				echo "<th class='data'>Tosa</th>";
				echo "<th class='data'>Casqueamento</th>";
				echo "<th class='nome'>Cuidados</th>";
				echo "<th class='ident'>Alterar?</th>";
				echo "<th class='ident'>Remover?</th>";
				echo "</tr>";

				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$linha['CFMV']."</td>";
				echo "<td>".$linha['Nomevet_cav']."</td>";
				echo "<td>".$linha['Telefonevet_cav']."</td>";
				echo "<td>".$linha['Datavisi_cav']."</td>";
				echo "<td>".$linha['Identificacao_cav']."</td>";
				echo "<td>".$linha['Tosa_cav']."</td>";
				echo "<td>".$linha['Casqueamento_cav']."</td>";
				echo "<td>".$linha['Cuidados_cav']."</td>";
				echo "<td><form id='alte' action='alterar.php' method='POST'><input type='hidden' name='CFMVcav' 
					value='".$linha['CFMV']."'><input id='alt' type='submit' onclick='mostra()' value='sim'></form></td>";
				echo "<td><form id='alte' action='remover.php' method='POST'><input type='hidden' name='CFMVcav' 
					value='".$linha['CFMV']."'><input id='alt' type='submit' onclick='mostra()' value='sim'></form></td>";
				echo "</tr>";
		
				}
				echo "</table>";
			}
	}else if ($tipo=='veterinariovac') {
			require_once 'model/Veterinario.php';


			$consulta=buscarVeterinarioVac($busca);
			if (!$consulta) {
				echo "<h5>Nenhum Veterinário correspondente!</h5>";  	
			}else{

				echo "<table id='buscaBicho'>";
				echo "<tr>";
				echo "<th class='ident'>CFMV</th>";
				echo "<th class='nome'>Nome</th>";
				echo "<th class='data'>Data da nascimento</th>";
				echo "<th class='data'>Telefone</th>";
				echo "<th class='ident'>Código Bovino</th>";
				echo "<th class='data'>Data da visita</th>";
				echo "<th class='data'>Casqueamento</th>";
				echo "<th class='nome'>Cuidados</th>";
				echo "<th class='ident'>Alterar?</th>";
				echo "<th class='ident'>Remover?</th>";
				echo "</tr>";

		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$linha['CFMV']."</td>";
				echo "<td>".$linha['Nomevet_vac']."</td>";
				echo "<td>".$linha['nascvet_vac']."</td>";
				echo "<td>".$linha['Telefonevet_vac']."</td>";
				echo "<td>".$linha['Identificacao_vac']."</td>";
				echo "<td>".$linha['Datavisita_vac']."</td>";
				echo "<td>".$linha['Casqueamento_vac']."</td>";
				echo "<td>".$linha['Cuidados_vac']."</td>";
				echo "<td><form id='alte' action='alterar.php' method='POST'><input type='hidden' name='CFMVvac' 
					value='".$linha['CFMV']."'><input id='alt' type='submit' onclick='mostra()' value='sim'></form></td>";
				echo "<td><form id='alte' action='remover.php' method='POST'><input type='hidden' name='CFMVvac' 
					value='".$linha['CFMV']."'><input id='alt' type='submit' onclick='mostra()' value='sim'></form></td>";
				echo "</tr>";
		
				}
				echo "</table>";
			}
	}else if ($tipo=='veterinarioovl') {
			require_once 'model/Veterinario.php';


			$consulta=buscarVeterinarioOvl($busca);
			if (!$consulta) {
				echo "<h5>Nenhum Veterinário correspondente!</h5>";
			}else{


				echo "<table id='buscaBicho'>";
				echo "<tr>";
				echo "<th class='ident'>CFMV</th>";
				echo "<th class='nome'>Nome</th>";
				echo "<th class='data'>Data da nascimento</th>";
				echo "<th class='data'>Telefone</th>";
				echo "<th class='ident'>Código Ovino</th>";
				echo "<th class='data'>Data da visita</th>";
				echo "<th class='nome'>Cuidados</th>";
				echo "<th class='ident'>Alterar?</th>";
				echo "<th class='ident'>Remover?</th>";
				echo "</tr>";

				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$linha['CFMV']."</td>";				
				echo "<td>".$linha['nome_vet']."</td>";
				echo "<td>".$linha['nasc_vet']."</td>";
				echo "<td>".$linha['tel_vet']."</td>";
				echo "<td>".$linha['id_ovl']."</td>";
				echo "<td>".$linha['data_visita']."</td>";
				echo "<td>".$linha['cuidados_vet']."</td>";
				echo "<td><form id='alte' action='alterar.php' method='POST'><input type='hidden' name='CFMVovl' 
					value='".$linha['CFMV']."'><input id='alt' type='submit' onclick='mostra()' value='sim'></form></td>";
				echo "<td><form id='alte' action='remover.php' method='POST'><input type='hidden' name='CFMVovl' 
					value='".$linha['CFMV']."'><input id='alt' type='submit' onclick='mostra()' value='sim'></form></td>";
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
