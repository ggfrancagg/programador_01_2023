<?php require_once 'cabecalho.php';
?>

<form action="buscarBovino.php" method="GET">
	<h1>Buscar</h1>
	
	<p><fieldset>

		<legend>Buscar Bovino: </legend>
			<p><input id="busca" type="search" name="buscar" placeholder="Nome, ID ou raça" required> &#128046;</p>

		<h3><input type="submit" onclick='mostra()' value="Buscar"></h3>
		</fieldset>
</p>
	
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
	
	if(isset($_GET['buscar'])){
	$busca=$_GET['buscar'];
		require_once 'model/Vaca.php';
		$consulta=buscarBovino($busca);
		if (!$consulta) {
			echo "<h5>Nenhum bovino correspondente</h5>";
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
		echo "<th class='ident'>Alterar?</th>";
		echo "<th class='ident'>Remover?</th>";
		echo "</tr>";



while ($linha=$consulta->fetch_assoc()) {
			echo "<tr class='alt'>";
			echo "<td>".$linha['Identificacao_vac']."</td>";
			echo "<td>".$linha['Nome_vac']."</td>";
			echo "<td>".$linha['Raca_vac']."</td>";
			echo "<td>".$linha['sexo_vac']."</td>";	
			echo "<td>".$linha['Datanasc_vac']."</td>";
			echo "<td>".$linha['Racamae_vac']."</td>";
			echo "<td>".$linha['Racapai_vac']."</td>";
			echo "<td>".$linha['Altura_vac']."</td>";
			echo "<td>".$linha['Peso_vac']."</td>";
			echo "<td><form id='alte' action='alterar.php' method='POST'><input type='hidden' name='Identificacao_vac' 
				value='".$linha['Identificacao_vac']."'><input id='alt' type='submit' onclick='mostra()' value='sim'></form></td>";
			echo "<td><form id='alte' action='remover.php' method='POST'><input type='hidden' name='Identificacao_vac' 
				value='".$linha['Identificacao_vac']."'><input id='alt' type='submit' onclick='mostra()' value='sim'></form></td>";
		  echo "</tr>";
			}
			echo "</table>";
		}
	}

?>
<script src="js/mensagem.js"></script>
</body>
</html>
