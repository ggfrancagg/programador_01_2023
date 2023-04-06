<?php require_once 'cabecalho.php';

if(isset($_POST['Id_vermVac'])){
		$Id_vermVac=$_POST['Id_vermVac'];
		require_once 'model/Vermifugo.php';
		$consulta=buscarVermifugoVac($Id_vermVac);
		if(!$consulta){
			return "<h2>Não tem vermifugo cadastrado!</h2>";
		}else{
			while ($linha=$consulta->fetch_assoc()) {
?>

	<form action="alterarVermifugo.php" method="POST">  
	<h1>Alterar Vermifugo</h1>
	<span> &#128046; </span>
	<p>Nome do vermifugo:<input type="text" name="nome" size="30" maxlength="30" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ0-9\s]{2,30}" value="<?php echo $linha['Nome_verm']; ?>"></p>
	<p>Marca do vermifugo: <input type="text" name="marca" size="30" maxlength="30" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ0-9\s]{2,30}" value="<?php echo $linha['Marca_verm']; ?>"></p>
	<p>Lote: <input type="text" name="lote" size="40" maxlength="40" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ0-9\s]{2,30}" value="<?php echo $linha['Lote_verm'] ; ?>"></p>
	<p>Fabricação:<input type="date" name="fabricacao" min='2000-01-01' max='2023-03-12'> </p>

	<p>Validade:<input type="date" name="validade" min='2000-01-01' max='2023-03-12'></p>

	<p>Aplicação:<input type="date" name="aplicacao" min='2000-01-01' max='2023-03-12'></p>
	<p>Proxima aplicação:<input type="date" name="proximaapli" min='2000-01-01' max='2023-03-12'></p>

		<input type="hidden" name="Id_verm" value="<?php echo $linha['Id_verm']; ?>">
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

if(isset($_POST['nome'])){
	$nome=$_POST['nome'];
	$marca=$_POST['marca'];
	$lote=$_POST['lote'];
	$fabricacao=$_POST['fabricacao'];
	$validade=$_POST['validade'];
	$aplicacao=$_POST['aplicacao'];
	$proximaapli=$_POST['proximaapli'];
	$Id_verm=$_POST['Id_verm'];
	$Identificacao_vac=$_POST['Identificacao_vac'];

	require_once 'model/vermifugo.php';
	$resposta=alterarVermifugoVac($Id_verm,$nome,$marca,$lote,$fabricacao,$validade,$aplicacao,$proximaapli,$Identificacao_vac);
	if (!$resposta) {
			echo "<h2>Erro na tentativa de alterar!</h2>";
		}else{
			echo "<h2>Alterado com sucesso!</h2>";
		}


}else if(isset($_POST['Id_vermCav'])){
	$Id_vermCav=$_POST['Id_vermCav'];
	require_once 'model/vermifugo.php';
	$consulta=buscarVermifugoCav($Id_vermCav);
	if(!$consulta){
			return "<h2>Não tem vermifugo cadastrado!</h2>";
		}else{
			while ($linha=$consulta->fetch_assoc()) {

?>

<form action="alterarVermifugo.php" method="POST">  
	<h1>Alterar Vermifugo</h1>
	<span> &#128046; </span>
	<p>Nome do vermifugo:<input type="text" name="nomeVer" size="30" maxlength="30" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ0-9\s]{2,30}" value="<?php echo $linha['Nome_verm']; ?>"></p>
	<p>Marca do vermifugo: <input type="text" name="marca" size="30" maxlength="30" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ0-9\s]{2,30}" value="<?php echo $linha['Marca_verm']; ?>"></p>
	<p>Lote: <input type="text" name="lote" size="40" maxlength="40" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ0-9\s]{2,30}" value="<?php echo $linha['Lote_verm'] ; ?>"></p>
	<p>Fabricação:<input type="date" name="fabricacao" min='2000-01-01' max='2023-03-12'> </p>

	<p>Validade:<input type="date" name="validade" min='2000-01-01' max='2023-03-12'></p>

	<p>Aplicação:<input type="date" name="aplicacao" min='2000-01-01' max='2023-03-12'></p>
	<p>Proxima aplicação:<input type="date" name="proximaapli" min='2000-01-01' max='2023-03-12'></p>

		<input type="hidden" name="Id_verm" value="<?php echo $linha['Id_verm']; ?>">
		<input type="hidden" name="Identificacao_cav" value="<?php echo $linha['Identificacao_cav']; ?>">
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
if(isset($_POST['nomeVer'])){
$nomeVer=$_POST['nomeVer'];
	$marca=$_POST['marca'];
	$lote=$_POST['lote'];
	$fabricacao=$_POST['fabricacao'];
	$validade=$_POST['validade'];
	$aplicacao=$_POST['aplicacao'];
	$proximaapli=$_POST['proximaapli'];
	$Id_verm=$_POST['Id_verm'];
	$Identificacao_cav=$_POST['Identificacao_cav'];

	require_once 'model/vermifugo.php';
	$resposta=alterarVermifugoCav($Id_verm,$nomeVer,$marca,$lote,$fabricacao,$validade,$aplicacao,$proximaapli,$Identificacao_cav);
	if (!$resposta) {
			echo "<h2>Erro na tentativa de alterar!</h2>";
		}else{
			echo "<h2>Alterado com sucesso!</h2>";
		}
	}

	else if(isset($_POST['Id_vermOvl'])){
	$Id_vermOvl=$_POST['Id_vermOvl'];
	require_once 'model/vermifugo.php';
	$consulta=buscarVermifugoOvl($Id_vermOvl);
	if(!$consulta){
			return "<h2>Não tem vermifugo cadastrado!</h2>";
		}else{
			while ($linha=$consulta->fetch_assoc()) {


?>

<form action="alterarVermifugo.php" method="POST">  
	<h1>Alterar Vermifugo</h1>
	<span> &#128046; </span>
	<p>Nome do vermifugo:<input type="text" name="nomeOvl" size="30" maxlength="30" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ0-9\s]{2,30}" value="<?php echo $linha['Nome_verm']; ?>"></p>
	<p>Marca do vermifugo: <input type="text" name="marca" size="30" maxlength="30" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ0-9\s]{2,30}" value="<?php echo $linha['Marca_verm']; ?>"></p>
	<p>Lote: <input type="text" name="lote" size="40" maxlength="40" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ0-9\s]{2,30}" value="<?php echo $linha['Lote_verm'] ; ?>"></p>
	<p>Fabricação:<input type="date" name="fabricacao" min='2000-01-01' max='2023-03-12'> </p>

	<p>Validade:<input type="date" name="validade" min='2000-01-01' max='2023-03-12'></p>

	<p>Aplicação:<input type="date" name="aplicacao" min='2000-01-01' max='2023-03-12'></p>
	<p>Proxima aplicação:<input type="date" name="proximaapli" min='2000-01-01' max='2023-03-12'></p>

		<input type="hidden" name="Id_verm" value="<?php echo $linha['Id_verm']; ?>">
		<input type="hidden" name="Id_ovl" value="<?php echo $linha['Id_ovl']; ?>">
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
if(isset($_POST['nomeOvl'])){
	$nomeOvl=$_POST['nomeOvl'];
	$marca=$_POST['marca'];
	$lote=$_POST['lote'];
	$fabricacao=$_POST['fabricacao'];
	$validade=$_POST['validade'];
	$aplicacao=$_POST['aplicacao'];
	$proximaapli=$_POST['proximaapli'];
	$Id_verm=$_POST['Id_verm'];
	$Id_ovl=$_POST['Id_ovl'];

require_once 'model/vermifugo.php';
	$resposta=alterarVermifugoOvl($Id_verm,$nomeOvl,$marca,$lote,$fabricacao,$validade,$aplicacao,$proximaapli,$Id_ovl);
	if (!$resposta) {
			echo "<h2>Erro na tentativa de alterar!</h2>";
		}else{
			echo "<h2>Alterado com sucesso!</h2>";
		}
	}



	?>

</body>
</html>


