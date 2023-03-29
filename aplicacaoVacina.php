<?php require_once 'cabecalho.php';?>

<form action="aplicacaoVacina.php" method="POST">
	<h1>Vacinação</h1>
	<br>
	<?php
		echo "<p> Escolha qual animal deseja registrar:</p>";
	echo "<input type='radio'id='animal' name='animal' value='cavalo'>Cavalo";
	echo "<input type='radio'id='animal' name='animal' value='ovelha'>Ovelha";
	echo "<input type='radio'id='animal' name='animal' value='vaca'>Vaca";
	echo "<input type='submit'id='botao' value='Enviar'>";
	echo "</form>";

if(isset($_POST['animal'])){
	$animal=$_POST['animal'];
	require_once "model/Vacina.php";
	if ($animal=="cavalo") {
		require_once "model/Cavalo.php";
			echo "<form class='vac' action='aplicacaoVacina.php' method='POST'>";
		$cavalo=listarCavalo();
		if (!$cavalo) {
			echo "<h2>Não existem animais cadastrados!</h2>";
		}else{
			echo "<h2>Cavalos Cadastrados: </h2>";
			echo "<p>Escolha o Cavalo: <select name='cavalo'>";
		while($linha=$cavalo->fetch_assoc()){
			echo "<option value='".$linha['Nome_cav']."'>";
			echo $linha['Nome_cav'];
			echo "</option>";
		}
			echo "</select></p>";
			echo "<input type='submit' id='botao' value='Escolher'>";
	}
	}else if ($animal=="ovelha"){
		require_once "model/Ovelha.php";
			echo "<form class='vac' action='aplicacaoVacina.php' method='POST'>";
		$ovelha=listarOvelha();
		if (!$ovelha) {
			echo "<h2>Não existem animais cadastrados!</h2>";
		}else{
			echo "<h2>Ovelhas Cadastradas: </h2>";
			echo "<p>Escolha a Ovelha: <select name='ovelha'>";
		while($linha=$ovelha->fetch_assoc()){
			echo "<option value='".$linha['nome_ovl']."'>";
			echo $linha['nome_ovl'];
			echo "</option>";
		}
		echo "</select></p>";
		echo "<input type='submit' id='botao' value='Escolher'>";
	}
	}else if ($animal=="vaca") {
		require_once "model/Vaca.php";
			echo "<form class='vac' action='aplicacaoVacina.php' method='POST'>";
		$vaca=listarVaca("");
		if (!$vaca) {
			echo "<h2>Não existem animais cadastrados!</h2>";
		}else{
			echo "<h2>Vacas Cadastradas: </h2>";
			echo "<p>Escolha a Vaca: <select name='vaca'>";
		while($linha=$ovelha->fetch_assoc()){
			echo "<option value='".$linha['Nome_vac']."'>";
			echo $linha['Nome_vac'];
			echo "</option>";
		}
			echo "</select></p>";
			echo "<input type='submit' id='botao' value='Escolher'>";
		}
	}
}

if(isset($_POST['ovelha'])){
?>

<form>

<p>Nome da Vacina: 
	<input type="text" name="nomevac" size="80" maxlength="80"></p>
    <p>Tipo da Vacina: <select name="tipo" required></p>
		<option value="raiva">Raiva</option>
		<option value="clostridiose">Clostridiose</option>
		<option value="linfa">Linfadenite Caseosa</option>
		</select></p>
    <p>Data de aplicação: 
    <input type="date" name="aplicacao" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
    <br>
    <p><input type="submit" class="enviar" value="Cadastrar"></p>
</form>

<?php
}		
if(isset($_POST['nomevac'])){
	$nome=$_POST['nomevac'];
	$tipo=$_POST['tipo'];
	$aplicacao=$_POST['aplicacao'];
	$proximaapli=$_POST['proximaapli'];
	$identificacao=$_POST['identificacao'];
	require_once 'model/Vacina.php';
	$codigo=retornaUltimaVacOvelha($IDvasc_ovl);
	if($codigo>=0){
		$codigo++;
		$resposta=vacinaOvelha($codigo,$nome,$tipo,$aplicacao,$proximaapli,$identificacao);
		if(!$resposta){
			echo "<h2>Falha na tentativa de cadastro!</h2>";
		}else{
			echo "<h2>Cadastrado com sucesso!</h2>";
		}
	}else{
			echo "<h2>Não há vacina cadastrada</h2>";
		}
	}



if(isset($_POST['cavalo'])){
	?>

<form>
	<p>Nome da Vacina: 
	<input type="text" name="nomevac" size="80" maxlength="80"></p>
    <p>Tipo da Vacina: <select name="tipo" required></p>
		<option value="raiva">Raiva</option>
		<option value="tetano">Tétano</option>
		<option value="influenza">Influenza</option>
		<option value="encefalomielite">Encefalomielite</option>
		<option value="herpes">Herpes Vírus</option>
		<option value="garrotilho">Garrotilho</option>
		</select></p>
	<p>Data de fabricação: <input type="date" name="fabri" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
	<p>Data de validade: <input type="date" name="vali" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
    <p>Data de aplicação: 
    <input type="date" name="aplicacao" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
    <br>
    <p><input type="submit" class="enviar" value="Cadastrar"></p>
</form>

<?php
}
if(isset($_POST['nomevac'])) {
	$nome=$_POST['nomevac'];
	$tipo=$_POST['tipo'];
	$aplicacao=$_POST['aplicacao'];
	$identificacao=$_POST['identificacao'];
	$proximaapli=$_POST['proximaapli'];
	require_once 'model/Vacina.php';
	$codigo=retornaUltimaVacCavalo($IDvac_cav);
	if($codigo>=0){
		$codigo++;
		$resposta=vacinaCavalo($codigo,$nome,$tipo,$aplicacao,$identificacao,$proximaapli);
		if(!$resposta){
			echo "<h2>Falha na tentativa de cadastro!</h2>";
		}else{
			echo "<h2>Cadastrado com sucesso!</h2>";
		}
	}else{
			echo "<h2>Não há vacina cadastrada</h2>";
		}
	}

if(isset($_POST['vaca'])){
?>

<form>
	<p>Nome da Vacina: 
	<input type="text" name="nomevac" size="80" maxlength="80"></p>
    <p>Tipo da Vacina: <select name="tipo" required></p>
		<option value="raiva">Raiva</option>
		<option value="aftosa">Febre Aftosa</option>
		<option value="b19">B19: Brucelose</option>
		<option value="ibr">IBR/BVD</option>
		<option value="leptospirose">Leptospirose</option>
		<option value="mastite">Mastite</option>
		<option value="pneumoenterite">Pneumoenterite</option>
		</select></p>
    <p>Data de aplicação: 
    <input type="date" name="aplicacao" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
    <br>
    <p><input type="submit" class="enviar" value="Cadastrar"></p>
</form>

<?php
}
if(isset($_POST['nomevac'])){
	$nome=$_POST['nomevac'];
	$tipo=$_POST['tipo'];
	$aplicacao=$_POST['aplicacao'];
	$identificacao=$_POST['identificacao'];
	$proximaapli=$_POST['proximaapli'];
	require_once 'model/Vacina.php';
	$codigo=retornaUltimaVacVaca($IDvasc_vac);
	if($codigo>=0){
		$codigo++;
		$resposta=vacinaVaca($codigo,$nome,$tipo,$aplicacao,$identificacao);
		if(!$resposta){
			echo "<h2>Falha na tentativa de cadastro!</h2>";
		}else{
			echo "<h2>Cadastrado com sucesso!</h2>";
		}
	}else{
			echo "<h2>Não há vacina cadastrada</h2>";
		}
	}

function criarMinimo($hoje){
	$ano=substr($hoje,0,4);
	$ano-=25;
	return $ano."-01-01";
}



?>

</body>
</html>