<?php
require_once 'cabecalho.php';
require_once 'model/Usuario.php';

$estalog=estaLogado();
	if(!$estalog){ 
	echo "<h2>Você não está logado, favor logar!</h2>";
	echo "<a href='//localhost/profGabriel/ProjetoIntegrador/'>Voltar</a>";
}else{ 
?>

<div id="topo">
	<div id="logo">
		<img src="img/logo1.jpg">
	</div>
	<div id="menu">
		<ul class="nav">
			<li>Cadastrar Animal
				<ol>
					<li><a href="cadastrarVaca.php" target="quadro" onclick="mostra()">Bovino &#128046;</a></li>
					<li><a href="cadastrarCavalo.php" target="quadro" onclick="mostra()">Equino &#128052;</a></li>
					<li><a href="cadastrarOvelha.php" target="quadro" onclick="mostra()">Ovino &#128017;</a></li>
			</ol>
			</li>
			<li>Listar Animais
				<ol>
					<li><a href="listarVaca.php" target="quadro" onclick="mostra()">Bovinos &#128046;</a></li> 
					<li><a href="listarCavalo.php" target="quadro" onclick="mostra()">Equinos &#128052;</a></li>
					<li><a href="listarOvelha.php" target="quadro" onclick="mostra()">Ovinos &#128017;</a></li>
				</ol>
			</li>
			<li>Buscar Animal
				<ol>
				<li><a href="buscar.php" target="quadro">Dados</a></li>
				</ol>
			</li>
			<li>Veterinário
				<ol>
					<li><a href="cadastrarVeterinario.php" target="quadro">Cadastrar &#9877;</a></li>
					<li><a href="listarVet.php" target="quadro">Listar &#9877;</a></li>
				</ol>
				
			</li>
			<li>Saúde Animal
				<ol>
					<li><a href="aplicacaoVacina.php" target="quadro">Vacinas</a></li>
					<li><a href="aplicacaoVermifugo.php" target="quadro">Vermifugação</a></li>
				</ol>
			</li>
			<li>Informações
				<ol>
				<li><a href="informacao.php" target="quadro">Curiosidades</a></li>
				</ol>
			</li>
			<li>Sair
				<ol>
					<li><a href="sair.php" target="quadro">Deslogar</a></li>
				</ol>
			</li>
		</ul>
	</div>
		</li>
	</ul>
	</div>
	</div>
	<div id="principal">

	<iframe src="home.php" name="quadro" onload="esconde()"></iframe>

	<div id="load">
  <div>G</div>
  <div>N</div>
  <div>I</div>
  <div>D</div>
  <div>A</div>
  <div>O</div>
  <div>L</div>
</div>

</div>

<div id="rodape">
	<div id="sobre">
		<h4>Projeto Integrador do curso Programador de Sistemas turma 202300015 - SENAC&reg;</h4>
	</div>
</div>

<?php 
} 
?>
<script src="js/mensagem.js"></script>

</body>
</html>