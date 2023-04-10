<?php require_once 'cabecalho.php';?>

<form id="vermifugo" action="aplicacaoVacina.php" method="POST">
	<h1>&#128137; Vacinação &#128137;</h1>
	<br>
	<?php

	echo "<h2> Escolha qual animal deseja registrar:</h2>";
	echo "</br>";
	echo "<p><input type='radio'id='animal' name='animal' value='cavalo'> Equino ";
	echo "<input type='radio'id='animal' name='animal' value='ovelha'> Ovino ";
	echo "<input type='radio'id='animal' name='animal' value='vaca'> Bovino </p>";
	echo "</br>";
	echo "<h3><input type='submit'id='botao' value='Enviar'></h3>";
	echo "</form>";
	echo "</br>";

if(isset($_POST['animal'])){
	$animal=$_POST['animal'];
	require_once "model/Vacina.php";
	if ($animal=="cavalo") {
		require_once "model/cavalo.php";
			echo "<form id='vac' action='aplicacaoVacina.php' method='POST'>";
		$cavalo=listarCavalo();
		if (!$cavalo) {
			echo "<h5>Não existem animais cadastrados!</h5>";
		}else{
			echo "<form id='animalcadas'>";
			echo "<h2>Equinos Cadastrados: </h2>";
			echo "<p>Escolha o Cavalo: <select name='cavalo'>";
		while($linha=$cavalo->fetch_assoc()){
			echo "<option value='".$linha['Identificacao_cav']."'>";
			echo $linha['Nome_cav'];
			echo "</option>";
		}
			echo "</select></p>";
			echo "<p><input class='subm' type='submit' value='Escolher'></p>";
			}echo "</form>";
	}else if ($animal=="ovelha"){
		require_once "model/Ovelha.php";
			echo "<form id='vac' action='aplicacaoVacina.php' method='POST'>";
		$ovelha=listarOvelha();
		if (!$ovelha) {
			echo "<h2>Não existem animais cadastrados!</h2>";
		}else{
			echo "<form id='animalcadas'>";
			echo "<h2>Ovinos Cadastrados: </h2>";
			echo "<p>Escolha a Ovelha: <select name='ovelha'>";
		while($linha=$ovelha->fetch_assoc()){
			echo "<option value='".$linha['id_ovl']."'>";
			echo $linha['nome_ovl'];
			echo "</option>";
		}
		echo "</select></p>";
		echo "<p><input class='subm' type='submit' value='Escolher'></p>";
	}echo "</form>";
	}else if ($animal=="vaca") {
		require_once "model/Vaca.php";
			echo "<form id='vac' action='aplicacaoVacina.php' method='POST'>";
		$vaca=listarVaca();
		if (!$vaca) {
			echo "<h2>Não existem animais cadastrados!</h2>";
		}else{
			echo "<h2>Bovinos Cadastrados: </h2>";
			echo "<p>Escolha o animal: <select name='vaca'>";
		while($linha=$vaca->fetch_assoc()){
			echo "<option value='".$linha['Identificacao_vac']."'>";
			echo $linha['Nome_vac'];
			echo "</option>";
		}
			echo "</select></p>";
			echo "<p><input class='subm' type='submit' value='Escolher'></p>";
		}echo "</form>";
	}
}

if(isset($_POST['ovelha'])){
?>
<form action="aplicacaoVacina.php" method="POST">


    <p>Nome da Vacina: <select name="nomevacovl" required></p>
		<option value="raiva">Raiva</option>
		<option value="clostridiose">Clostridiose</option>
		<option value="linfa">Linfadenite Caseosa</option>
		</select></p>
		<p>Tipo da Vacina: 
	<input type="text" name="tipo" size="80" maxlength="80"></p>
    <p>Data de aplicação: 
    <input type="date" name="aplicacao" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
	<p>Data de próxima aplicação:
	<input type="date" name="proximaapli" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
	<p><input type="hidden" name="idovelha" value="<?php echo $_POST['ovelha']; ?>"></p>

    <br>
    <h3><input type="submit" onclick="mostra()" value="Cadastrar" class="botao"></h3>

</form>

<?php
}		
if(isset($_POST['nomevacovl'])){
	$nome=$_POST['nomevacovl'];
	$identificacao=$_POST['idovelha'];
	$tipo=$_POST['tipo'];
	$aplicacao=$_POST['aplicacao'];
	$proximaapli=$_POST['proximaapli'];
	require_once 'model/Vacina.php';
	require_once 'model/Ovelha.php';
	$codigo=retornaUltimaVacOvelha();
	if($codigo>=0){
		$codigo++;
		$resposta=vacinaOvelha($codigo,$nome,$tipo,$aplicacao,$proximaapli,$identificacao);
		if(!$resposta){
			echo "<h5>Falha na tentativa de cadastro!</h5>";
		}else{
			echo "<h5>Cadastrado com sucesso!</h5>";
		}
	}else{
			echo "<h5>Não há vacina cadastrada</h5>";
		}
	}



if(isset($_POST['cavalo'])){
	?>

<form id="cadanimal" action="aplicacaoVacina.php" method="POST">

	
    <p>Nome da Vacina: <select name="nomevaccav" required></p>
		<option value="raiva">Raiva</option>
		<option value="tetano">Tétano</option>
		<option value="influenza">Influenza</option>
		<option value="encefalomielite">Encefalomielite</option>
		<option value="herpes">Herpes Vírus</option>
		<option value="garrotilho">Garrotilho</option>
		</select></p>
		<p>Tipo da Vacina:
	<input type="text" name="tipo" size="80" maxlength="80"></p>
    <p>Data de aplicação: 
    <input type="date" name="aplicacao" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
	<p>Data de próxima aplicação:
	<input type="date" name="proximaapli"  min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
	<p><input type="hidden" name="idcav" value="<?php echo $_POST['cavalo']; ?>"></p>

    <br>
    <h3><input type="submit" onclick="mostra()" value="Cadastrar" class="botao"></h3>
</form>

<?php
}
if(isset($_POST['nomevaccav'])) {
	$nome=$_POST['nomevaccav'];
	$tipo=$_POST['tipo'];
	$aplicacao=$_POST['aplicacao'];
	$identificacaocav=$_POST['idcav'];
	$proximaapli=$_POST['proximaapli'];
	require_once 'model/Vacina.php';
	require_once 'model/cavalo.php';
	$codigo=retornaUltimaVacCavalo();
	if($codigo>=0){
		$codigo++;
		$resposta=vacinaCavalo($codigo,$aplicacao,$proximaapli,$tipo,$nome,$identificacaocav);
		if(!$resposta){
			echo "<h5>Falha na tentativa de cadastro!</h5>";
		}else{
			echo "<h5>Cadastrado com sucesso!</h5>";
		}
	}else{
			echo "<h5>Não há vacina cadastrada</h5>";
		}
	}

if(isset($_POST['vaca'])){
?>

<form id="cadanimal" action="aplicacaoVacina.php" method="POST">

	
    <p>Nome da Vacina: <select name="nomevacvaca" required></p>
		<option value="raiva">Raiva</option>
		<option value="aftosa">Febre Aftosa</option>
		<option value="b19">B19: Brucelose</option>
		<option value="ibr">IBR/BVD</option>
		<option value="leptospirose">Leptospirose</option>
		<option value="mastite">Mastite</option>
		<option value="pneumoenterite">Pneumoenterite</option>
		</select></p>
		<p>Tipo da Vacina: 
	<input type="text" name="tipo" size="80" maxlength="80"></p>
    <p>Data de aplicação: 
    <input type="date" name="aplicacao" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
	<p>Data de próxima aplicação:
	<input type="date" name="proximaapli" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
	<p><input type="hidden" name="idvac" value="<?php echo $_POST['vaca']; ?>"></p>
    <br>
    <h3><input type="submit" onclick="mostra()" value="Cadastrar" class="botao"></h3>
	
</form>

<?php
}
if(isset($_POST['nomevacvaca'])){
	$nome=$_POST['nomevacvaca'];
	$tipo=$_POST['tipo'];
	$aplicacao=$_POST['aplicacao'];
	$identificacaovac=$_POST['idvac'];
	$proximaapli=$_POST['proximaapli'];
	require_once 'model/Vacina.php';
	require_once 'model/Vaca.php';
	$codigo=retornaUltimaVacVaca();
	if($codigo>=0){
		$codigo++;
		$resposta=vacinaVaca($codigo,$nome,$tipo,$aplicacao,$proximaapli,$identificacaovac);
		if(!$resposta){
			echo "<h5>Falha na tentativa de cadastro!</h5>";
		}else{
			echo "<h5>Cadastrado com sucesso!</h5>";
		}
	}else{
			echo "<h5>Não há vacina cadastrada</h5>";
		}
	}

function criarMinimo($hoje){
	$ano=substr($hoje,0,4);
	$ano-=25;
	return $ano."-01-01";
}



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

<script src="js/mensagem.js"></script>

</body>
</html>