<?php require_once 'cabecalho.php'?>

<form action="cadastrarConsultas.php" method="POST">
	<h1>Cadastrar consulta</h1>
	<br>
<?php 

 	echo "<h2>Escolha o animal a consultar";
	echo "<p><input type='radio'id='animal' name='animal' value='cavalo' required> Cavalo ";
	echo "<input type='radio'id='animal' name='animal' value='ovelha' required> Ovelha ";
	echo "<input type='radio'id='animal' name='animal' value='vaca' required> Vaca </p>";
	echo "<br>";
	echo "<h3><input type='submit' value='enviar'></h3>";
	echo "</form>";

	if(isset($_POST['animal'])){
		$animal=$_POST['animal'];
	//	require_once 'model/consultaCav.php';
		if($animal=="cavalo"){
			require_once "model/cavalo.php";
			echo "<form action='cadastrarConsultas.php' method='POST'>";
			$cavalo=listarCavalo();
			if(!$cavalo) {
				echo "<h2>Não tem cavalos cadastrados!</h2>";
			}else{
				echo "<form>";
				echo "<h2> Cavalos cadastrados!</h2>";
				echo "<p>Escolha o Cavalo:<select name='cavalo'>";
				while ($linha=$cavalo->fetch_assoc()) {
				echo "<option value='".$linha['Identificacao_cav']."'>";
				echo $linha['Nome_cav'];
				echo "</option>";
				}
				echo "</select></p>";
				echo "<h3><input type='submit' value='Escolher'></h3>";
				}echo "</form>";
			}else if
			($animal=="ovelha"){
				require_once "model/ovelha.php";
				echo "<form action='cadastrarConsultas.php' method='POST'>";
				$ovelha=listarOvelha();
				if(!$ovelha){
					echo "<h2> Não existen ovelhas cadastradas!</h2>";
				}else{
					echo "<form>";
					echo "<h2>ovelhas cadastradas!";
					echo "<p> Escolha a ovelha: <select name='ovelha'>";
					while($linha=$ovelha->fetch_assoc()){
					echo "<option value='".$linha['id_ovl']."1>";
					echo $linha['nome_ovl'];
					echo "</option>";
				}
				echo "</select>";
				echo "<h3> <input type='submit' value='Escolher'></h3>";
			}echo "</form>";
		}else if($animal=="vaca"){
			require_once "model/vaca.php";
			echo "<form action='cadastrarConsultas.php' method='POST'";
			$vaca=listarVaca();
			if(!$vaca){
				echo "<h2>Não tem vacas cadastradas!";
			}else{
				echo "<h2>Vacas cadastradas: </h2>";
				echo "<p> Escola a vaca: <select name='vaca'>";
				while ($linha=$vaca->fetch_assoc()) {
				echo "<option value='".$linha['Identificacao_vac']."'>";
				echo $linha['Nome_vac'];
				echo "</option>";
				}
				echo "</select></p>";
				echo "<H3><input type='submit' value='Escolher'></h3> ";
			}echo "</form>";
		}
	}
	if(isset($_POST['cavalo'])){

		?>
		<form action="cadastrarConsultas.php" method="POST">

			<p>Digite o seu CFMV:
				<input type="text" name="cfmv" size="20" maxlength="20" required></p>
			<p>Escolhe a data da consulta:
				<input type="date" name="data" max="<?php Echo date("Y-m-d"); ?>" required> </p>
			<p>Digite o horario:
				<input type="time" name="horario" required></p>
			<p>Breve histórico:
			<input type="text" name="historico" size="50" required>
			<input type="hidden" name="id_cav" value="<?php echo $_POST['cavalo'];?>">	
			<p><input type="submit" value="registrar"></p>		
			</form>
			<?php 
		}
		if(isset($_POST['ovelha'])){
			?>
			<form action="cadastrarConsultas.php" method="POST">

			<p>Digite o seu CFMV:
				<input type="text" name="cfmv" size="20" maxlength="20" required></p>
			<p>Escolhe a data da consulta:
				<input type="date" name="data" max="<?php Echo date("Y-m-d"); ?>" required> </p>
			<p>Digite o horario:
				<input type="time" name="horario" required></p>
			<p>Breve histórico:
			<input type="text" name="historico" size="50" required>	
			<p><input type="submit" value="registrar"></p>		
			</form> 
			<?php
		}
		if(isset($_POST['vaca'])){
			?>
			<form action="cadastrarConsultas.php" method="POST">

			<p>Digite o seu CFMV:
				<input type="text" name="cfmv" size="20" maxlength="20" required></p>
			<p>Escolhe a data da consulta:
				<input type="date" name="data" max="<?php Echo date("Y-m-d"); ?>" required> </p>
			<p>Digite o horario:
				<input type="time" name="horario" required></p>
			<p>Breve histórico:
			<input type="text" name="historico" size="50" required>	
			<p><input type="submit" value="registrar"></p>		
			</form>
			<?php
		}
		if(isset($_POST['cfmv'])){
			$cfmv=$_POST['cfmv'];
			$data=$_POST['data'];
			$horario=$_POST['horario'];
			$historico=$_POST['historico'];
			$id_cav=$_POST['id_cav'];
			require_once 'model/consultaCav.php';
			$codigo=retornaUltimaConsultaCav();
			if($codigo>=0){
				$codigo++;
				$resposta=cadastrarConsultaCav($codigo,$id_cav,$cfmv,$data,$horario,$historico);
				if(!$resposta){
					echo "<h5>Falha na tentativa de cadastro!</h5>";
				}else{
					echo "<h5>Cadastro com sucesso!";
				}
			}
		}






			?>




</body>
</html>