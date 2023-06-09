<?php require_once 'cabecalho.php';
?>

<form action="buscarVacina.php" method="GET">
<h1>Buscar</h1>
	
	<fieldset>
		<legend><h2>Vacina:</h2></legend>
			</br>
			<p><input type="search" name="busca" placeholder="Nome ou Numero de identificação" required></p>
		  </br>
			<p><input type="radio" name="tipo" value="vacinasvac" required> Vacinas Bovinos</p>
			<p><input  type="radio" name="tipo" value="vacinascav" required> Vacinas Equinos</p>
			<p><input  type="radio" name="tipo" value="vacinasovl" required> Vacinas Ovinos</p>
			</br>
			<h3><input id="botbus" type="submit" onclick='mostra()' value="Buscar"></h3>
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
			if ($tipo=='vacinasvac') {
			require_once 'model/Vacina.php';


			$consulta=buscarVacinaVac($busca);
			if (!$consulta) {
				echo "<h5>Nenhuma Vacina correspondente!</h5>";
			}else{

				echo "<table id='buscaVacina'>";
				echo "<tr>";
				echo "<th class='ident'>Código</th>";				
				echo "<th class='nome'>Nome</th>";
				echo "<th class='nome'>Tipo</th>";
				echo "<th class='data'>Data aplicação</th>";
				echo "<th class='data'>Proxima aplicação</th>";
				echo "<th class='ident'>Código Bovino</th>";
				echo "<th class='ident'>Alterar?</th>";
				echo "<th class='ident'>Remover?</th>"; 	
				echo "</tr>";

				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$linha['IDvasc_vac']."</td>";				
				echo "<td>".$linha['Nomevasc_vac']."</td>";
				echo "<td>".$linha['Tipovasc_vac']."</td>";
				echo "<td>".$linha['Dataapli_vac']."</td>";
				echo "<td>".$linha['proximaapli_vac']."</td>";
				echo "<td>".$linha['Identificacao_vac']."</td>";
				echo "<td><form id='alte' action='alterarVacinaVaca.php' method='POST'><input type='hidden' name='IDvasc_vac' 
				value='".$linha['IDvasc_vac']."'><input id='alt' type='submit' onclick='mostra()' value='sim'></form></td>";
			echo "<td><form id='alte' action='remover.php' method='POST'><input type='hidden' name='Identificacao_vac' 
				value='".$linha['Identificacao_vac']."'><input id='alt' type='submit' onclick='mostra()' value='sim'></form></td>";
		  echo "</tr>";

		
				}
				echo "</table>";
			}
	}else if ($tipo=='vacinascav') {
			require_once 'model/Vacina.php';


			$consulta=buscarVacinaCav($busca);
			if (!$consulta) {
				echo "<h5>Nenhum Vacina correspondente!</h5>";
			}else{

				echo "<table id='buscaVacina'>";
				echo "<tr>";
				echo "<th class='ident'>Código</th>";	
				echo "<th class='nome'>Nome vacina</th>";		
				echo "<th class='nome'>Tipo vacina</th>";		
				echo "<th class='data'>Data aplicação</th>";
				echo "<th class='data'>Proxima aplicação</th>";	
				echo "<th class='ident'>Código Equino</th>";
				echo "<th class='ident'>Alterar?</th>";
			  echo "<th class='ident'>Remover?</th>";
				echo "</tr>";

				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$linha['IDvac_cav']."</td>";
				echo "<td>".$linha['Nomevasc_cav']."</td>";
				echo "<td>".$linha['Tipovasc_cav']."</td>";
				echo "<td>".$linha['Dataapli_cav']."</td>";
				echo "<td>".$linha['proximaapli_cav']."</td>";		
				echo "<td>".$linha['Identificacao_cav']."</td>";
				echo "<td><form id='alte' action='alterarVacinaCavalo.php' method='POST'><input type='hidden' name='IDvac_cav' 
					value='".$linha['IDvac_cav']."'><input id='alt' type='submit' onclick='mostra()' value='sim'></form></td>";
				echo "<td><form id='alte' action='remover.php' method='POST'><input type='hidden' name='IDvac_cav' 
					value='".$linha['IDvac_cav']."'><input id='alt' type='submit' onclick='mostra()' value='sim'></form></td>";
				echo "</tr>";
		
				}
				echo "</table>";
			}
	}else if ($tipo=='vacinasovl') {
			require_once 'model/Vacina.php';


			$consulta=buscarVacinaOvl($busca);
			if (!$consulta) {
				echo "<h5>Nenhum Vacina correspondente!</h5>";
			}else{


				echo "<table id='buscaVacina'>";
				echo "<tr>";
				echo "<th class='ident'>Código</th>";	
				echo "<th class='nome'>Nome vacina</th>";		
				echo "<th class='nome'>Tipo vacina</th>";		
				echo "<th class='data'>Data aplicação</th>";
				echo "<th class='data'>Proxima aplicação</th>";	
				echo "<th class='ident'>Código Ovino</th>";
				echo "<th class='ident'>Alterar?</th>";
			  echo "<th class='ident'>Remover?</th>";
				echo "</tr>";

				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$linha['IDvasc_ovl']."</td>";				
				echo "<td>".$linha['Nomevasc_ovl']."</td>";
				echo "<td>".$linha['Tipovasc_ovl']."</td>";
				echo "<td>".$linha['Dataapli_ovl']."</td>";
				echo "<td>".$linha['proximaapli_ovl']."</td>";
				echo "<td>".$linha['id_ovl']."</td>";
				echo "<td><form id='alte' action='alterarVacinaOvelha.php' method='POST'><input type='hidden' name='IDvasc_ovl' 
				value='".$linha['IDvasc_ovl']."'><input id='alt' type='submit' onclick='mostra()' value='sim'></form></td>";
			echo "<td><form id='alte' action='remover.php' method='POST'><input type='hidden' name='id_ovl' 
				value='".$linha['id_ovl']."'><input id='alt' type='submit' onclick='mostra()' value='sim'></form></td>";
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