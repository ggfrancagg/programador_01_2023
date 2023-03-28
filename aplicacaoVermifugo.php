<?php require_once 'cabecalho.php'; ?>

<form class="vermifugo" action="aplicacaoVermifugo.php" method="POST">
	<h1>&#8853; Vermifugação &#8853;</h1>
</br>
<?php	

	echo "<p> Escolha qual animal deseja registrar:</p>";
	echo "<input type='radio'id='animal' name='animal' value='cavalo'>Cavalo";
	echo "<input type='radio'id='animal' name='animal' value='ovelha'>Ovelha";
	echo "<input type='radio'id='animal' name='animal' value='vaca'>Vaca";
	echo "<input type='submit'id='botao' value='Enviar'>";
	echo "</form>";

if (isset($_POST['animal'])) {
	$animal=$_POST['animal'];
	require_once "model/Vermifugo.php";
	if ($animal=="cavalo") {
		require_once "model/cavalo.php";
			echo "<form class='vermi' action='aplicacaoVermifugo.php' method='POST'>";
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
	}else if ($animal=="ovelha") {
		require_once "model/Ovelha.php";
			echo "<form class='vermi' action='aplicacaoVermifugo.php' method='POST'>";
		$ovelha=listarOvelha();
		if (!$ovelha) {
			echo "<h2>Não existem animais cadastrados!</h2>";
		}else{
			echo "<h2>Ovelhas Cadastradas: </h2>";
			echo "<p>Escolha a Ovelha: <select name='ovelha'>";
		while($linha=$ovelha->fetch_assoc()){
			echo "<option value='".$linha['nome_ovl']."'>";
			echo $linha['$nome_ovl'];
			echo "</option>";
		}
		echo "</select></p>";
		echo "<input type='submit' id='botao' value='Escolher'>";
	}
	}else if ($animal=="vaca") {
		require_once "model/Vaca.php";
			echo "<form class='vermi' action='aplicacaoVermifugo.php' method='POST'>";
		$vaca=listarVaca("");
		if (!$vaca) {
			echo "<h2>Não existem animais cadastrados!</h2>";
		}else{
			echo "<h2>Vacas Cadastradas: </h2>";
			echo "<p>Escolha a Vaca: <select name='vaca'>";
		while($linha=$ovelha->fetch_assoc()){
			echo "<option value='".$linha['Nome_vac']."'>";
			echo $linha['$Nome_vac'];
			echo "</option>";
		}
			echo "</select></p>";
			echo "<input type='submit' id='botao' value='Escolher'>";
		}
	}
}


if(isset($_POST['cavalo'])){
?>

<form>

<p>Nome vermífugo: <input type="text" name="nome"  size="30" required></p>
<p>Marca vermífugo: <input type="text" name="marca"  size="30" required></p>
<p>Lote vermífugo: <input type="text" name="lote"  size="40" required></p>
<p>Data de fabricação: <input type="date" name="fabri" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<p>Data de validade: <input type="date" name="vali" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<p>Data da aplicação: <input type="date" name="apli" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<input type="submit" value="Cadastrar" class="botao">
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
	$codigo=ultimoVermCavalo($Id_verm);
	if(!$codigo){
		echo "<h2>Não existem medicamentos cadastrados!</h2>";
	}else{
		$codigo++;
		$resposta=aplicarVermCavalo($ID_vermifugo,$nome_verm,$marca_verm,$lote_verm,$fabricacao_verm,$validade_verm,$aplicacao_verm);
		if (!$resposta) {
			echo "<h2>Falha ao registrar aplicação!</h2>";
		}else echo "<h2> Cadastro de aplicação realizado com sucesso!</h2>";
	}

}

if(isset($_POST['ovelha'])){
?>

<form>

<p>Nome vermífugo: <input type="text" name="nome"  size="30" required></p>
<p>Marca vermífugo: <input type="text" name="marca"  size="30" required></p>
<p>Lote vermífugo: <input type="text" name="lote"  size="40" required></p>
<p>Data de fabricação: <input type="date" name="fabri" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<p>Data de validade: <input type="date" name="vali" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<p>Data da aplicação: <input type="date" name="apli" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<input type="submit" value="Cadastrar" class="botao">
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
		echo "<h2>Não existem medicamentos cadastrados!</h2>";
	}else{
		$codigo++;
		$resposta=aplicarVermOvelha($ID_vermifugo,$nome_verm,$marca_verm,$lote_verm,$fabricacao_verm,$validade_verm,$aplicacao_verm);
		if (!$resposta) {
			echo "<h2>Falha ao registrar aplicação!</h2>";
		}else echo "<h2> Cadastro de aplicação realizado com sucesso!</h2>";
	}

}


if(isset($_POST['vaca'])){
?>

<form>

<p>Nome vermífugo: <input type="text" name="nome"  size="30" required></p>
<p>Marca vermífugo: <input type="text" name="marca"  size="30" required></p>
<p>Lote vermífugo: <input type="text" name="lote"  size="40" required></p>
<p>Data de fabricação: <input type="date" name="fabri" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<p>Data de validade: <input type="date" name="vali" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<p>Data da aplicação: <input type="date" name="apli" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<input type="submit" value="Cadastrar" class="botao">
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
		echo "<h2>Não existem medicamentos cadastrados!</h2>";
	}else{
		$codigo++;
		$resposta=aplicarVermVaca($ID_vermifugo,$nome_verm,$marca_verm,$lote_verm,$fabricacao_verm,$validade_verm,$aplicacao_verm);
		if (!$resposta) {
			echo "<h2>Falha ao registrar aplicação!</h2>";
		}else echo "<h2> Cadastro de aplicação realizado com sucesso!</h2>";
	}
}
?>

</body>
</html>