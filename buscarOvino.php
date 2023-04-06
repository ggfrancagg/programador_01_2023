<?php require_once 'cabecalho.php';?>

<form action="buscarOvino.php" method="GET">
	<h1>Buscar</h1>
	
	<p><fieldset>
		<legend><h2>Buscar Ovino:</h2></legend>
			<p><input id="busca" type="search" name="buscar" placeholder="Nome, ID ou raça" required> &#128017;</p>
		
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
		require_once 'model/Ovelha.php';
		$consulta=buscarOvino($busca);
		if (!$consulta) {
			echo "<h5>Nenhum ovino correspondente</h5>";
		}else{
		echo "<table id='listarbicho'>";
			echo "<tr>";
			echo "<th class='ident'> Identificação </th>";
			echo "<th class='nome'> Nome </th>";
			echo "<th class='data'> Idade </th>";
			echo "<th class='raça'> Raça </th>";
			echo "<th class='sexo'> Sexo </th>";
			echo "<th class='raça'> Cor </th>";
			echo "<th class='peso'> Peso </th>";
			echo "<th class='alt'> Altura </th>";
			echo "<th class='ident'>Alterar?</th>";
			echo "<th class='ident'>Remover?</th>";
		echo "</tr>";


	while ($linha=$consulta->fetch_assoc()) {
		echo "<tr>";
			echo "<td>".$linha['id_ovl']."</td>";
			echo "<td>".$linha['nome_ovl']."</td>";
			echo "<td>".$linha['idade_ovl']."</td>";
			echo "<td>".$linha['raca_ovl']."</td>";
			echo "<td>".$linha['sexo_ovl']."</td>";
			echo "<td>".$linha['cor_ovl']."</td>";
			echo "<td>".$linha['peso_ovl']."</td>";
			echo "<td>".$linha['altura_ovl']."</td>";
			
			echo "<td><form id='alte' action='alterar.php' method='POST'><input type='hidden' name='id_ovl' 
				value='".$linha['id_ovl']."'><input id='alt' type='submit' onclick='mostra()' value='sim'></form></td>";
			echo "<td><form id='alte' action='remover.php' method='POST'><input type='hidden' name='id_ovl' 
				value='".$linha['id_ovl']."'><input id='alt' type='submit' onclick='mostra()' value='sim'></form></td>";
			echo "</tr>";
	}
			echo "</table>";
}
}
?>

<script src="js/mensagem.js"></script>
</body>
</html>