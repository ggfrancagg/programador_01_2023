<?php require_once 'cabecalho.php'; ?>

<form id="vermifugo" action="aplicacaoVermifugo.php" method="POST">
	<h1>&#8853; Vermifugação &#8853;</h1>
</br>
<?php	

	echo "<h2> Escolha qual animal deseja registrar:</h2>";
	echo "</br>";
	echo "<p><input type='radio'id='animal' name='animal' value='cavalo'> Equino ";
	echo "<input type='radio'id='animal' name='animal' value='ovelha'> Ovino ";
	echo "<input type='radio'id='animal' name='animal' value='vaca'> Bovino </p>";
	echo "</br>";
	echo "<h3><input type='submit'id='botao' value='Enviar'></h3>";
	echo "</form>";

if (isset($_POST['animal'])) {
	$animal=$_POST['animal'];
	require_once "model/Vermifugo.php";
	if ($animal=="cavalo") {
		require_once "model/cavalo.php";
			echo "<form id='vermi' action='aplicacaoVermifugo.php' method='POST'>";
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
			echo "<h3><input type='submit' value='Escolher'></h3>";
	}echo "</form>";
	}else if ($animal=="ovelha") {
		require_once "model/Ovelha.php";
			echo "<form id='vermi' action='aplicacaoVermifugo.php' method='POST'>";
		$ovelha=listarOvelha();
		if (!$ovelha) {
			echo "<h2>Não existem animais cadastrados!</h2>";
		}else{
			echo "<form id='animalcadas'>";
			echo "<h2>Ovinos Cadastradas: </h2>";
			echo "<p>Escolha o animal: <select name='ovelha'>";
		while($linha=$ovelha->fetch_assoc()){
			echo "<option value='".$linha['nome_ovl']."'>";
			echo $linha['$nome_ovl'];
			echo "</option>";
		}
		echo "</select></p>";
		echo "<h3><input type='submit'id='botao' value='Escolher'></h3>";
	}echo "</form>";
	}else if ($animal=="vaca") {
		require_once "model/Vaca.php";
			echo "<form id='vermi' action='aplicacaoVermifugo.php' method='POST'>";
		$vaca=listarVaca("");
		if (!$vaca) {
			echo "<h2>Não existem animais cadastrados!</h2>";
		}else{
			echo "<form id='animalcadas'>";
			echo "<h2>Bonivos Cadastrados: </h2>";
			echo "<p>Escolha o animal: <select name='vaca'>";
		while($linha=$ovelha->fetch_assoc()){
			echo "<option value='".$linha['Nome_vac']."'>";
			echo $linha['$Nome_vac'];
			echo "</option>";
		}
			echo "</select></p>";
			echo "<h3><input type='submit'id='botao' value='Escolher'></h3>";
		}echo "</form>";
	}
}


if(isset($_POST['cavalo'])){
?>

<<<<<<< HEAD
<form id="cadanimal">
=======
<form action="aplicacaoVermifugo.php" method="POST">
>>>>>>> 89e9e2169c410e4a5f76ec41d7bb057e1b28fd73

<p>Nome vermífugo: <input type="text" name="nome"  size="30" required></p>
<p>Marca vermífugo: <input type="text" name="marca"  size="30" required></p>
<p>Lote vermífugo: <input type="text" name="lote"  size="40" required></p>
<p>Data de fabricação: <input type="date" name="fabri" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<p>Data de validade: <input type="date" name="vali" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<p>Data da aplicação: <input type="date" name="apli" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<<<<<<< HEAD
<h3><input type="submit" value="Cadastrar" class="botao"></h3>
=======
<p><input type="hidden" name="idcavalo" value="<?php echo $_POST['cavalo']; ?>">
<input type="submit" value="Cadastrar" class="botao">
>>>>>>> 89e9e2169c410e4a5f76ec41d7bb057e1b28fd73
</form>

	<?php
}
if (isset($_POST['nome'])) {
	$Identificacao_cav=$_POST['idcavalo']
	$nome_verm=$_POST['nome'];
	$marca_verm=$_POST['marca'];
	$lote_verm=$_POST['lote'];
	$fabricacao_verm=$_POST['fabri'];
	$validade_verm=$_POST['vali'];
	$aplicacao_verm=$_POST['apli'];
	require_once "model/Vermifugo.php";
	$codigo=ultimoVermCavalo($Id_verm);
	if(!$codigo){
		echo "<h5>Não existem medicamentos cadastrados!</h5>";
	}else{
		$codigo++;
		$resposta=aplicarVermCavalo($ID_vermifugo,$nome_verm,$marca_verm,$lote_verm,$fabricacao_verm,$validade_verm,$aplicacao_verm,$Identificacao_cav);
		if (!$resposta) {
			echo "<h5>Falha ao registrar aplicação!</h5>";
		}else echo "<h5> Cadastro de aplicação realizado com sucesso!</h5>";
	}

}

if(isset($_POST['ovelha'])){
?>

<form id="cadanimal">

<p>Nome vermífugo: <input type="text" name="nome"  size="30" required></p>
<p>Marca vermífugo: <input type="text" name="marca"  size="30" required></p>
<p>Lote vermífugo: <input type="text" name="lote"  size="40" required></p>
<p>Data de fabricação: <input type="date" name="fabri" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<p>Data de validade: <input type="date" name="vali" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<p>Data da aplicação: <input type="date" name="apli" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<h3><input type="submit" value="Cadastrar" class="botao"></h3>
</form>


<?php
}
if (isset($_POST['nome'])) {
	$nome_verm=$_POST['nome'];
	$marca_verm=$_POST['marca'];
	$lote_verm=$_POST['lote'];
	$fabricacao_verm=$_POST['fabri'];
	$validade_verm=$_POST['vali'];
	$aplicacao_verm=$_POST['apli'];
	require_once "model/Vermifugo.php";
	$codigo=ultimoVermOvelha($Id_verm);
	if(!$codigo){
		echo "<h5>Não existem medicamentos cadastrados!</h5>";
	}else{
		$codigo++;
		$resposta=aplicarVermOvelha($ID_vermifugo,$nome_verm,$marca_verm,$lote_verm,$fabricacao_verm,$validade_verm,$aplicacao_verm);
		if (!$resposta) {
			echo "<h5>Falha ao registrar aplicação!</h5>";
		}else echo "<h5> Cadastro de aplicação realizado com sucesso!</h5>";
	}

}

if(isset($_POST['vaca'])){
?>

<form id="cadanimal">

<p>Nome vermífugo: <input type="text" name="nome"  size="30" required></p>
<p>Marca vermífugo: <input type="text" name="marca"  size="30" required></p>
<p>Lote vermífugo: <input type="text" name="lote"  size="40" required></p>
<p>Data de fabricação: <input type="date" name="fabri" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<p>Data de validade: <input type="date" name="vali" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<p>Data da aplicação: <input type="date" name="apli" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<h3><input type="submit" value="Cadastrar" class="botao"></h3>
</form>


<?php
}
if (isset($_POST['nome'])) {
	$nome_verm=$_POST['nome'];
	$marca_verm=$_POST['marca'];
	$lote_verm=$_POST['lote'];
	$fabricacao_verm=$_POST['fabri'];
	$validade_verm=$_POST['vali'];
	$aplicacao_verm=$_POST['apli'];
	require_once "model/Vermifugo.php";
	$codigo=ultimoVermVaca($Id_verm);
	if(!$codigo){
		echo "<h5>Não existem medicamentos cadastrados!</h5>";
	}else{
		$codigo++;
		$resposta=aplicarVermVaca($ID_vermifugo,$nome_verm,$marca_verm,$lote_verm,$fabricacao_verm,$validade_verm,$aplicacao_verm);
		if (!$resposta) {
			echo "<h5>Falha ao registrar aplicação!</h5>";
		}else echo "<h5> Cadastro de aplicação realizado com sucesso!</h5>";
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