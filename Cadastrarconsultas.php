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
<<<<<<< HEAD
	  require_once "model/consultaCav.php";
=======
>>>>>>> d2b64f161c7564b0179dde51697ed24139f7895d
		if($animal=="cavalo"){
			require_once "model/cavalo.php";
			echo "<form action='Cadastrarconsultas.php' method='POST'>";
			$cavalo=listarCavalo();
			if(!$cavalo) {
				echo "<h2>Não existem animais cadastrados!</h2>";
			}else{
				echo "<form>";
				echo "<h2>Equinos cadastrados:</h2>";
				echo "<p>Escolha o animal:<select name='cavalo'>";
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
				require_once "model/Ovelha.php";
				echo "<form action='Cadastrarconsultas.php' method='POST'>";
				$ovelha=listarOvelha();
				if(!$ovelha){
					echo "<h2> Não existem animais cadastrados!</h2>";
				}else{
					echo "<form>";
					echo "<h2>Ovinos cadastrados:</h2>";
					echo "<p> Escolha o animal: <select name='ovelha'>";
					while($linha=$ovelha->fetch_assoc()){
					echo "<option value='".$linha['id_ovl']."'>";
					echo $linha['nome_ovl'];
					echo "</option>";
				}
				echo "</select></p>";
				echo "<h3> <input type='submit' value='Escolher'></h3>";
			}echo "</form>";
		}else if($animal=="vaca"){
			require_once "model/vaca.php";
			echo "<form action='cadastrarConsultas.php' method='POST'";
			$vaca=listarVaca();
			if(!$vaca){
				echo "<h2>Não existem animais cadastrados!</h2>";
			}else{
				echo "<form>";
				echo "<h2> Bovinos cadastrados: </h2>";
				echo "<p> Escolha o animal: <select name='vaca'>";
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
			<input type="hidden" name="Identificacao_cav" value="<?php echo $_POST['cavalo'];?>">	
			<p><input type="submit" value="registrar"></p>		
			</form>
			<?php 
		}
		if(isset($_POST['ovelha'])){
			?>
			<form action="cadastrarConsultas.php" method="POST">

			<p>Digite o seu CFMV:
<<<<<<< HEAD
				<input type="text" name="cfmvovl" size="20" maxlength="20" required></p>
=======
				<input type="text" name="cfmv_ovl" size="20" maxlength="20" required></p>
>>>>>>> d2b64f161c7564b0179dde51697ed24139f7895d
			<p>Escolhe a data da consulta:
				<input type="date" name="dataovl" max="<?php Echo date("Y-m-d"); ?>" required> </p>
			<p>Digite o horario:
				<input type="time" name="horarioovl" required></p>
			<p>Breve histórico:
<<<<<<< HEAD
			<input type="text" name="historicoovl" size="50" required>
			<input type="hidden" name="id_ovl" value="<?php echo $_POST['ovelha'];?>">		
=======
			<input type="text" name="historico" size="50" required>	
			<input type="hidden" name="id_ovl" value="<?php echo $_POST['ovelha'];?>">
>>>>>>> d2b64f161c7564b0179dde51697ed24139f7895d
			<p><input type="submit" value="registrar"></p>		
			</form> 
			<?php
		}
		if(isset($_POST['vaca'])){
			?>
			<form action="cadastrarConsultas.php" method="POST">

			<p>Digite o seu CFMV:
<<<<<<< HEAD
				<input type="text" name="cfmvvaca" size="20" maxlength="20" required></p>
=======
				<input type="text" name="cfmv_vac" size="20" maxlength="20" required></p>
>>>>>>> d2b64f161c7564b0179dde51697ed24139f7895d
			<p>Escolhe a data da consulta:
				<input type="date" name="datavaca" max="<?php Echo date("Y-m-d"); ?>" required> </p>
			<p>Digite o horario:
				<input type="time" name="horariovaca" required></p>
			<p>Breve histórico:
<<<<<<< HEAD
			<input type="text" name="historicovaca" size="50" required>	
			<input type="hidden" name="Identificacao_vac" value="<?php echo $_POST['vaca'];?>">	
=======
			<input type="text" name="historico" size="50" required>	
			<input type="hidden" name="id_vac" value="<?php echo $_POST['vaca'];?>">
>>>>>>> d2b64f161c7564b0179dde51697ed24139f7895d
			<p><input type="submit" value="registrar"></p>		
			</form>
			<?php
		}
		if(isset($_POST['Cfmv'])){
			$cfmv=$_POST['cfmv'];
			$data=$_POST['data'];
			$horario=$_POST['horario'];
			$historico=$_POST['historico'];
			$id_cav=$_POST['Identificacao_cav'];
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
<<<<<<< HEAD

if(isset($_POST['cfmvovl'])){
			$cfmvovl=$_POST['cfmvovl'];
			$dataovl=$_POST['dataovl'];
			$horarioovl=$_POST['horarioovl'];
			$historicoovl=$_POST['historicoovl'];
=======
		else if(isset($_POST['cfmv_ovl'])){
			$cfmv_ovl=$_POST['cfmv_ovl'];
			$data=$_POST['data'];
			$horario=$_POST['horario'];
			$historico=$_POST['historico'];
>>>>>>> d2b64f161c7564b0179dde51697ed24139f7895d
			$id_ovl=$_POST['id_ovl'];
			require_once 'model/consultaOvl.php';
			$codigo=retornaUltimaConsultaOvl();
			if($codigo>=0){
				$codigo++;
<<<<<<< HEAD
				$resposta=cadastrarConsultaOvl($codigo,$id_ovl,$cfmvovl,$dataovl,$horarioovl,$historicoovl);
=======
				$resposta=cadastrarConsultaOvl($codigo,$id_ovl,$cfmv_ovl,$data,$horario,$historico);
>>>>>>> d2b64f161c7564b0179dde51697ed24139f7895d
				if(!$resposta){
					echo "<h5>Falha na tentativa de cadastro!</h5>";
				}else{
					echo "<h5>Cadastro com sucesso!";
				}
			}
		}
<<<<<<< HEAD
		if(isset($_POST['cfmvvaca'])){
			$cfmvvaca=$_POST['cfmvvaca'];
			$datavaca=$_POST['datavaca'];
			$horariovaca=$_POST['horariovaca'];
			$historicovaca=$_POST['historicovaca'];
			$Identificacao_vac=$_POST['Identificacao_vac'];
=======
else if(isset($_POST['cfmv_vac'])){
			$cfmv=$_POST['cfmv_vac'];
			$data=$_POST['data'];
			$horario=$_POST['horario'];
			$historico=$_POST['historico'];
			$id_vac=$_POST['id_vac'];
>>>>>>> d2b64f161c7564b0179dde51697ed24139f7895d
			require_once 'model/consultarVac.php';
			$codigo=retornaUltimaConsultaVac();
			if($codigo>=0){
				$codigo++;
<<<<<<< HEAD
				$resposta=cadastrarConsultaVac($codigo,$Identificacao_vac,$cfmvvaca,$datavaca,$horariovaca,$historicovaca);
=======
				$resposta=cadastrarConsultaVac($codigo,$id_vac,$cfmv,$data,$horario,$historico);
>>>>>>> d2b64f161c7564b0179dde51697ed24139f7895d
				if(!$resposta){
					echo "<h5>Falha na tentativa de cadastro!</h5>";
				}else{
					echo "<h5>Cadastro com sucesso!";
				}
			}
		}
<<<<<<< HEAD
=======

>>>>>>> d2b64f161c7564b0179dde51697ed24139f7895d




			?>




</body>
</html>