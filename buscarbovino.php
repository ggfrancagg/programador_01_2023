<?php require_once 'cabecalho.php';
?>

<form action="buscarbovino.php" method="GET">
	<h1>Buscar</h1>
	
	<p><fieldset>
<<<<<<< HEAD
		<legend>Buscar Bovino:</legend>
			<p><input id="busca" type="search" name="buscar" placeholder="Nome, ID ou raça" required> &#128046;</p>
=======
		<legend>Buscar Bovino: </legend>
			<p><input id="busca" type="search" name="tipo" placeholder="Nome, ID ou raça" required> &#128017;</p>
>>>>>>> 5cc9872535106ab98dfe54ac86b22e7ae89b2e77
		
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
		require_once 'model/Vaca.php';
		$consulta=buscarBovino($busca);
		if (!$consulta) {
			echo "<h5>Nenhum bovino correspondente</h5>";
		}else{
<<<<<<< HEAD
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
			echo "</tr>";
=======
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
>>>>>>> 5cc9872535106ab98dfe54ac86b22e7ae89b2e77



while ($linha=$consulta->fetch_assoc()) {
			echo "<tr class='alt'>";
			echo "<td>".$linha['Identificacao_vac']."</td>";
			echo "<td>".$linha['Nome_vac']."</td>";
			echo "<td>".$linha['Raca_vac']."</td>";
			cho "<td>".$linha['sexo_vac']."</td>";	
			echo "<td>".$linha['Datanasc_vac']."</td>";
			echo "<td>".$linha['Racamae_vac']."</td>";
			echo "<td>".$linha['Racapai_vac']."</td>";
			echo "<td>".$linha['Altura_vac']."</td>";
<<<<<<< HEAD
			echo "<td>".$linha['Altura_vac']."</td>";
			echo "</tr>";
=======
			echo "<td>".$linha['Peso_vac']."</td>";
		  echo "</tr>";
>>>>>>> 5cc9872535106ab98dfe54ac86b22e7ae89b2e77
			}
			echo "</table>";
		}
	}

?>
<script src="js/mensagem.js"></script>
</body>
</html>
