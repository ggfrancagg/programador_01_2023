<?php require_once 'cabecalho.php'; ?>



<form id="push" action="cadastrarVaca.php" method="POST" >

	<h2>Cadastro de vacas</h2>

<p>Nome:<input type="text" name="nome" size="40" maxlength="40" pattern="[A-Za-z]{2,40}" required></p>

<p>Raça:<input type="text" name="raca" required></p>
	
	

<p>Peso<input type="text" name="peso" pattern="[0-9]{1,8}\[0-9]{2}" placeholder="00,00"
    title="Somente números, gramas obrigatórias, ponto e não vírgula EX: 22.44 kg" required>KG
	</p> 

<p>Data de nascimento:
		<input type="date" name="nasci" max="<?php echo date ("Y-m-d");?>" min="<?php echo criarMinimo(date("Y-m-d")); ?>" required></p>
	

<p> Raça da mãe: <input type="text" name="racamae" required></p>
<p> Raça do pai: <input type="text" name="racapai" required></p>


<p>Altura:<input type="text" name="alt" pattern="[0-9]{1,8}\[0-9]{2}" placeholder="00.00" title="Somente números, centrimetros obrigatórios, ponto e não vírgula EX: 01.50 de altura" required>cm</p>

   

<p>Sexo:<input type="radio" id="sexo-m" name="sexo" value="Masculino" required>
	<label for="sexo-m">Macho</label>
	<input type="radio" id="sexo-f" name="sexo" value="Feminino">
	<label for="sexo-f">Fêmea</label>
</p>

	<p><input type="submit" onclick="mostra()" name="enviar" value="Cadastre"></p>
</form>

<?php 




if(isset($_POST['nome'])){

	$Nome_vac=$_POST['nome'];
	$Raca_vac=$_POST['raca'];
	$Peso_vac=$_POST['peso'];	
	$Datanasc_vac=$_POST['nasci'];
	$Racamae_vac=$_POST['racamae'];
	$Racapai_vac=$_POST['racapai'];
	$Altura_vac=$_POST['alt'];
    	$sexo_vac=$_POST['sexo'];


require_once 'model/Vaca.php';
$Identificacao_vac=retornaUltimaVaca();

	if($Identificacao_vac>=0){
		$Identificacao_vac++;
		$resp=cadastrarVaca($Identificacao_vac,$Nome_vac,$Raca_vac,$Peso_vac,$Datanasc_vac,$Racamae_vac,$Racapai_vac,$Altura_vac,$sexo_vac);
	if(!$resp){
		echo "<h2>Erro na tentativa de cadastro!!!</h2>";
	}else{
		echo "<h2>Vaquinha cadastrada com sucesso! :) </h2>";
	}
		
	}
}

function criarMinimo($hoje){
	$ano=substr($hoje, 0,4);
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
