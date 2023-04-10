<?php require_once 'cabecalho.php'; ?> 

	<form action="cadastrarVeterinario.php" method="POST" enctype="multipart/form-data" id="vermifugo">
		<form id="push" action="cadastrarVeterinario.php" method="POST">

			<h1>Escolha o animal  que você atenda:</h1>
			<br>
			<p><select name="animal">
			<option value="ovelha">Ovino</option>
			<option value="vaca">Bovino</option>
			<option value="cavalo">Equino</option></p>
			</br>
		</select>
	</br>
<h3><input type="submit" onclick="mostra()" name="enviar" value="Cadastrar"></h3>
</form>


<?php 

      if (isset($_POST['animal'])) {
                  $animal=$_POST['animal'];
                  if($animal=="ovelha"){
?>
<form action="cadastrarVeterinario.php" id="cadanimal" method="POST">  

		<h1>&#9877; Veterinário &#9877;</h1>
	

		<p> Nome do Veterinário: <input type="text" name="nomevetovl" size="80" maxlength="80" required></p>

		<p>Nascimento: <input type="date" name="nasci" required></p>

		<p>Data da visita do Veterinário: <input type="date" name="data" required></p>
		<p>Telefone: <input type="text" name="telovl" placeholder="(99)9999-9999" required></p>

		<p>Cuidados: <input type="text" name="cuidadosovl" size="80" maxlength="80" required></p>
<?php

require_once "model/Ovelha.php";
$ovelha=listarOvelha();
		if (!$ovelha) {
			echo "<h2>Não existem animais cadastrados!</h2>";
		}else{
			echo "<h1>Ovinos Cadastrados: </h1>";
			echo "<p>Escolha o animal: <select name='identificacaovl'>";
		while($linha=$ovelha->fetch_assoc()){
			echo "<option value='".$linha['id_ovl']."'>";
			echo $linha['nome_ovl'];
			echo "</option>";
		}
			echo "</select></p>";
	}

?>
		<h3><input type="submit" onclick="mostra()" name="enviar" value="Cadastrar"></h3>
	
		
	</form>








<?php
}else if($animal=="cavalo"){
?>
<form action="cadastrarVeterinario.php" id="cadanimal" method="POST">  

		<h1>&#9877; Veterinário &#9877;</h1>


	

		<p> Nome do Veterinário: <input type="text" name="nomevetcav" size="80" maxlength="80" required></p>
		<p>Tosa: <input type="date" name="tosa" required>
		<p>Casqueamento: <input type="date" name="casc" required> </p>
		<p>Telefone: <input type="text" name="tel" placeholder="(99)9999-9999" required></p>


		<p>Cuidados: <input type="text" name="cuidadoscav" size="80" maxlength="80" required></p>

	<p> Data de visita:<input type="date" name="datevisitacav" required></p>
<?php

require_once "model/Cavalo.php";
$cavalo=listarCavalo();
		if (!$cavalo) {
			echo "<h2>Não existem animais cadastrados!</h2>";
		}else{
			echo "<h1>Equinos Cadastrados: </h1>";
			echo "<p>Escolha o animal: <select name='identificacaocav'>";
		while($linha=$cavalo->fetch_assoc()){
			echo "<option value='".$linha['Identificacao_cav']."'>";
			echo $linha['Nome_cav'];
			echo "</option>";
		}
			echo "</select></p>";
	}

?>

		<h3><input type="submit" onclick="mostra()" name="enviar" value="Cadastrar"></h3>
	
		
	</form>










<?php
}else if($animal=="vaca"){
?>
<form action="cadastrarVeterinario.php" id="cadanimal" method="POST">  

		<h1>&#9877; Veterinário &#9877;</h1>


	

		<p>Nome do Veterinário: <input type="text" name="nomevetvac" size="80" maxlength="80" required></p>
		<p>Nascimento: <input type="date" name="nascivac" required>
		<p>Casqueamento: <input type="date" name="cascvac" required> </p>
		<p>Telefone: <input type="text" name="telvac" placeholder="(99)9999-9999" required></p>


		<p>Cuidados: <input type="text" name="cuidadosvac" size="80" maxlength="80" required></p>

		<p> Data de visita:<input type="date" name="datevisitavac" required></p>
<?php

require_once "model/Vaca.php";
$vaca=listarVaca();
		if (!$vaca) {
			echo "<h2>Não existem animais cadastrados!</h2>";
		}else{
			echo "<h1>Bovinos Cadastrados: </h1>";
			echo "<p>Escolha o animal: <select name='identificacaovac'>";
		while($linha=$vaca->fetch_assoc()){
			echo "<option value='".$linha['Identificacao_vac']."'>";
			echo $linha['Nome_vac'];
			echo "</option>";
		}
			echo "</select></p>";
	}

?>
		<h3><input type="submit" onclick="mostra()" name="enviar" value="Cadastrar"></h3>
	
		
	</form>









<?php
}

}

if(isset($_POST['nomevetovl'])){


		$nome_vet=$_POST['nomevetovl'];
		$nasc_vet=$_POST['nasci'];
		$data_visita=$_POST['data'];
		$tel_ovl=$_POST['telovl'];
		$cuidados_vet=$_POST['cuidadosovl'];
		$Identificacao_ovl=$_POST['identificacaovl'];

		require_once 'model/Veterinario.php';
		$CFMV=retornaUltimoVet();
	if($CFMV>=0){
		$CFMV++;
		$resp=Veterinario($CFMV,$nome_vet,$nasc_vet,$tel_ovl,$data_visita,$cuidados_vet, $Identificacao_ovl);
	if(!$resp){
		echo $sql;
		echo "<h5>Erro na tentativa de cadastro!!!</h5>";
	}else{
		echo "<h5>Veterinario cadastrado com sucesso! :) </h5>";
	}
		
	}
}








if(isset($_POST['nomevetcav'])){


		$nome_vetcav=$_POST['nomevetcav'];
		$tosa_vet=$_POST['tosa'];
		$Casqueamento_cav=$_POST['casc'];
		$tel_vet=$_POST['tel'];
		$cuidados_vet=$_POST['cuidadoscav'];
		$data_visita=$_POST['datevisitacav'];
		$Identificacao_cav=$_POST['identificacaocav'];

		require_once 'model/Veterinario.php';
		$CFMV=retornaUltimoVetCav();
	if($CFMV>=0){
		$CFMV++;
		$resp=VeterinarioCav($CFMV,$tosa_vet,$nome_vetcav,$Casqueamento_cav,$tel_vet,$cuidados_vet,$data_visita, $Identificacao_cav);
	if(!$resp){
		echo $sql;
		echo "<h5>Erro na tentativa de cadastro!!!</h5>";
	}else{
		echo "<h5>Veterinario cadastrado com sucesso! :) </h5>";
	}
		
	}
}








if(isset($_POST['nomevetvac'])){

		$nome_vetvac=$_POST['nomevetvac'];
		$nasc_vetvac=$_POST['nascivac'];
		$Casqueamento_vac=$_POST['cascvac'];
		$tel_vac=$_POST['telvac'];
		$cuidados_vac=$_POST['cuidadosvac'];
		$data_vac=$_POST['datevisitavac'];
		$Identificacao_vac=$_POST['identificacaovac'];
		require_once 'model/Veterinario.php';
		$CFMV=retornaUltimoVetVac();
	if($CFMV>=0){
		$CFMV++;
		$resp=VeterinarioVac($CFMV, $data_vac, $nome_vetvac, $tel_vac, $nasc_vetvac,$cuidados_vac, $Casqueamento_vac, $Identificacao_vac);
	if(!$resp){
		echo $sql;
		echo "<h5>Erro na tentativa de cadastro!!!</h5>";
	}else{
		echo "<h5>Veterinario cadastrado com sucesso! :) </h5>";
	}
		
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