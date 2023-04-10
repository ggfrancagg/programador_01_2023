<?php require_once 'cabecalho.php'; ?>

<form id="vermifugo" action="aplicacaoVermifugo.php" method="POST">
	<h1>&#128138; Vermifugação &#128138;</h1>
</br>
<?php	

	echo "<h2> Escolha qual animal deseja registrar:</h2>";
	echo "</br>";
	echo "<p><input type='radio'id='animal' name='animal' value='cavalo'> Equino ";
	echo "<input type='radio'id='animal' name='animal' value='ovelha'> Ovino ";
	echo "<input type='radio'id='animal' name='animal' value='vaca'> Bovino </p>";
	echo "</br>";
	echo "<h3><input type='submit' value='Enviar'></h3>";
	echo "</form>";
	echo "</br>";

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
			echo "<p><input class='subm' type='submit' value='Escolher'></p>";
	}echo "</form>";
	}else if ($animal=="ovelha") {
		require_once "model/Ovelha.php";
			echo "<form id='vermi' action='aplicacaoVermifugo.php' method='POST'>";
		$ovelha=listarOvelha();
		if (!$ovelha) {
			echo "<h5>Não existem animais cadastrados!</h5>";
		}else{
			echo "<form id='animalcadas'>";
			echo "<h2>Ovinos Cadastradas: </h2>";
			echo "<p>Escolha o animal: <select name='ovelha'>";
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
			echo "<form id='vermi' action='aplicacaoVermifugo.php' method='POST'>";
		$vaca=listarVaca();
		if (!$vaca) {
			echo "<h5>Não existem animais cadastrados!</h5>";
		}else{
			echo "<form id='animalcadas'>";
			echo "<h2>Bonivos Cadastrados: </h2>";
			echo "<p>Escolha o animal: <select name='vaca'>";
		while($linha=$vaca->fetch_assoc()){
			echo "<option value='".$linha['Identificacao_vac']."'>";
			echo $linha['Nome_vac'];
			echo "</option>";
		}
			echo "</select></p>";
			echo "<p><input class='subm' type='submit' value='Escolher'></p>";;
		}echo "</form>";
	}
}


if(isset($_POST['cavalo'])){
?>

<form id="cadanimal" method="POST" action="aplicacaoVermifugo.php">

<p>Nome vermífugo: <input type="text" name="nomecav"  size="30" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ0-9\s]{2,30}" required></p>
<p>Marca vermífugo: <input type="text" name="marca"  size="30" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ0-9\s]{2,30}" required></p>
<p>Lote vermífugo: <input type="text" name="lote"  size="40" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ0-9\s]{2,30}" required></p>
<p>Data de fabricação: <input type="date" name="fabri" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<p>Data de validade: <input type="date" name="vali" required></p>
<p>Data da aplicação: <input type="date" name="apli" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<p>Data de próxima aplicação:
	<input type="date" name="proximaapli" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<input type="hidden" name="Identificacao_cav" value="<?php echo $_POST['cavalo'];?>">
<h3><input type="submit" onclick="mostra()" value="Cadastrar"></h3>
</form>

	<?php
}
if (isset($_POST['nomecav'])) {
	$nome_verm=$_POST['nomecav'];
	$marca_verm=$_POST['marca'];
	$lote_verm=$_POST['lote'];
	$fabricacao_verm=$_POST['fabri'];
	$validade_verm=$_POST['vali'];
	$aplicacao_verm=$_POST['apli'];
	$Identificacao_cav=$_POST['Identificacao_cav'];
	$proximaapli=$_POST['proximaapli'];
	require_once "model/Vermifugo.php";
	$ID_verm=ultimoVermCavalo();
	if($ID_verm>=0){
		$ID_verm++;
		$resposta=aplicarVermCavalo($ID_verm,$nome_verm,$marca_verm,$lote_verm,$fabricacao_verm,$validade_verm,$aplicacao_verm,$proximaapli,$Identificacao_cav);
		if (!$resposta) {
			echo "<h5>Falha ao registrar aplicação!</h5>";
		}else{ 
			echo "<h5> Cadastro de aplicação realizado com sucesso!</h5>";
	}
		
	}else{
		echo "<h5>Não existem medicamentos cadastrados!</h5>";

}
}

if(isset($_POST['ovelha'])){
?>

<form id="cadanimal" method="POST" action="aplicacaoVermifugo.php">

<p>Nome vermífugo: <input type="text" name="nomeov"  size="30" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ0-9\s]{2,30}" required></p>
<p>Marca vermífugo: <input type="text" name="marca"  size="30" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ0-9\s]{2,30}" required></p>
<p>Lote vermífugo: <input type="text" name="lote"  size="40" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ0-9\s]{2,30}" required></p>
<p>Data de fabricação: <input type="date" name="fabri" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<p>Data de validade: <input type="date" name="vali" required></p>
<p>Data da aplicação: <input type="date" name="apli" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<p>Data de próxima aplicação:
	<input type="date" name="proximaapli" min="<?php echo date("Y-m-d"); ?>" required></p>
<input type="hidden" name="id_ovl" value="<?php echo $_POST['ovelha'];?>">
<h3><input type="submit" onclick="mostra()" value="Cadastrar"></h3>
</form>


<?php
}
if (isset($_POST['nomeov'])) {
	$nome_verm=$_POST['nomeov'];
	$marca_verm=$_POST['marca'];
	$lote_verm=$_POST['lote'];
	$fabricacao_verm=$_POST['fabri'];
	$validade_verm=$_POST['vali'];
	$aplicacao_verm=$_POST['apli'];
	$id_ovl=$_POST['id_ovl'];
	$proximaapli=$_POST['proximaapli'];
	require_once "model/Vermifugo.php";
	$ID_verm=ultimoVermOvelha();
	if($ID_verm>=0){
		$ID_verm++;
		$resposta=aplicarVermOvelha($ID_verm,$nome_verm,$marca_verm,$lote_verm,$fabricacao_verm,$validade_verm,$aplicacao_verm,$proximaapli,$id_ovl);
		if (!$resposta) {
			echo "<h5>Falha ao registrar aplicação!</h5>";
		}else{ 
			echo "<h5> Cadastro de aplicação realizado com sucesso!</h5>";
	}
		
	}else{
		echo "<h5>Não existem medicamentos cadastrados!</h5>";

}
}

if(isset($_POST['vaca'])){
?>

<form id="cadanimal" method="POST" action="aplicacaoVermifugo.php">

<p>Nome vermífugo: <input type="text" name="nomeva"  size="30" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ0-9\s]{2,30}" required></p>
<p>Marca vermífugo: <input type="text" name="marca"  size="30" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ0-9\s]{2,30}" required></p>
<p>Lote vermífugo: <input type="text" name="lote"  size="40" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ0-9\s]{2,30}" required></p>
<p>Data de fabricação: <input type="date" name="fabri" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<p>Data de validade: <input type="date" name="vali" required></p>
<p>Data da aplicação: <input type="date" name="apli" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<p>Data de próxima aplicação:
	<input type="date" name="proximaapli" min="<?php echo date("Y-m-d"); ?>" required></p>
<input type="hidden" name="Identificacao_vac" value="<?php echo $_POST['vaca'];?>">
<h3><input type="submit" onclick="mostra()" value="Cadastrar"></h3>
</form>


<?php
}
if (isset($_POST['nomeva'])) {
	$nome_verm=$_POST['nomeva'];
	$marca_verm=$_POST['marca'];
	$lote_verm=$_POST['lote'];
	$fabricacao_verm=$_POST['fabri'];
	$validade_verm=$_POST['vali'];
	$aplicacao_verm=$_POST['apli'];
	$Identificacao_vac=$_POST['Identificacao_vac'];
	$proximaapli=$_POST['proximaapli'];
	require_once "model/Vermifugo.php";
	$ID_verm=ultimoVermVaca();
	if($ID_verm>=0){
		$ID_verm++;
		$resposta=aplicarVermVaca($ID_verm,$nome_verm,$marca_verm,$lote_verm,$fabricacao_verm,$validade_verm,$aplicacao_verm,$proximaapli,$Identificacao_vac);
		if (!$resposta) {
			echo "<h5>Falha ao registrar aplicação!</h5>";
		}else{ 
			echo "<h5> Cadastro de aplicação realizado com sucesso!</h5>";
	}
		
	}else{
		echo "<h5>Não existem medicamentos cadastrados!</h5>";

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