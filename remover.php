<?php require_once 'cabecalho.php';

	if (isset($_POST['Identificacao_vac'])) {
		$Identificacao_vac=$_POST['Identificacao_vac'];
		require_once 'model/Vaca.php';
		$consulta=acharBovino($Identificacao_vac);
		if (!$consulta) {
			return "<h2>Bovino não encontrado!</h2>";
		}else{
			while ($linha=$consulta->fetch_assoc()) {
				
?>
<form action="remover.php" method="POST">  
	<h1>Remover Bovino</h1>
	<span> &#128046; </span>
	<p>Nome do Bovino:<input type="text" name="nome" size="40" maxlength="40" value="<?php echo $linha['Nome_vac']; ?>"></p>
	
		<input type="hidden" name="Identificacao_vac" value="<?php echo $linha['Identificacao_vac']; ?>">
	<br/>
	<p><input type="submit" onclick='mostra()' class="enviar" value="Remover"></p>
</form>

<?php
			}
		}
	}
	if (isset($_POST['nome'])) {
		$nome=$_POST['nome'];
		$Identificacao_vac=$_POST['Identificacao_vac'];

		require_once 'model/Vaca.php';
		$resposta=removerBovino($Identificacao_vac);
		if (!$resposta) {
			echo "<h2>Erro na tentativa de remover!</h2>";
		}else{
			echo "<h2>Removido com sucesso!</h2>";
		}

	}else if (isset($_POST['Identificacao_cav'])) {
		$Identificacao_cav=$_POST['Identificacao_cav'];
		require_once 'model/Cavalo.php';
		$consulta=acharEquino($Identificacao_cav);
		if (!$consulta) {
			return "<h2>Equino não encontrado!</h2>";
		}else{
			while ($linha=$consulta->fetch_assoc()) {
				
?>
<form action="remover.php" method="POST">  
	<h1>Remover Equino</h1>
	<span> &#128052; </span>
	<p>Nome do Equino:<input type="text" name="nomecav" size="40" maxlength="40" value="<?php echo $linha['Nome_cav']; ?>"></p>
	
		<input type="hidden" name="Identificacao_cav" value="<?php echo $linha['Identificacao_cav']; ?>">
	<br/>
	<p><input type="submit" onclick='mostra()' class="enviar" value="Remover"></p>
</form>

<?php
			}
		}
	}
	if (isset($_POST['nomecav'])) {
		$nome=$_POST['nomecav'];
		$Identificacao_cav=$_POST['Identificacao_cav'];

		require_once 'model/Cavalo.php';
		$resposta=removerEquino($Identificacao_cav);
		if (!$resposta) {
			echo "<h2>Erro na tentativa de remover!</h2>";
		}else{
			echo "<h2>Removido com sucesso!</h2>";
		}

	}	else if (isset($_POST['id_ovl'])) {
		$id_ovl=$_POST['id_ovl'];
		require_once 'model/Ovelha.php';
		$consulta=acharOvino($id_ovl);
		if (!$consulta) {
			return "<h2>Ovino não encontrado!</h2>";
		}else{
			while ($linha=$consulta->fetch_assoc()) {
				
?>
<form action="remover.php" method="POST">  
	<h1>Remover Ovino</h1>
	<span> &#128052; </span>
	<p>Nome do Ovino:<input type="text" name="nomeovl" size="40" maxlength="40" value="<?php echo $linha['nome_ovl']; ?>"></p>
	
		<input type="hidden" name="id_ovl" value="<?php echo $linha['id_ovl']; ?>">
	<br/>
	<p><input type="submit" onclick='mostra()' class="enviar" value="Remover"></p>
</form>

<?php
			}
		}
	}
	if (isset($_POST['nomeovl'])) {
		$nome=$_POST['nomeovl'];
		$id_ovl=$_POST['id_ovl'];

		require_once 'model/Ovelha.php';
		$resposta=removerOvino($id_ovl);
		if (!$resposta) {
			echo "<h2>Erro na tentativa de remover!</h2>";
		}else{
			echo "<h2>Removido com sucesso!</h2>";
		}

	}	else if (isset($_POST['IDvac_cav'])) {
		$IDvac_cav=$_POST['IDvac_cav'];
		require_once 'model/Vacina.php';
		$consulta=acharVacinaEquino($IDvac_cav);
		if (!$consulta) {
			return "<h2>Vacina Equino não encontrado!</h2>";
		}else{
			while ($linha=$consulta->fetch_assoc()) {
				
?>
<form action="remover.php" method="POST">  
	<h1>Remover Vacina Equino</h1>
	<span>  </span>
	<p>Nome da Vacina Equino:<input type="text" name="vacinacav" size="40" maxlength="40" value="<?php echo $linha['Nomevasc_cav']; ?>"></p>
	
		<input type="hidden" name="IDvac_cav" value="<?php echo $linha['IDvac_cav']; ?>">
	<br/>
	<p><input type="submit" onclick='mostra()' class="enviar" value="Remover"></p>
</form>

<?php
			}
		}
	}
	if (isset($_POST['vacinacav'])) {
		$nome=$_POST['vacinacav'];
		$IDvac_cav=$_POST['IDvac_cav'];

		require_once 'model/Vacina.php';
		$resposta=removerVaciCav($IDvac_cav);
		if (!$resposta) {
			echo "<h2>Erro na tentativa de remover!</h2>";
		}else{
			echo "<h2>Removido com sucesso!</h2>";
		}

	}	else if (isset($_POST['IDvasc_vac'])) {
		$IDvasc_vac=$_POST['IDvasc_vac'];
		require_once 'model/Vacina.php';
		$consulta=acharVacinaBovino($IDvasc_vac);
		if (!$consulta) {
			return "<h2>Vacina Bovino não encontrado!</h2>";
		}else{
			while ($linha=$consulta->fetch_assoc()) {
				
?>
<form action="remover.php" method="POST">  
	<h1>Remover Vacina Bovino</h1>
	<span>  </span>
	<p>Nome da Vacina Bovino:<input type="text" name="vacinavac" size="40" maxlength="40" value="<?php echo $linha['Nomevasc_vac']; ?>"></p>
		<input type="hidden" name="IDvasc_vac" value="<?php echo $linha['IDvasc_vac']; ?>">
	<br/>
	<p><input type="submit" onclick='mostra()' class="enviar" value="Remover"></p>
</form>

<?php
			}
		}
	}
	if (isset($_POST['vacinavac'])) {
		$nome=$_POST['vacinavac'];
		$IDvasc_vac=$_POST['IDvasc_vac'];

		require_once 'model/Vacina.php';
		$resposta=removerVaciVac($IDvasc_vac);
		if (!$resposta) {
			echo "<h2>Erro na tentativa de remover!</h2>";
		}else{
			echo "<h2>Removido com sucesso!</h2>";
		}

	}else if (isset($_POST['IDvasc_ovl'])) {
		$IDvasc_ovl=$_POST['IDvasc_ovl'];
		require_once 'model/Vacina.php';
		$consulta=acharVacinaOvino($IDvasc_ovl);
		if (!$consulta) {
			return "<h2>Vacina Ovino não encontrado!</h2>";
		}else{
			while ($linha=$consulta->fetch_assoc()) {
				
?>
<form action="remover.php" method="POST">  
	<h1>Remover Vacina Ovino</h1>
	<span>  </span>
	<p>Nome da Vacina Ovino:<input type="text" name="vacinaovl" size="40" maxlength="40" value="<?php echo $linha['Nomevasc_ovl']; ?>"></p>IDvasc_ovl
		<input type="hidden" name="IDvasc_ovl" value="<?php echo $linha['IDvasc_ovl']; ?>">
	<br/>
		<p><input type="submit" onclick='mostra()' class="enviar" value="Remover"></p>
</form>

<?php
			}
		}
	}
	if (isset($_POST['vacinaovl'])) {
		$nome=$_POST['vacinaovl'];
		$IDvasc_ovl=$_POST['IDvasc_ovl'];

		require_once 'model/Vacina.php';
		$resposta=removerVaciOvl($IDvasc_ovl);
		if (!$resposta) {
			echo "<h2>Erro na tentativa de remover!</h2>";
		}else{
			echo "<h2>Removido com sucesso!</h2>";
		}

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