<?php require_once 'cabecalho.php'; ?> 

	<form action="CadastrarVeterinario.php" method="POST" enctype="multipart/form-data" id="veterinario">
		<form id="push" action="CadastrarVeterinario.php" method="POST">


			<p><select name="animal">
			<option value="ovelha">Ovelha</option>
			<option value="vaca">Vaca</option>
			<option value="cavalo">Cavalo</option>

		</select>
<h3><input type="submit" onclick="mostra()" name="enviar" value="Cadastrar"></h3>







<?php 

      if (isset($_POST['animal'])) {
                  $animal=$_POST['animal'];
                  if($animal=="ovelha"){
?>
<form action="CadastrarVeterinario.php" method="POST">  

		<h1>&#9877; Veterinário &#9877;</h1>
	

		<p> Nome do Veterinário: <input type="text" name="nomevetovl" size="80" maxlength="80" required></p>

		<p>Nascimento: <input type="date" name="nasci" required></p>

		<p>Data da visita do Veterinário: <input type="date" name="data" required></p>
		<p>Telefone: <input type="text" name="telovl" placeholder="(99)9999-9999" required></p>

		<p>Cuidados: <input type="text" name="cuidadosovl" size="80" maxlength="80" required></p>

		<h3><input type="submit" onclick="mostra()" name="enviar" value="Cadastrar"></h3>
	
		
	</form>








<?php
}else if($animal=="cavalo"){
?>
<form action="CadastrarVeterinario.php" method="POST">  

		<h1>&#9877; Veterinário &#9877;</h1>


	

		<p> Nome do Veterinário: <input type="text" name="nomevetcav" size="80" maxlength="80" required></p>
		<p>Tosa: <input type="text" name="tosa" required>
		<p>Casqueamento: <input type="text" name="casc" required> </p>
		<p>Telefone: <input type="text" name="tel" placeholder="(99)9999-9999" required></p>


		<p>Cuidados: <input type="text" name="cuidadoscav" size="80" maxlength="80" required></p>

	<p> Data de visita:<input type="date" name="datevisitacav" required></p>


		<h3><input type="submit" onclick="mostra()" name="enviar" value="Cadastrar"></h3>
	
		
	</form>










<?php
}else if($animal=="vaca"){
?>
<form action="CadastrarVeterinario.php" method="POST">  

		<h1>&#9877; Veterinário &#9877;</h1>


	

		<p>Nome do Veterinário: <input type="text" name="nomevetvac" size="80" maxlength="80" required></p>
		<p>Nascimento: <input type="date" name="nascivac" required>
		<p>Casqueamento: <input type="text" name="cascvac" required> </p>
		<p>Telefone: <input type="text" name="telvac" placeholder="(99)9999-9999" required></p>


		<p>Cuidados: <input type="text" name="cuidadosvac" size="80" maxlength="80" required></p>

		<p> Data de visita:<input type="date" name="datevisitavac" required></p>

		<p><input type="hidden" name="identificacaovac" value="<?php echo $_POST['nomevetvac']; ?>"></p>
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

		require_once 'model/Veterinario.php';
		$CFMV=retornaUltimoVet();
	if($CFMV>=0){
		$CFMV++;
		$resp=Veterinario($CFMV,$nome_vet,$nasc_vet,$tel_ovl,$data_visita,$cuidados_vet);
	if(!$resp){
		echo "<h5>Erro na tentativa de cadastro!!!</h5>";
	}else{
		echo "<h5>Veterinario cadastrado com sucesso! :) </h5>";
	}
		
	}
}








if(isset($_POST['nomevetcav'])){


		$nome_vetcav=$_POST['nomevetcav'];
		$tosa_vet=$_POST['tosa'];
		$Casqueamento_cav['casc'];
		$tel_vet['tel'];
		$cuidados_vet=$_POST['cuidadoscav'];
		$data_visita=$_POST['datevisitacav'];

		require_once 'model/VeterinarioCav.php';
		$CFMV=retornaUltimoVetCav();
	if($CFMV>=0){
		$CFMV++;
		$resp=VeterinarioCav($CFMV,$nome_vetcav,$tosa_vet,$Casqueamento_visita,$tel_vet,$cuidados_vet,$data_visita);
	if(!$resp){
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
		require_once 'model/VeterinarioVac.php';
		$CFMV=retornaUltimoVetVac();
	if($CFMV>=0){
		$CFMV++;
		$resp=VeterinarioVac($CFMV, $data_vac, $nome_vetvac, $tel_vac, $nasc_vetvac,$cuidados_vac, $Casqueamento_vac, $Identificacao_vac);
	if(!$resp){
		echo "<h5>Erro na tentativa de cadastro!!!</h5>";
	}else{
		echo "<h5>Veterinario cadastrado com sucesso! :) </h5>";
	}
		
	}
}






		
?>



	<script src="js/mensagem.js"></script>

</body>

</html>