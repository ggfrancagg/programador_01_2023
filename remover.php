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
	<span> &#128017; </span>
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

	}	

	 if (isset($_POST['IDvac_cav'])) {
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

	}	

	 if (isset($_POST['IDvasc_vac'])) {
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

	}

	 if (isset($_POST['IDvasc_ovl'])) {
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


	 if (isset($_POST['CFMVvac'])) {
		$CFMV=$_POST['CFMVvac'];
		require_once 'model/Veterinario.php';
		$consulta=acharVeterinarioBovino($CFMV);
		if (!$consulta) {
			return "<h2>Veterinario Bovino não encontrado!</h2>";
		}else{
			while ($linha=$consulta->fetch_assoc()) {
				
?>
<form action="remover.php" method="POST">  
	<h1>Remover Veterinario Bovino</h1>
	<span>  </span>
	<p>Nome da Veterinario Bovino:<input type="text" name="vetbov" size="40" maxlength="40" value="<?php echo $linha['Nomevet_vac']; ?>"></p>
		<input type="hidden" name="CFMV" value="<?php echo $linha['CFMV']; ?>">
	<br/>
		<p><input type="submit" onclick='mostra()' class="enviar" value="Remover"></p>
</form>

<?php
			}
		}
	}
	if (isset($_POST['vetbov'])) {
		$nome=$_POST['vetbov'];
		$CFMV=$_POST['CFMV'];

		require_once 'model/Veterinario.php';
		$resposta=removerVetVac($CFMV);
		if (!$resposta) {
			echo "<h2>Erro na tentativa de remover!</h2>";
		}else{
			echo "<h2>Removido com sucesso!</h2>";
		}

	}	

	 if (isset($_POST['CFMVcav'])) {
		$CFMV=$_POST['CFMVcav'];
		require_once 'model/Veterinario.php';
		$consulta=acharVeterinarioEquino($CFMV);
		if (!$consulta) {
			return "<h2>Veterinario Equino não encontrado!</h2>";
		}else{
			while ($linha=$consulta->fetch_assoc()) {
				
?>
<form action="remover.php" method="POST">  
	<h1>Remover Veterinario Equino</h1>
	<span>  </span>
	<p>Nome da Veterinario Equino:<input type="text" name="vetcav" size="40" maxlength="40" value="<?php echo $linha['Nomevet_cav']; ?>"></p>
		<input type="hidden" name="CFMV" value="<?php echo $linha['CFMV']; ?>">
	<br/>
		<p><input type="submit" onclick='mostra()' class="enviar" value="Remover"></p>
</form>

<?php
			}
		}
	}
	if (isset($_POST['vetcav'])) {
		$nome=$_POST['vetcav'];
		$CFMV=$_POST['CFMV'];

		require_once 'model/Veterinario.php';
		$resposta=removerVetCav($CFMV);
		if (!$resposta) {
			echo "<h2>Erro na tentativa de remover!</h2>";
		}else{
			echo "<h2>Removido com sucesso!</h2>";
		}

	}	

	if (isset($_POST['CFMVovl'])) {
		$CFMV=$_POST['CFMVovl'];
		require_once 'model/Veterinario.php';
		$consulta=acharVeterinarioOvino($CFMV);
		if (!$consulta) {
			return "<h2>Veterinario Ovino não encontrado!</h2>";
		}else{
			while ($linha=$consulta->fetch_assoc()) {
				
?>
<form action="remover.php" method="POST">  
	<h1>Remover Veterinario Ovino</h1>
	<span>  </span>
	<p>Nome da Veterinario Ovino:<input type="text" name="vatovl" size="40" maxlength="40" value="<?php echo $linha['nome_vet']; ?>"></p>
		<input type="hidden" name="CFMV" value="<?php echo $linha['CFMV']; ?>">
	<br/>
		<p><input type="submit" onclick='mostra()' class="enviar" value="Remover"></p>
</form>

<?php
			}
		}
	}
	if (isset($_POST['vatovl'])) {
		$nome=$_POST['vatovl'];
		$CFMV=$_POST['CFMV'];

		require_once 'model/Veterinario.php';
		$resposta=removerVetOvl($CFMV);
		if (!$resposta) {
			echo "<h2>Erro na tentativa de remover!</h2>";
		}else{
			echo "<h2>Removido com sucesso!</h2>";
		}

	}


	 if (isset($_POST['Id_vermvac'])) {
		$Id_verm=$_POST['Id_vermvac'];
		require_once 'model/Vermifugo.php';
		$consulta=acharVermBovino($Id_verm);
		if (!$consulta) {
			return "<h2>Vermifugo Bovino não encontrado!</h2>";
		}else{
			while ($linha=$consulta->fetch_assoc()) {
				
?>
<form action="remover.php" method="POST">  
	<h1>Remover Vermifugo Bovino</h1>
	<span>  </span>
	<p>Nome da Vermifugo Bovino:<input type="text" name="vermvac" size="40" maxlength="40" value="<?php echo $linha['Nome_verm']; ?>"></p>
		<input type="hidden" name="Id_verm" value="<?php echo $linha['Id_verm']; ?>">
	<br/>
		<p><input type="submit" onclick='mostra()' class="enviar" value="Remover"></p>
</form>

<?php
			}
		}
	}
	if (isset($_POST['vermvac'])) {
		$nome=$_POST['vermvac'];
		$Id_verm=$_POST['Id_verm'];

		require_once 'model/Vermifugo.php';
		$resposta=removerVermVac($Id_verm);
		if (!$resposta) {
			echo "<h2>Erro na tentativa de remover!</h2>";
		}else{
			echo "<h2>Removido com sucesso!</h2>";
		}

	}

	 if (isset($_POST['Id_vermcav'])) {
		$Id_verm=$_POST['Id_vermcav'];
		require_once 'model/Vermifugo.php';
		$consulta=acharVermEquino($Id_verm);
		if (!$consulta) {
			return "<h2>Vermifugo Equino não encontrado!</h2>";
		}else{
			while ($linha=$consulta->fetch_assoc()) {
				
?>
<form action="remover.php" method="POST">  
	<h1>Remover Vermifugo Equino</h1>
	<span>  </span>
	<p>Nome da Vermifugo Equino:<input type="text" name="vermcav" size="40" maxlength="40" value="<?php echo $linha['Nome_verm']; ?>"></p>
		<input type="hidden" name="Id_verm" value="<?php echo $linha['Id_verm']; ?>">
	<br/>
		<p><input type="submit" onclick='mostra()' class="enviar" value="Remover"></p>
</form>

<?php
			}
		}
	}
	if (isset($_POST['vermcav'])) {
		$nome=$_POST['vermcav'];
		$Id_verm=$_POST['Id_verm'];

		require_once 'model/Vermifugo.php';
		$resposta=removerVermCav($Id_verm);
		if (!$resposta) {
			echo "<h2>Erro na tentativa de remover!</h2>";
		}else{
			echo "<h2>Removido com sucesso!</h2>";
		}

	}


	else if (isset($_POST['Id_vermovl'])) {
		$Id_verm=$_POST['Id_vermovl'];
		require_once 'model/Vermifugo.php';
		$consulta=acharVermOvino($Id_verm);
		if (!$consulta) {
			return "<h2>Vermifugo Ovino não encontrado!</h2>";
		}else{
			while ($linha=$consulta->fetch_assoc()) {
				
?>
<form action="remover.php" method="POST">  
	<h1>Remover Vermifugo Ovino</h1>
	<span>  </span>
	<p>Nome da Vermifugo Ovino:<input type="text" name="vermovl" size="40" maxlength="40" value="<?php echo $linha['Nome_verm']; ?>"></p>
		<input type="hidden" name="Id_verm" value="<?php echo $linha['Id_verm']; ?>">
	<br/>
		<p><input type="submit" onclick='mostra()' class="enviar" value="Remover"></p>
</form>

<?php
			}
		}
	}
	if (isset($_POST['vermovl'])) {
		$nome=$_POST['vermovl'];
		$Id_verm=$_POST['Id_verm'];

		require_once 'model/Vermifugo.php';
		$resposta=removerVermOvl($Id_verm);
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