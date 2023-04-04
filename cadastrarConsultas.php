<?php require_once 'cabecalho.php'?>

<form id="vermifugo" action="cadastrarConsultas.php" method="POST">
	<h1>Cadastrar consulta</h1>
	<br>
<?php 

 	echo "<h2> &#129658; Escolha o animal a consultar &#129658;</h2>";
 	echo "<br>";
	echo "<p><input type='radio'id='animal' name='animal' value='cavalo' required> Equino ";
	echo "<input type='radio'id='animal' name='animal' value='ovelha' required> Ovino ";
	echo "<input type='radio'id='animal' name='animal' value='vaca' required> Bovino </p>";
	echo "<br>";
	echo "<h3><input type='submit' value='enviar'></h3>";
	echo "</form>";

	if(isset($_POST['animal'])){
		$animal=$_POST['animal'];
	  	if($animal=="cavalo"){
			require_once "model/Cavalo.php";
			echo "<form action='cadastrarConsultas.php' id='animalcadas' method='POST'>";
			$cavalo=listarCavalo();
			if(!$cavalo) {
				echo "<h5>Não existem animais cadastrados!</h5>";
			}else{
				echo "<h2>Equinos cadastrados: </h2>";
				echo "<br>";
				echo "<p>Escolha o animal: <select name='cavalo'>";
				while ($linha=$cavalo->fetch_assoc()) {
				echo "<option value='".$linha['Identificacao_cav']."'>";
				echo $linha['Nome_cav'];
				echo "</option>";
				}
				echo "</select></p>";
				echo "</br>";
				echo "<h3><input type='submit' value='Escolher'></h3>";
				}echo "</form>";
			}else if
			($animal=="ovelha"){
				require_once "model/Ovelha.php";
				echo "<form action='cadastrarConsultas.php' id='animalcadas' method='POST'>";
				$ovelha=listarOvelha();
				if(!$ovelha){
					echo "<h5> Não existem animais cadastrados!</h5>";
				}else{
					echo "<h2>Ovinos cadastrados: </h2>";
					echo "<br>";
					echo "<p> Escolha o animal: <select name='ovelha'>";
					while($linha=$ovelha->fetch_assoc()){
					echo "<option value='".$linha['id_ovl']."'>";
					echo $linha['nome_ovl'];
					echo "</option>";
				}
				echo "</select></p>";
				echo "</br>";
				echo "<h3> <input type='submit' value='Escolher'></h3>";
			}echo "</form>";
		}else if($animal=="vaca"){
			require_once "model/Vaca.php";
			echo "<form action='cadastrarConsultas.php' id='animalcadas' method='POST'>";
			$vaca=listarVaca();
			if(!$vaca){
				echo "<h5>Não existem animais cadastrados!</h5>";
			}else{
				echo "<h2>Bovinos cadastrados: </h2>";
				echo "<br>";
				echo "<p> Escolha o animal: <select name='vaca'>";
				while ($linha=$vaca->fetch_assoc()) {
				echo "<option value='".$linha['Identificacao_vac']."'>";
				echo $linha['Nome_vac'];
				echo "</option>";
				}
				echo "</select></p>";
				echo "</br>";
				echo "<h3><input type='submit' value='Escolher'></h3> ";
			}echo "</form>";
		}
	}
	if(isset($_POST['cavalo'])){

		?>
		<form action="cadastrarConsultas.php" id="cadanimal" method="POST">

			<p>Digite o seu CFMV:
				<input type="text" name="cfmv" size="20" maxlength="20" required></p>
			<p>Escolhe a data da consulta:
				<input type="date" name="data" max="<?php Echo date("Y-m-d"); ?>" required> </p>
			<p>Digite o horario:
				<input type="time" name="horario" required></p>
			<p>Breve histórico:
			<input type="text" name="historico" size="50" required>
			<input type="hidden" name="Identificacao_cav" value="<?php echo $_POST['cavalo'];?>">
			</br></br>
			<h3><input type="submit" value="Registrar"></h3>		
			</form>
			<?php 
		}
		if(isset($_POST['ovelha'])){
			?>
			<form action="cadastrarConsultas.php" id="cadanimal" method="POST">

			<p>Digite o seu CFMV:
				<input type="text" name="cfmv_ovl" size="20" maxlength="20" required></p>
			<p>Escolhe a data da consulta:
				<input type="date" name="data" max="<?php Echo date("Y-m-d"); ?>" required> </p>
			<p>Digite o horario:
				<input type="time" name="horario" required></p>
			<p>Breve histórico:
			<input type="text" name="historico" size="50" required>	
			<input type="hidden" name="id_ovl" value="<?php echo $_POST['ovelha'];?>">
			</br></br>
			<h3><input type="submit" value="Registrar"></h3>		
			</form> 
			<?php
		}
		if(isset($_POST['vaca'])){
			?>
			<form action="cadastrarConsultas.php" id="cadanimal" method="POST">

			<p>Digite o seu CFMV:
				<input type="text" name="cfmv_vac" size="20" maxlength="20" required></p>
			<p>Escolhe a data da consulta:
				<input type="date" name="data" max="<?php Echo date("Y-m-d"); ?>" required> </p>
			<p>Digite o horario:
				<input type="time" name="horario" required></p>
			<p>Breve histórico:
			<input type="text" name="historico" size="50" required>	
			<input type="hidden" name="id_vac" value="<?php echo $_POST['vaca'];?>">
			</br></br>
			<h3><input type="submit" value="Registrar"></h3>		
			</form>
			<?php
		}
		if(isset($_POST['cfmv'])){
			$cfmv=$_POST['cfmv'];
			$data=$_POST['data'];
			$horario=$_POST['horario'];
			$historico=$_POST['historico'];
			$id_cav=$_POST['Identificacao_cav'];
			require_once 'consulta.php';
			$codigo=retornaUltimaConsultaCav();
			if($codigo>=0){
				$codigo++;
				$resposta=cadastrarConsultaCav($codigo,$id_cav,$cfmv,$data,$horario,$historico);
				if(!$resposta){
					echo "<h5>Falha na tentativa de cadastro!</h5>";
				}else{
					echo "<h5>Cadastro com sucesso!</h5>";
				}
			}
		}

if(isset($_POST['cfmv_ovl'])){
			$cfmv_ovl=$_POST['cfmv_ovl'];
			$data=$_POST['data'];
			$horario=$_POST['horario'];
			$historico=$_POST['historico'];
			$id_ovl=$_POST['id_ovl'];
			require_once 'consulta.php';
			$codigo=retornaUltimaConsultaOvl();
			if($codigo>=0){
				$codigo++;
				$resposta=cadastrarConsultaOvl($codigo,$id_ovl,$cfmv_ovl,$data,$horario,$historico);
				if(!$resposta){
					echo "<h5>Falha na tentativa de cadastro!</h5>";
				}else{
					echo "<h5>Cadastro com sucesso!</h5>";
				}
			}
		}

		if(isset($_POST['cfmv_vac'])){
			$cfmv=$_POST['cfmv_vac'];
			$data=$_POST['data'];
			$horario=$_POST['horario'];
			$historico=$_POST['historico'];
			$id_vac=$_POST['id_vac'];
			require_once 'consulta.php';
			$codigo=retornaUltimaConsultaVac();
			if($codigo>=0){
				$codigo++;
				$resposta=cadastrarConsultaVac($codigo,$id_vac,$cfmv,$data,$horario,$historico);
				if(!$resposta){
					echo "<h5>Falha na tentativa de cadastro!</h5>";
				}else{
					echo "<h5>Cadastro com sucesso!</h5>";
				}
			}
		}
			?>




</body>
</html>