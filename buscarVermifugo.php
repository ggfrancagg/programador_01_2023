<?php require_once 'cabecalho.php';?>


<form action="buscarVermifugo.php" method="GET">
	<h1>Buscar</h1>
	<p><input type="search" name="busca" placeholder="Nome ou Numero de identificação" required></p>
	<p><fieldset>
		<legend><h1>Buscar Vermifugação:</h1></legend>
			<p><input id="rad" type="radio" name="tipo" value="vermifugovac" required>Vermífugo Bovinos</p>
			<p><input id="rad" type="radio" name="tipo" value="vermifugocav" required>Vermífugo Equinos</p>
			<p><input id="rad" type="radio" name="tipo" value="vermifugoovl" required>Vermífugo Ovinos</p>
			
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
	
	if(isset($_GET['tipo'])){
	$tipo=$_GET['tipo'];
	$busca=$_GET['busca'];
	if ($tipo=='vermifugovac') {
			require_once 'model/Vermifugo.php';

			$consulta=buscarVermifugoVac($busca);
			if (!$consulta) {
				echo "<h5>Nenhuma vermifugação correspondente!</h5>";
			}else{
				echo "<table id='listarbicho'>";
				echo "<tr>";
				echo "<th class='ident'> Identificação </th>";
						echo "<th class='nome'>Nome do vermífugo</th>";
						echo "<th class='raça'> Marca</th>";
						echo "<th class='raça'> Lote </th>";
						echo "<th class='data'> Data de fabricação</th>";
						echo "<th class='data'> Data de validade</th>";
						echo "<th class='data'> Data da aplicação </th>";
						echo "<th class='data'> Próxima aplicação </th>";
						echo "<th class='ident'>Alterar?</th>";
						echo "</tr>";

				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
					echo "<td>".$linha['Id_verm']."</td>";				
					echo "<td>".$linha['Nome_verm']."</td>";
					echo "<td>".$linha['Marca_verm']."</td>";
					echo "<td>".$linha['Lote_verm']."</td>";
					echo "<td>".$linha['Fabricacao_verm']."</td>";
					echo "<td>".$linha['Validade_verm']."</td>";
					echo "<td>".$linha['aplicacao_verm']."</td>";
					echo "<td>".$linha['proximaapli_verm']."</td>";

					echo "<td><form action='alterarVermifugo.php' method='POST'><input type='hidden' name='Id_vermVac' value='".$linha['Id_verm']."'><input type='submit' value='sim'></form></td>";
					echo "</tr>";
				}
					echo "</table>";
			}
	}else if ($tipo=='vermifugocav') {
			require_once 'model/Vermifugo.php';


			$consulta=buscarVermifugoCav($busca);
			if (!$consulta) {
				echo "<h5>Nenhuma vermifugação correspondente!</h5>";
			}else{

			echo "<table id='listarbicho'>";
				echo "<tr>";
				echo "<th class='ident'> Identificação </th>";
						echo "<th class='nome'>Nome do vermífugo</th>";
						echo "<th class='raça'> Marca</th>";
						echo "<th class='raça'> Lote </th>";
						echo "<th class='data'> Data de fabricação</th>";
						echo "<th class='data'> Data de validade</th>";
						echo "<th class='data'> Data da aplicação </th>";
						echo "<th class='data'> Próxima aplicação </th>";
						echo "<th class='ident'>Alterar?</th>";
				echo "</tr>";

				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
					echo "<td>".$linha['Id_verm']."</td>";				
					echo "<td>".$linha['Nome_verm']."</td>";
					echo "<td>".$linha['Marca_verm']."</td>";
					echo "<td>".$linha['Lote_verm']."</td>";
					echo "<td>".$linha['Fabricacao_verm']."</td>";
					echo "<td>".$linha['Validade_verm']."</td>";
					echo "<td>".$linha['aplicacao_verm']."</td>";
					echo "<td>".$linha['proximaapli_verm']."</td>";
					echo "<td><form action='alterarVermifugo.php' method='POST'><input type='hidden' name='Id_vermCav' value='".$linha['Id_verm']."'><input type='submit' value='sim'></form></td>";
				echo "</tr>";
				}
				echo "</table>";
			}
	}else if ($tipo=='vermifugoovl') {
			require_once 'model/Vermifugo.php';


			$consulta=buscarVermifugoOvl($busca);
			if (!$consulta) {
				echo "<h5>Nenhuma vermifugação correspondente!</h5>";
			}else{

				echo "<table id='listarbicho'>";
				echo "<tr>";
					echo "<th class='ident'> Identificação </th>";
						echo "<th class='nome'>Nome do vermífugo</th>";
						echo "<th class='raça'> Marca</th>";
						echo "<th class='raça'> Lote </th>";
						echo "<th class='data'> Data de fabricação</th>";
						echo "<th class='data'> Data de validade</th>";
						echo "<th class='data'> Data da aplicação </th>";
						echo "<th class='data'> Próxima aplicação </th>";
						echo "<th class='ident'>Alterar?</th>";
				echo "</tr>";

				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
						echo "<td>".$linha['Id_verm']."</td>";				
					echo "<td>".$linha['Nome_verm']."</td>";
					echo "<td>".$linha['Marca_verm']."</td>";
					echo "<td>".$linha['Lote_verm']."</td>";
					echo "<td>".$linha['Fabricacao_verm']."</td>";
					echo "<td>".$linha['Validade_verm']."</td>";
					echo "<td>".$linha['aplicacao_verm']."</td>";
					echo "<td>".$linha['proximaapli_verm']."</td>";
					echo "<td><form action='alterarVermifugo.php' method='POST'><input type='hidden' name='Id_vermOvl' value='".$linha['Id_verm']."'><input type='submit' value='sim'></form></td>";
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