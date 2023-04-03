<?php require_once 'cabecalho.php';
?>

<form action="buscar.php" method="GET">
	<h1>Buscar</h1>
	
	<p><fieldset>
		<legend>Buscar Bovino:</legend>
			<p><input id="busca" type="search" name="tipo" placeholder="Nome, ID ou raça" required> &#128046;</p>
		
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
	
	if(isset($_GET['buscar'])){
	$busca=$_GET['buscar'];
	$tipo=$_GET['tipo'];
	if ($tipo=="bovino") {
		require_once 'model/Vaca.php';
		$consulta=buscarBovino($busca);
		if (!$consulta) {
			echo "<h2>Nenhum bovino correspondente</h2>";
		}else{
			echo "<table>";
			echo "<tr class='alt'>";
			echo "<th>Código</th>";
			echo "<th>Nome</th>";
			echo "<th>Raça</th>";
			echo "<th>Peso</th>";
			echo "<th>Data de nascimento</th>";
			echo "<th>Raça da Mãe</th>";
			echo "<th>Raça do Pai</th>";
			echo "<th>Altura</th>";
			echo "<th>Sexo</th>";
			echo "<th>Alterar?</th>";
			echo "</tr>";



while ($linha=$consulta->fetch_assoc()) {
			echo "<tr class='alt'>";
			echo "<td>".$linha['Identificacao_vac']."</td>";
			echo "<td>".$linha['Nome_vac']."</td>";
			echo "<td>".$linha['Raca_vac']."</td>";
			echo "<td>".$linha['Peso_vac']."</td>";
			echo "<td>".$linha['Datanasc_vac']."</td>";
			echo "<td>".$linha['Racamae_vac']."</td>";
			echo "<td>".$linha['Racapai_vac']."</td>";
			echo "<td>".$linha['Altura_vac']."</td>";
			echo "<td>".$linha['Altura_vac']."</td>";
			echo "<td><form id='alte' action='alterar.php' method='POST'><input type='hidden' name='Identificacao_vac' 
			value='".$linha['Identificacao_vac']."'><input id='alt' type='submit' value='sim'></form></td>";
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
