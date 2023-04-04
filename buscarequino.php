<?php require_once 'cabecalho.php';
?>

<form action="buscarEquino.php" method="GET">
	<h1>Buscar</h1>
	
	<p><fieldset>
		<legend>Buscar Equino:</legend>
			<p><input id="busca" type="search" name="busca" placeholder="Nome, ID ou raça" required> &#128052;</p>
		
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
	
		require_once 'model/Cavalo.php';

			$consulta=buscarCavalo($busca);
			if (!$consulta) {
				echo "<h2>Nenhum equino correspondente!</h2>";
			}else{

				echo "<table>";
				echo "<tr>";
				echo "<th>Código</th>";
				echo "<th>Nome</th>";
				echo "<th>Raça</th>";
				echo "<th>Data de nascimento</th>";
				echo "<th>Sexo</th>";
				echo "<th>Peso</th>";
				echo "<th>Raça do Pai</th>";
				echo "<th>Altura</th>";
				echo "<th>Raça do Mãe</th>";
				echo "<th>Alterar?</th>";
				echo "<th>Remover?</th>";
				echo "</tr>";

while ($linha=$consulta->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$linha['Identificacao_cav']."</td>";
		echo "<td>".$linha['Nome_cav']."</td>";
		echo "<td>".$linha['Raca_cav']."</td>";
		echo "<td>".$linha['Datanasc_cav']."</td>";
		echo "<td>".$linha['Sexo_cav']."</td>";
		echo "<td>".$linha['Peso']."</td>";
		echo "<td>".$linha['Racapai_cav']."</td>";
		echo "<td>".$linha['Altura_cav']."</td>";
		echo "<td>".$linha['Racamae_cav']."</td>";
		echo "<td><form id='alte' action='alterar.php' method='POST'><input type='hidden' name='Identificacao_cav' 
			value='".$linha['Identificacao_cav']."'><input id='alt' type='submit' onclick='mostra()' value='sim'></form></td>";
		echo "<td><form id='alte' action='remover.php' method='POST'><input type='hidden' name='Identificacao_cav' 
			value='".$linha['Identificacao_cav']."'><input id='alt' type='submit' onclick='mostra()' value='sim'></form></td>";
		echo "</tr>";
	}
		echo "</table>";
			}
		}

?>
<script src="js/mensagem.js"></script>
</body>
</html>
