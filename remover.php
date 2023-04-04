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
		$Identificacao_vac=$_POST['Identificacao_vac'];

		require_once 'model/Vaca.php';
		$resposta=removerBovino($Identificacao_vac);
		if (!$resposta) {
			echo "<h2>Erro na tentativa de remover!</h2>";
		}else{
			echo "<h2>Removido com sucesso!</h2>";
		}

	}

?>