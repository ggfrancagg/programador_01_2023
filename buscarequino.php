<?php require_once 'cabecalho.php';
?>

<form action="buscarEquino.php" method="GET">
	<h1>Buscar</h1>
	
	<fieldset>
		<legend>Buscar Equino:</legend>
			<p><input id="busca" type="search" name="busca" placeholder="Nome, ID ou raça" required> &#128052;</p>
		<input   id="botbus" type="submit" onclick='mostra()' value="Buscar">
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
	
		require_once 'model/Cavalo.php';

			$consulta=buscarCavalo($busca);
			if (!$consulta) {
				echo "<h5>Nenhum equino correspondente!</h5>";
			}else{

				echo "<table id='buscaBicho'>";
				echo "<tr>";
				echo "<th class='ident'>Código</th>";
				echo "<th class='nome'>Nome</th>";
				echo "<th class='raça'>Raça</th>";
				echo "<th class='data'>Data de nascimento</th>";
				echo "<th class='sexo'>Sexo</th>";
				echo "<th class='peso'>Peso</th>";
				echo "<th class='raça'>Raça do Pai</th>";
				echo "<th class='alt'>Altura</th>";
				echo "<th class='raça'>Raça do Mãe</th>";
				echo "<th class='ident'>Alterar?</th>";
				echo "<th class='ident'>Remover?</th>";
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
<?php require_once 'cabecalho.php';
?>

<form action="buscarEquino.php" method="GET">
	<h1>Buscar</h1>
	
	<fieldset>
		<legend>Buscar Equino:</legend>
			<p><input id="busca" type="search" name="busca" placeholder="Nome, ID ou raça" required> &#128052;</p>
		<input   id="botbus" type="submit" onclick='mostra()' value="Buscar">
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
	
		require_once 'model/Cavalo.php';

			$consulta=buscarCavalo($busca);
			if (!$consulta) {
				echo "<h5>Nenhum equino correspondente!</h5>";
			}else{

				echo "<table id='buscaBicho'>";
				echo "<tr>";
				echo "<th class='ident'>Código</th>";
				echo "<th class='nome'>Nome</th>";
				echo "<th class='raça'>Raça</th>";
				echo "<th class='data'>Data de nascimento</th>";
				echo "<th class='sexo'>Sexo</th>";
				echo "<th class='peso'>Peso</th>";
				echo "<th class='raça'>Raça do Pai</th>";
				echo "<th class='alt'>Altura</th>";
				echo "<th class='raça'>Raça do Mãe</th>";
				echo "<th class='ident'>Alterar?</th>";
				echo "<th class='ident'>Remover?</th>";
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
