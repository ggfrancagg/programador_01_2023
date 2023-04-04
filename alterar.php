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
<form action="alterar.php" method="POST">  
	<h1>Alterar Bovino</h1>
	<span> &#128046; </span>
	<p>Nome do Bovino:<input type="text" name="nome" size="40" maxlength="40" value="<?php echo $linha['Nome_vac']; ?>"></p>
	<p>Peso: <input type="text" name="peso" pattern="[0-9]{1-3}[0-9]{2}"  placeholder="9.99" title="use punto e não virgula ex:9.99" value="<?php echo $linha['Peso_vac'] ; ?>"></p>
	<p>Altura: <input type="text" name="altura" pattern="[0-9]{1-3}[0-9]{2}"  placeholder="9.99" title="use punto e não virgula ex:9.99" value="<?php echo $linha['Altura_vac'] ; ?>"></p>
	
		<input type="hidden" name="Identificacao_vac" value="<?php echo $linha['Identificacao_vac']; ?>">
	<br/>
	<p><input type="submit" onclick='mostra()' class="enviar" value="Alterar"></p>
</form>
<div id="load">
  <div>G</div>
  <div>N</div>
  <div>I</div>
  <div>D</div>
  <div>A</div>
  <div>O</div>
  <div>L</div> 
</div>

<?php
			}
		}
	}
	if (isset($_POST['nome'])) {
		$nome=$_POST['nome'];
		$peso=$_POST['peso'];
		$altura=$_POST['altura'];
		$Identificacao_vac=$_POST['Identificacao_vac'];

		require_once 'model/Vaca.php';
		$resposta=alterarBovino($Identificacao_vac,$nome,$peso,$altura);
		if (!$resposta) {
			echo "<h2>Erro na tentativa de alterar!</h2>";
		}else{
			echo "<h2>Alterado com sucesso!</h2>";
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
<form action="alterar.php" method="POST">  
	<h1>Alterar Equino</h1>
	<span> &#128052; </span>
	<p>Nome do Equino:<input type="text" name="nomecav" size="40" maxlength="40" value="<?php echo $linha['Nome_cav']; ?>"></p>
	<p>Peso: <input type="text" name="pesocav" pattern="[0-9]{1-3}[0-9]{2}"  placeholder="9.99" title="use punto e não virgula ex:9.99" value="<?php echo $linha['Peso'] ; ?>"></p>
	<p>Altura: <input type="text" name="alturacav" pattern="[0-9]{1-3}[0-9]{2}"  placeholder="9.99" title="use punto e não virgula ex:9.99" value="<?php echo $linha['Altura_cav'] ; ?>"></p>
	
		<input type="hidden" name="Identificacao_cav" value="<?php echo $linha['Identificacao_cav']; ?>">
	<br/>
	<p><input type="submit" onclick='mostra()' class="enviar" value="Alterar"></p>
</form>

<?php
			}
		}
	}
	if (isset($_POST['nomecav'])) {
		$nomecav=$_POST['nomecav'];
		$pesocav=$_POST['pesocav'];
		$alturacav=$_POST['alturacav'];
		$Identificacao_cav=$_POST['Identificacao_cav'];

		require_once 'model/Cavalo.php';
		$resposta=alterarEquino($Identificacao_cav,$nomecav,$pesocav,$alturacav);
		if (!$resposta) {
			echo "<h2>Erro na tentativa de alterar!</h2>";
		}else{
			echo "<h2>Alterado com sucesso!</h2>";
		}

	}else if (isset($_POST['id_ovl'])) {
		$id_ovl=$_POST['id_ovl'];
		require_once 'model/Ovelha.php';
		$consulta=acharOvino($id_ovl);
		if (!$consulta) {
			return "<h2>Equino não encontrado!</h2>";
		}else{
			while ($linha=$consulta->fetch_assoc()) {	
?>
<form action="alterar.php" method="POST">  
	<h1>Alterar Ovino</h1>
	<span> &#128017; </span>
	<p>Nome do Ovino:<input type="text" name="nomeovl" size="40" maxlength="40" value="<?php echo $linha['nome_ovl']; ?>"></p>
	<p>Peso: <input type="text" name="pesoovl" pattern="[0-9]{1-3}[0-9]{2}"  placeholder="9.99" title="use punto e não virgula ex:9.99" value="<?php echo $linha['peso_ovl'] ; ?>"></p>
	<p>Altura: <input type="text" name="alturaovl" pattern="[0-9]{1-3}[0-9]{2}"  placeholder="9.99" title="use punto e não virgula ex:9.99" value="<?php echo $linha['altura_ovl'] ; ?>"></p>
	
		<input type="hidden" name="id_ovl" value="<?php echo $linha['id_ovl']; ?>">
	<br/>
	<p><input type="submit" onclick='mostra()' class="enviar" value="Alterar"></p>
</form>

<?php
			}
		}
	}
	if (isset($_POST['nomeovl'])) {
		$nomeovl=$_POST['nomeovl'];
		$pesoovl=$_POST['pesoovl'];
		$alturaovl=$_POST['alturaovl'];
		$id_ovl=$_POST['id_ovl'];

		require_once 'model/Ovelha.php';
		$resposta=alterarOvino($id_ovl,$nomeovl,$pesoovl,$alturaovl);
		if (!$resposta) {
			echo "<h2>Erro na tentativa de alterar!</h2>";
		}else{
			echo "<h2>Alterado com sucesso!</h2>";
		}
	}
?>
<script src="js/mensagem.js"></script>
</body>
</html>