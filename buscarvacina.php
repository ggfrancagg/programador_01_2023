<?php require_once 'cabecalho.php';
?>

<form action="buscarVacina.php" method="GET">
<h1>Buscar</h1>
	<p><input type="search" name="busca" placeholder="Nome ou Numero de identificação" required></p>
	<p><fieldset>
		<legend>Buscar Vacina:</legend>
			
			<input id="rad" type="radio" name="tipo" value="vacinasvac" required>Vacinas Bovinos
			<input id="rad" type="radio" name="tipo" value="vacinascav" required>Vacinas Equinos
			<input id="rad" type="radio" name="tipo" value="vacinasovl" required>Vacinas Ovinos
			
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
			if ($tipo=='vacinasvac') {
			require_once 'model/Vacina.php';


			$consulta=buscarVacinaVac($busca);
			if (!$consulta) {
				echo "<h2>Nenhuma Vacina correspondente!</h2>";
			}else{

				echo "<table>";
				echo "<tr>";
				echo "<th>Código</th>";				
				echo "<th>Nome</th>";
				echo "<th>Tipo</th>";
				echo "<th>Data aplicação</th>";
				echo "<th>Proxima aplicação</th>";
				echo "<th>Código Bovino</th>"; 	
				echo "</tr>";

				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$linha['IDvasc_vac']."</td>";				
				echo "<td>".$linha['Nomevasc_vac']."</td>";
				echo "<td>".$linha['Tipovasc_vac']."</td>";
				echo "<td>".$linha['Dataapli_vac']."</td>";
				echo "<td>".$linha['proximaapli_vac']."</td>";
				echo "<td>".$linha['Identificacao_vac']."</td>";
				echo "</tr>";
		
				}
				echo "</table>";
			}
	}else if ($tipo=='vacinascav') {
			require_once 'model/Vacina.php';


			$consulta=buscarVacinaCav($busca);
			if (!$consulta) {
				echo "<h2>Nenhum Vacina correspondente!</h2>";
			}else{

				echo "<table>";
				echo "<tr>";
				echo "<th>Código</th>";				
				echo "<th>Data aplicação</th>";
				echo "<th>Proxima aplicação</th>";
				echo "<th>Tipo vacina</th>";
				echo "<th>Nome vacina</th>";				
				echo "<th>Código Equino</th>"; 
				echo "</tr>";

				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$linha['IDvac_cav']."</td>";				
				echo "<td>".$linha['Dataapli_cav']."</td>";
				echo "<td>".$linha['proximaapli_cav']."</td>";
				echo "<td>".$linha['Tipovasc_cav']."</td>";
				echo "<td>".$linha['Nomevasc_cav']."</td>";				
				echo "<td>".$linha['Identificacao_cav']."</td>";
				echo "</tr>";
		
				}
				echo "</table>";
			}
	}else if ($tipo=='vacinasovl') {
			require_once 'model/Vacina.php';


			$consulta=buscarVacinaOvl($busca);
			if (!$consulta) {
				echo "<h2>Nenhum Vacina correspondente!</h2>";
			}else{

				echo "<table>";
				echo "<tr>";
				echo "<th>Código</th>";				
				echo "<th>Nome vacina</th>";
				echo "<th>Tipo vacina</th>";
				echo "<th>Data aplicação</th>";
				echo "<th>Proxima aplicação</th>";								
				echo "<th>Código Ovino</th>";
				echo "</tr>";

				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$linha['IDvasc_ovl']."</td>";				
				echo "<td>".$linha['Nomevasc_ovl']."</td>";
				echo "<td>".$linha['Tipovasc_ovl']."</td>";
				echo "<td>".$linha['Dataapli_ovl']."</td>";
				echo "<td>".$linha['proximaapli_ovl']."</td>";				
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