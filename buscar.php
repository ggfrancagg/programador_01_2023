<?php require_once 'cabecalho.php';
?>

<form action="buscar.php" method="GET">
	<h1>Buscar</h1>
	<p><input type="search" name="busca" required></p>
	<p><fieldset>
		<legend>É um:</legend>
			<input id="rad" type="radio" name="tipo" value="bovino" required>Bovino &#128046;
			<input id="rad" type="radio" name="tipo" value="equino" required>Equino &#128052;
			<input id="rad" type="radio" name="tipo" value="ovino" required>Ovino &#128017;
			<input id="rad" type="radio" name="tipo" value="veterinariocav" required>Veterinario Equino &#9877;
			<input id="rad" type="radio" name="tipo" value="veterinariovac" required>Veterinario Bovino &#9877;
			<input id="rad" type="radio" name="tipo" value="veterinarioovl" required>Veterinario Ovino &#9877;
			<input id="rad" type="radio" name="tipo" value="vacinasvac" required>Vacinas Bovinos
			<input id="rad" type="radio" name="tipo" value="vacinascav" required>Vacinas Equinos
			<input id="rad" type="radio" name="tipo" value="vacinasovl" required>Vacinas Ovinos
			<input id="rad" type="radio" name="tipo" value="vermifugosvac" required>Vermifugos Bovinos
			<input id="rad" type="radio" name="tipo" value="vermifugoscav" required>Vermifugos Equinos
			<input id="rad" type="radio" name="tipo" value="vermifugosovl" required>Vermifugos Ovinos
		</fieldset>
</p>
	<h3><input type="submit" onclick='mostra()' value="Buscar"></h3>
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
	
	if(isset($_GET['busca'])){
	$busca=$_GET['busca'];
	$tipo=$_GET['tipo'];
	if ($tipo=="bovino") {
		require_once 'model/Vaca.php';
		$consulta=buscarBovino($busca);
		if (!$consulta) {
			echo "<h2>Nenhum bovino correspondente</h2>";
		}else{
			echo "<table>";
			echo "<tr class='alt'>";
			echo "<th>Código</th>";
			echo "<th>Nome</th>";
			echo "<th>Raça</th>";
			echo "<th>Peso</th>";
			echo "<th>Data de nascimento</th>";
			echo "<th>Raça da Mãe</th>";
			echo "<th>Raça do Pai</th>";
			echo "<th>Altura</th>";
			echo "<th>Sexo</th>";
			echo "<th>Alterar?</th>";
			echo "</tr>";



while ($linha=$consulta->fetch_assoc()) {
			echo "<tr class='alt'>";
			echo "<td>".$linha['Identificacao_vac']."</td>";
			echo "<td>".$linha['Nome_vac']."</td>";
			echo "<td>".$linha['Raca_vac']."</td>";
			echo "<td>".$linha['Peso_vac']."</td>";
			echo "<td>".$linha['Datanasc_vac']."</td>";
			echo "<td>".$linha['Racamae_vac']."</td>";
			echo "<td>".$linha['Racapai_vac']."</td>";
			echo "<td>".$linha['Altura_vac']."</td>";
			echo "<td>".$linha['Altura_vac']."</td>";
			echo "<td><form id='alte' action='alterar.php' method='POST'><input type='hidden' name='Identificacao_vac' 
			value='".$linha['Identificacao_vac']."'><input id='alt' type='submit' value='sim'></form></td>";
			echo "</tr>";
			}
			echo "</table>";
		}

		}else if ($tipo=="equino") {
		require_once 'model/Cavalo.php';
		

			$consulta=buscarCavalo($busca);
			if (!$consulta) {
				echo "<h2>Nenhum equino correspondente!</h2>";
			}else{

				echo "<table>";
				echo "<tr>";
				echo "<th>Código</th>";
				echo "<th>Nome</th>";
				echo "<th>Raça</th>";
				echo "<th>Data de nascimento</th>";
				echo "<th>Sexo</th>";
				echo "<th>Peso</th>";
				echo "<th>Raça do Pai</th>";
				echo "<th>Altura</th>";
				echo "<th>Raça do Mãe</th>";
				echo "<th>Alterar?</th>";
				echo "</tr>";

while ($linha=$consulta->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$linha['Identificacao_cav']."</td>";
		echo "<td>".$linha['Nome_cav']."</td>";
		echo "<td>".$linha['Raca_cav']."</td>";
		echo "<td>".$linha['Datanasc_cav']."</td>";
		echo "<td>".$linha['Sexo_cav']."</td>";
		echo "<td>".$linha['Peso']."</td>";
		echo "<td>".$linha['Racapai_cav']."</td>";
		echo "<td>".$linha['Altura_cav']."</td>";
		echo "<td>".$linha['Racamae_cav']."</td>";
		echo "<td><form id='alterar' action='alterar.php' method='POST'><input type='hidden' name='Identificacao_cav' 
			value='".$linha['Identificacao_cav']."'><input id='alt' type='submit' onclick='mostra()' value='sim'></form></td>";
		echo "</tr>";
	}
		echo "</table>";
			}
		
		}else if ($tipo=='ovino') {
			require_once 'model/Ovelha.php';


			$consulta=buscarOvelha($busca);
			if (!$consulta) {
				echo "<h2>Nenhum ovino correspondente!</h2>";
			}else{

				echo "<table>";
				echo "<tr>";
				echo "<th>Código</th>";
				echo "<th>Nome</th>";
				echo "<th>Idade</th>";
				echo "<th>Raça</th>";
				echo "<th>Sexo</th>";
				echo "<th>Cor</th>";
				echo "<th>Peso</th>";
				echo "<th>Altura</th>";
				echo "<th>Alterar?</th>";
				echo "</tr>";

				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$linha['id_ovl']."</td>";
				echo "<td>".$linha['nome_ovl']."</td>";
				echo "<td>".$linha['idade_ovl']."</td>";
				echo "<td>".$linha['raca_ovl']."</td>";
				echo "<td>".$linha['sexo_ovl']."</td>";
				echo "<td>".$linha['cor_ovl']."</td>";
				echo "<td>".$linha['peso_ovl']."</td>";
				echo "<td>".$linha['altura_ovl']."</td>";
				echo "<td><form id='alterar' action='alterar.php' method='POST'><input type='hidden' name='id_ovl' 
			value='".$linha['id_ovl']."'><input id='alt' type='submit' value='sim'></form></td>";
				echo "</tr>";
		
				}
				echo "</table>";
			}
		}else if ($tipo=='veterinariocav') {
			require_once 'model/veterinarioCav.php';


			$consulta=buscarVeterinarioCav($busca);
			if (!$consulta) {
				echo "<h2>Nenhum Veterinario correspondente!</h2>";
			}else{

				echo "<table>";
				echo "<tr>";
				echo "<th>Código</th>";
				echo "<th>Tosa</th>";
				echo "<th>Nome Veterinario</th>";
				echo "<th>Casqueamento</th>";
				echo "<th>Telefone Veterinario</th>";
				echo "<th>Cuidados</th>";
				echo "<th>Data da visita</th>";
				echo "<th>Código cavalo</th>";
				echo "<th>Alterar?</th>";
				echo "</tr>";

				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$linha['CFMV']."</td>";
				echo "<td>".$linha['Tosa_cav']."</td>";
				echo "<td>".$linha['Nomevet_cav']."</td>";
				echo "<td>".$linha['Casqueamento_cav']."</td>";
				echo "<td>".$linha['Telefonevet_cav']."</td>";
				echo "<td>".$linha['Cuidados_cav']."</td>";
				echo "<td>".$linha['Datavisi_cav']."</td>";
				echo "<td>".$linha['Identificacao_cav']."</td>";
				echo "<td><form id='alterar' action='alterar.php' method='POST'><input type='hidden' name='CFMV' 
			value='".$linha['CFMV']."'><input id='alt' type='submit' value='sim'></form></td>";
				echo "</tr>";
		
				}
				echo "</table>";
			}
	}else if ($tipo=='veterinariovac') {
			require_once 'model/veterinarioVac.php';


			$consulta=buscarVeterinarioVac($busca);
			if (!$consulta) {
				echo "<h2>Nenhum Veterinario correspondente!</h2>";  	
			}else{

				echo "<table>";
				echo "<tr>";
				echo "<th>Código</th>";
				echo "<th>Data da visita</th>";
				echo "<th>Nome Veterinario</th>";
				echo "<th>Telefone Veterinario</th>";
				echo "<th>Data de Nascimento</th>";
				echo "<th>Cuidados</th>";
				echo "<th>Casqueamento</th>";
				echo "<th>Código vaca</th>";
				echo "<th>Alterar?</th>";
				echo "</tr>";
				
			

				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$linha['CFMV']."</td>";
				echo "<td>".$linha['Datavisita_vac']."</td>";
				echo "<td>".$linha['Nomevet_vac']."</td>";
				echo "<td>".$linha['Telefonevet_vac']."</td>";
				echo "<td>".$linha['nascvet_vac']."</td>";
				echo "<td>".$linha['Cuidados_vac']."</td>";
				echo "<td>".$linha['Casqueamento_vac']."</td>";
				echo "<td>".$linha['Identificacao_vac']."</td>";
				echo "<td><form id='alterar' action='alterar.php' method='POST'><input type='hidden' name='CFMV' 
			value='".$linha['CFMV']."'><input id='alt' type='submit' value='sim'></form></td>";
				echo "</tr>";
		
				}
				echo "</table>";
			}
	}else if ($tipo=='veterinarioovl') {
			require_once 'model/Veterinario.php';


			$consulta=buscarOvelha($busca);
			if (!$consulta) {
				echo "<h2>Nenhum Veterinario correspondente!</h2>";
			}else{

				echo "<table>";
				echo "<tr>";
				echo "<th>Código</th>";				
				echo "<th>Nome Veterinario</th>";
				echo "<th>Nascimento veterinario</th>";
				echo "<th>Telefone Veterinario</th>";
				echo "<th>Data da visita</th>";
				echo "<th>Cuidados</th>";
				echo "<th>Código Ovelha</th>";
				echo "<th>Alterar?</th>"; 
				echo "</tr>";

				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$linha['CFMV']."</td>";				
				echo "<td>".$linha['nome_vet']."</td>";
				echo "<td>".$linha['nasc_vet']."</td>";
				echo "<td>".$linha['tel_vet']."</td>";
				echo "<td>".$linha['data_visita']."</td>";
				echo "<td>".$linha['cuidados_vet']."</td>";
				echo "<td>".$linha['id_ovl']."</td>";
				echo "<td><form id='alterar' action='alterar.php' method='POST'><input type='hidden' name='CFMV' 
			value='".$linha['CFMV']."'><input id='alt' type='submit' value='sim'></form></td>";
				echo "</tr>";
		
				}
				echo "</table>";
			}
	}else if ($tipo=='vacinasvac') {
			require_once 'model/Vacina.php';


			$consulta=buscarVacinaVac($busca);
			if (!$consulta) {
				echo "<h2>Nenhuma Vacina correspondente!</h2>";
			}else{

				echo "<table>";
				echo "<tr>";
				echo "<th>Código</th>";				
				echo "<th>Nome</th>";
				echo "<th>Tipo</th>";
				echo "<th>Data aplicação</th>";
				echo "<th>Proxima aplicação</th>";
				echo "<th>Código Bovino</th>";
				echo "<th>Alterar?</th>"; 	
				echo "</tr>";

				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$linha['IDvasc_vac']."</td>";				
				echo "<td>".$linha['Nomevasc_vac']."</td>";
				echo "<td>".$linha['Tipovasc_vac']."</td>";
				echo "<td>".$linha['tel_vet']."</td>";
				echo "<td>".$linha['Dataapli_vac']."</td>";
				echo "<td>".$linha['proximaapli_vac']."</td>";
				echo "<td>".$linha['Identificacao_vac']."</td>";
				echo "<td><form id='alterar' action='alterar.php' method='POST'><input type='hidden' name='IDvasc_vac' 
			value='".$linha['IDvasc_vac']."'><input id='alt' type='submit' value='sim'></form></td>";
				echo "</tr>";
		
				}
				echo "</table>";
			}
	}else if ($tipo=='vacinascav') {
			require_once 'model/Vacina.php';


			$consulta=buscarVacinaCav($busca);
			if (!$consulta) {
				echo "<h2>Nenhum Vacina correspondente!</h2>";
			}else{

				echo "<table>";
				echo "<tr>";
				echo "<th>Código</th>";				
				echo "<th>Data aplicação</th>";
				echo "<th>Proxima aplicação</th>";
				echo "<th>Tipo vacina</th>";
				echo "<th>Nome vacina</th>";				
				echo "<th>Código Equino</th>";
				echo "<th>Alterar?</th>"; 
				echo "</tr>";

				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$linha['IDvac_cav']."</td>";				
				echo "<td>".$linha['Dataapli_cav']."</td>";
				echo "<td>".$linha['proximaapli_cav']."</td>";
				echo "<td>".$linha['Tipovasc_cav']."</td>";
				echo "<td>".$linha['Nomevasc_cav']."</td>";				
				echo "<td>".$linha['Identificacao_cav']."</td>";
				echo "<td><form id='alterar' action='alterar.php' method='POST'><input type='hidden' name='IDvac_cav' 
			value='".$linha['IDvac_cav']."'><input id='alt' type='submit' value='sim'></form></td>";
				echo "</tr>";
		
				}
				echo "</table>";
			}
	}else if ($tipo=='vacinasovl') {
			require_once 'model/Vacina.php';


			$consulta=buscarVacinaOvl($busca);
			if (!$consulta) {
				echo "<h2>Nenhum Vacina correspondente!</h2>";
			}else{

				echo "<table>";
				echo "<tr>";
				echo "<th>Código</th>";				
				echo "<th>Nome vacina</th>";
				echo "<th>Tipo vacina</th>";
				echo "<th>Data aplicação</th>";
				echo "<th>Proxima aplicação</th>";								
				echo "<th>Código Ovino</th>";
				echo "<th>Alterar?</th>"; 
				echo "</tr>";

				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$linha['IDvasc_ovl']."</td>";				
				echo "<td>".$linha['Nomevasc_ovl']."</td>";
				echo "<td>".$linha['Tipovasc_ovl']."</td>";
				echo "<td>".$linha['Dataapli_ovl']."</td>";
				echo "<td>".$linha['proximaapli_ovl']."</td>";				
				echo "<td>".$linha['id_ovl']."</td>";
				echo "<td><form id='alterar' action='alterar.php' method='POST'><input type='hidden' name='IDvasc_ovl' 
			value='".$linha['IDvasc_ovl']."'><input id='alt' type='submit' value='sim'></form></td>";
				echo "</tr>";
		
				}
				echo "</table>";
			}
			}else if ($tipo=='vermifugovac') {
			require_once 'model/Vermifugo.php';


			$consulta=buscarVermifugoVac($busca);
			if (!$consulta) {
				echo "<h2>Nenhum Vermifugo correspondente!</h2>";
			}else{

				echo "<table>";
				echo "<tr>";
				echo "<th>Código Vermifugo</th>";				
				echo "<th>Nome vermifugo</th>";
				echo "<th>Marca vermifugo</th>";
				echo "<th>Lote vermifugo</th>";
				echo "<th>Fabricação vermifugo</th>";								
				echo "<th>Validade vermifugo</th>";
				echo "<th>Aplicação vermifugo</th>";
				echo "<th>Proxima aplicação vermifugo</th>";
				echo "<th>Código Bovino</th>";
				echo "<th>Alterar?</th>"; 
				echo "</tr>";
				
				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$linha['Id_verm']."</td>";				
				echo "<td>".$linha['Nome_verm']."</td>";
				echo "<td>".$linha['Marca vermifugo']."</td>";
				echo "<td>".$linha['Lote_verm']."</td>";
				echo "<td>".$linha['Fabricação_verm']."</td>";				
				echo "<td>".$linha['Validade_verm']."</td>";
				echo "<td>".$linha['aplicacao_verm']."</td>";
				echo "<td>".$linha['proximaapli_verm']."</td>";
				echo "<td>".$linha['Identificacao_vac']."</td>";
				echo "<td><form id='alterar' action='alterar.php' method='POST'><input type='hidden' name='Id_verm' 
			value='".$linha['Id_verm']."'><input id='alt' type='submit' value='sim'></form></td>";
				echo "</tr>";
		
				}
				echo "</table>";
			}
			}else if ($tipo=='vermifugocav') {
			require_once 'model/Vermifugo.php';


			$consulta=buscarVermifugoCav($busca);
			if (!$consulta) {
				echo "<h2>Nenhum Vermifugo correspondente!</h2>";
			}else{

				echo "<table>";
				echo "<tr>";
				echo "<th>Código Vermifugo</th>";				
				echo "<th>Nome vermifugo</th>";
				echo "<th>Marca vermifugo</th>";
				echo "<th>Lote vermifugo</th>";
				echo "<th>Fabricação vermifugo</th>";								
				echo "<th>Validade vermifugo</th>";
				echo "<th>Aplicação vermifugo</th>";
				echo "<th>Proxima aplicação vermifugo</th>";
				echo "<th>Código Bovino</th>";
				echo "<th>Alterar?</th>"; 
				echo "</tr>";
				
				
				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$linha['Id_verm']."</td>";				
				echo "<td>".$linha['Nome_verm']."</td>";
				echo "<td>".$linha['Marca vermifugo']."</td>";
				echo "<td>".$linha['Lote_verm']."</td>";
				echo "<td>".$linha['Fabricação_verm']."</td>";				
				echo "<td>".$linha['Validade_verm']."</td>";
				echo "<td>".$linha['aplicacao_verm']."</td>";
				echo "<td>".$linha['proximaapli_verm']."</td>";
				echo "<td>".$linha['Identificacao_cav']."</td>";
				echo "<td><form id='alterar' action='alterar.php' method='POST'><input type='hidden' name='Id_verm' 
			value='".$linha['Id_verm']."'><input id='alt' type='submit' value='sim'></form></td>";
				echo "</tr>";
		
				}
				echo "</table>";
			}
			}else if ($tipo=='vermifugoovl') {
			require_once 'model/Vermifugo.php';


			$consulta=buscarVermifugoOvl($busca);
			if (!$consulta) {
				echo "<h2>Nenhum Vermifugo correspondente!</h2>";
			}else{

				echo "<table>";
				echo "<tr>";
				echo "<th>Código Vermifugo</th>";				
				echo "<th>Nome vermifugo</th>";
				echo "<th>Marca vermifugo</th>";
				echo "<th>Lote vermifugo</th>";
				echo "<th>Fabricação vermifugo</th>";								
				echo "<th>Validade vermifugo</th>";
				echo "<th>Aplicação vermifugo</th>";
				echo "<th>Proxima aplicação vermifugo</th>";
				echo "<th>Código Bovino</th>";
				echo "<th>Alterar?</th>"; 
				echo "</tr>";
				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$linha['Id_verm']."</td>";				
				echo "<td>".$linha['Nome_verm']."</td>";
				echo "<td>".$linha['Marca vermifugo']."</td>";
				echo "<td>".$linha['Lote_verm']."</td>";
				echo "<td>".$linha['Fabricação_verm']."</td>";				
				echo "<td>".$linha['Validade_verm']."</td>";
				echo "<td>".$linha['aplicacao_verm']."</td>";
				echo "<td>".$linha['proximaapli_verm']."</td>";
				echo "<td>".$linha['id_ovl']."</td>";
				echo "<td><form id='alterar' action='alterar.php' method='POST'><input type='hidden' name='Id_verm' 
			value='".$linha['Id_verm']."'><input id='alt' type='submit' value='sim'></form></td>";
				echo "</tr>";
		
				}
				echo "</table>";
			}
		}
	}

?>
<script src="js/mensagem.js"></script>

</body>
</html>