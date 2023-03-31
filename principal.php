<?php
require_once 'cabecalho.php';
require_once 'model/Usuario.php';

$estalog=estaLogado();
	if(!$estalog){ 
	echo "<h5>Você não está logado, favor logar!</h5>";
	echo "<h5><a href='//localhost/profGabriel/ProjetoIntegrador/'>Voltar</a></h5>";
}else{ 
?>

<div id="topo">
	<div id="logo">
		<img src="img/logo1.jpg">
	</div>
	<div id="menu">
		<ul class="nav">
			<li>Cadastrar Animal
				<ol class="menu">
					<li><a href="cadastrarVaca.php" target="quadro" onclick="mostra()">Bovino &#128046;</a></li>
					<li><a href="cadastrarCavalo.php" target="quadro" onclick="mostra()">Equino &#128052;</a></li>
					<li><a href="cadastrarOvelha.php" target="quadro" onclick="mostra()">Ovino &#128017;</a></li>
			</ol>
			</li>
			<li>Listar Animais
				<ol class="menu2">
					<li><a href="listarVaca.php" target="quadro" onclick="mostra()">Bovinos &#128046;</a></li> 
					<li><a href="listarCavalo.php" target="quadro" onclick="mostra()">Equinos &#128052;</a></li>
					<li><a href="listarOvelha.php" target="quadro" onclick="mostra()">Ovinos &#128017;</a></li>
				</ol>
			</li>
			<li>Buscar
				<ol class="menu2">
				<li><a href=".php" target="quadro">Bovinos &#128046;</a></li>
				<li><a href=".php" target="quadro">Equinos &#128052;</a></li>
				<li><a href=".php" target="quadro">Ovinos &#128017;</a></li>
				<li><a href=".php" target="quadro">Veterinário</a></li>
				<li><a href=".php" target="quadro">Vacina</a></li>
				<li><a href=".php" target="quadro">Vermífugo</a></li>
				</ol>
			</li>
			<li class="altura">Veterinário
				<ol class="menu2">
					<li><a href="cadastrarVeterinario.php" target="quadro">Cadastrar &#129658;</a></li>
					<li><a href="listarVeterinario.php" target="quadro">Listar &#129658;</a></li>
				</ol>
				
			</li>
			<li>Saúde Animal
				<ol class="menu2">
					<li><a href="aplicacaoVacina.php" target="quadro">Vacinas</a></li>
					<li><a href="aplicacaoVermifugo.php" target="quadro">Vermifugação</a></li>
					<li><a href="cadastrarConsultas.php" target="quadro">Consultas</a></li>

				</ol>
			</li>
			<li>Informações
				<ol class="menu2">
				<li><a href="informacao.php" target="quadro">Vacina</a></li>
				<li><a href="informacaoVerm.php" target="quadro">Outros cuidados</a></li>
				</ol>
			</li>
			<li>Sair
				<ol class="menu2">
					<li><a href="sair.php" target="quadro">Deslogar &#128244;</a></li>
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