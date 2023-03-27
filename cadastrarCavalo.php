<?php require_once 'cabecalho.php'; ?>
<form action="cadastrarCavalo.php" method="POST">
	<h1>Cadastro de Cavalo</h1>
	<p>Nome do Cavalo:<input type="text" name="nome" size="30" maxlength="30" pattern="[A-Za-z]{2,30}" required></p>
	<p>Raça do Cavalo:<input type="text" name="raca" size="30" maxlength="30" pattern="[A-Za-z]{2,30}" required></p>
	<p>Data de Nascimento:<input type="date" name="datanasc" min="2000-01-01" max="2030-01-01" required></p>
	<p>Sexo do Cavalo:<input type="radio" name="sexo" value="cavalho"> Cavalo<input type="radio" name="sexo" value="egua"/>Egua
		</p>
		<p>Peso:<input type="text" name="peso" pattern="[0-9]{1-4}[0-9]{2}" placeholder="99.99" title="Somente números, use ponto e não virgula ex:99.99" required></p>
		<p>Raça do Pai: <input type="text" name="racadopai" size="30" maxlength="30" required> </p>
		<p>Altura: <input type="text" name="altura_cav" pattern="[0-9]{1-3}[0-9]{2}" placeholder="9.99" title="use punto e não virgula ex:9.99" required></p>
		<p>Raça da Mãe: <input type="text" name="racadamae" size="30" maxlength="30" required></p>
		<p> <input type="submit" name="enviar" value="cadastrar"></p>

		<?php
		if(isset($_POST['nome'])){

			$Nome_cav=$_POST['nome'];
			$Raca_cav=$_POST['raca'];
			$Datanasc_cav=$_POST['datanasc'];
			$Sexo_cav=$_POST['sexo'];
			$Peso=$_POST['peso'];
			$Racapai_cav=$_POST['racadopai'];
			$Altura_cav=$_POST['altura_cav'];
			$Racamae_cav=$_POST['racadamae'];

			require_once 'model/cavalo.php';
			$codigo=retornaUltimoCodigo();
			if(!$codigo){
				echo "<h2>Não tem cavalo cadastrado!";
			}else{
				$codigo++;
				$resposta=cadastrarCavalo($codigo,$Nome_cav,$Raca_cav,$Datanasc_cav,$Sexo_cav,$Peso,$Racapai_cav,$Altura_cav,$Racamae_cav);
				if(!$resposta){
					echo "<h2>Falha na tentativa de cadastro!</h2>";
				}else{
					echo "<h2>Cadastrado com sucesso!</h2>";
				}
			}

		}	



		?>



	</form>
	</html>


