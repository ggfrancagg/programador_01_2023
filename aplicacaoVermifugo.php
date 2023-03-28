<?php require_once 'cabecalho.php'; ?>

<form class="vermifugo" action="aplicacaoVermifugo.php" method="POST">
	<h1>&#8853; Vermifugação &#8853;</h1>
</br>
<?php	

	echo "<p> Escolha qual animal deseja registrar:</p>";
	echo "<input type='radio'id='animal' name='animal' value='Cavalo'>Cavalo";
	echo "<input type='radio'id='animal' name='animal' value='Ovelha'>Ovelha";
	echo "<input type='radio'id='animal' name='animal' value='Vaca'>Vaca";
	echo "<input type='submit'id='botao' value='Enviar'>";
	echo "</form>";

if (isset($_POST['animal'])) {
	$animal=$_POST['animal'];
	require_once "model/Vermifugo.php";
	if ($animal=="Cavalo") {
		require_once "model/Cavalo.php";
		echo "<form class='vermi' action='aplicacaoVermifugo.php' method='POST'>";
		echo "<h2>Escolha o animal: </h2>";
		$cavalo=listarCavalo();
		echo "<p>Escolha o Cavalo: <select name='cavalo'>"
		while($linha=$Cavalo->fetch_assoc()){
			echo "<option value='".$linha['Nome_cav']."'>";
			echo $linha['Nome_cav'];
			echo "</option>";
		}
		echo "</select></p>";
		echo "<input type='submit' id='botao' value='Escolher'>";
	}
}
?>
<p>Nome vermífugo: <input type="text" name="nome"  size="30" required></p>
<p>Marca vermífugo: <input type="text" name="marca"  size="30" required></p>
<p>Lote vermífugo: <input type="text" name="lote"  size="40" required></p>
<p>Data de fabricação: <input type="date" name="fabri" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<p>Data de validade: <input type="date" name="vali" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>
<p>Data da aplicação: <input type="date" name="apli" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p>

	

</form>
	require_once "model/Vaca.php";
	
	require_once "model/Ovelha.php";


	$consulta=listarCavalo();


</body>
</html>