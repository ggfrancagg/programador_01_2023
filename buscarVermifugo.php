<?php require_once 'cabecalho.php';?>

<form action="buscarVermifugo.php" method="GET">
	<h1>Buscar</h1>

	<?php	

	echo "<h2> Escolha qual animal deseja informações</h2>";
	echo "</br>";
	echo "<p><input type='radio'id='animal' name='animal' value='cavalo'> Equino ";
	echo "<input type='radio'id='animal' name='animal' value='ovelha'> Ovino ";
	echo "<input type='radio'id='animal' name='animal' value='vaca'> Bovino </p>";
	echo "</br>";
	echo "<h3><input type='submit' value='Enviar' onclick='mostra()'></h3>";
	echo "</form>";
	echo "</br>";

if (isset($_POST['animal'])) {
	$animal=$_POST['animal'];
	require_once "model/Vermifugo.php";
	if ($animal=="cavalo") {
		require_once "model/cavalo.php";
			echo "<form id='vermi' action='buscarVermifugo.php' method='POST'>";
		$cavalo=listarCavalo();
		if (!$cavalo) {
			echo "<h5>Não existem animais cadastrados!</h5>";
		}else{
			echo "<form id='animalcadas'>";
			echo "<h2>Equinos Cadastrados: </h2>";
			echo "<p>Escolha o animal: <select name='cavalo'>";
		while($linha=$cavalo->fetch_assoc()){
			echo "<option value='".$linha['Identificacao_cav']."'>";
			echo $linha['Nome_cav'];
			echo "</option>";
		}
			echo "</select></p>";
			echo "<p><input class='subm' type='submit' value='Escolher' onclick='mostra()'></p>";
	}echo "</form>";
	?>

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
	if ($tipo=="cavalo") {
		require_once 'model/cavalo.php';
		$consulta=buscarVermifugoCav($busca);
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



while ($linha=$consulta->fetch_assoc()) {
			echo "<tr class='alt'>";
			echo "<tr>";
		echo "<td>".$linha['Identificacao_cav']."</td>";
		echo "<td>".$linha['Nome_cav']."</td>";
		echo "<td>".$linha['Raca_cav']."</td>";
		echo "<td>".$linha['Sexo_cav']."</td>";
		echo "<td>".$linha['Datanasc_cav']."</td>";
		echo "<td>".$linha['Racamae_cav']."</td>";
		echo "<td>".$linha['Racapai_cav']."</td>";
		echo "<td>".$linha['Altura_cav']."</td>";
		echo "<td>".$linha['Peso']."</td>";
		echo "</tr>";
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
