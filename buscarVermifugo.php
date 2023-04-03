<?php require_once 'cabecalho.php';?>

<form action="buscarVermifugo.php" method="GET">
<?php require_once 'cabecalho.php';
?>

<form action="buscarVermifugo.php" method="GET">
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
	if ($tipo=='vermifugovac') {
			require_once 'model/Vermifugo.php';
			$consulta=buscarVermifugoVac($busca);
			if (!$consulta) {
				echo "<h5>Nenhuma vermifugação correspondente!</h5>";
			}else{
				echo "<table>";
				echo "<tr>";
				echo "<th class='ident'> Identificação </th>";
						echo "<th class='nome'>Nome do vermífugo</th>";
						echo "<th class='raça'> Marca</th>";
						echo "<th class='raça'> Lote </th>";
						echo "<th class='data'> Data de fabricação</th>";
						echo "<th class='data'> Data de validade</th>";
						echo "<th class='data'> Data da aplicação </th>";
						echo "<th class='data'> Próxima aplicação </th>";
				echo "</tr>";

				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
					echo "<td>".$linha['ID_verm']."</td>";				
					echo "<td>".$linha['nome_verm']."</td>";
					echo "<td>".$linha['marca_verm']."</td>";
					echo "<td>".$linha['lote_verm']."</td>";
					echo "<td>".$linha['fabricacao_verm']."</td>";
					echo "<td>".$linha['validade_verm']."</td>";
					echo "<td>".$linha['aplicacao_verm']."</td>";
					echo "<td>".$linha['proximaapli_verm']."</td>";
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

			echo "<table>";
				echo "<tr>";
				echo "<th class='ident'> Identificação </th>";
						echo "<th class='nome'>Nome do vermífugo</th>";
						echo "<th class='raça'> Marca</th>";
						echo "<th class='raça'> Lote </th>";
						echo "<th class='data'> Data de fabricação</th>";
						echo "<th class='data'> Data de validade</th>";
						echo "<th class='data'> Data da aplicação </th>";
						echo "<th class='data'> Próxima aplicação </th>";
				echo "</tr>";

				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
					echo "<td>".$linha['ID_verm']."</td>";				
					echo "<td>".$linha['nome_verm']."</td>";
					echo "<td>".$linha['marca_verm']."</td>";
					echo "<td>".$linha['lote_verm']."</td>";
					echo "<td>".$linha['fabricacao_verm']."</td>";
					echo "<td>".$linha['validade_verm']."</td>";
					echo "<td>".$linha['aplicacao_verm']."</td>";
					echo "<td>".$linha['proximaapli_verm']."</td>";
				echo "</tr>";
				}
				echo "</table>";
			}
	}else if ($tipo=='vacinasovl') {
			require_once 'model/Vermifugo.php';


			$consulta=buscarVermifugoOvl($busca);
			if (!$consulta) {
				echo "<h5>Nenhuma vermifugação correspondente!</h5>";
			}else{

				echo "<table>";
				echo "<tr>";
					echo "<th class='ident'> Identificação </th>";
						echo "<th class='nome'>Nome do vermífugo</th>";
						echo "<th class='raça'> Marca</th>";
						echo "<th class='raça'> Lote </th>";
						echo "<th class='data'> Data de fabricação</th>";
						echo "<th class='data'> Data de validade</th>";
						echo "<th class='data'> Data da aplicação </th>";
						echo "<th class='data'> Próxima aplicação </th>";
				echo "</tr>";

				
		while($linha=$consulta->fetch_assoc()) {
				echo "<tr>";
					echo "<td>".$linha['ID_verm']."</td>";				
					echo "<td>".$linha['nome_verm']."</td>";
					echo "<td>".$linha['marca_verm']."</td>";
					echo "<td>".$linha['lote_verm']."</td>";
					echo "<td>".$linha['fabricacao_verm']."</td>";
					echo "<td>".$linha['validade_verm']."</td>";
					echo "<td>".$linha['aplicacao_verm']."</td>";
					echo "<td>".$linha['proximaapli_verm']."</td>";
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