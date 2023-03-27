<?php
require_once 'cabecalho.php';
//require_once 'model/Usuario.php';

//$estalog=estaLogado();
//	if(!$estalog){ 
//	echo "<h2>Você não está logado, favor logar!</h2>";
//	echo "<a href='//localhost/profGabriel/ProjetoIntegrador/'>Voltar</a>";//COLOCAR O ENDEREÇO CORRETO
//}else{ 
?>

<div id="topo">
	<div id="logo">
		<img src="img/logo.png">
	</div>
	<div id="menu">
		<ul class="nav">
			<li>Cadastrar Animal
				<ol>
					<li><a href="cadastrarVaca.php" target="quadro">Bovino &#128046;</a></li>
					<li><a href="cadastrarCavalo.php" target="quadro">Equino &#128052;</a></li>
					<li><a href="cadastrarOvelha.php" target="quadro">Ovino &#128017;</a></li>
			</ol>
			</li>
			<li>Listar Animais
				<ol>
					<li><a href="listarVaca.php" target="quadro" onclick="aguarde()">Bovinos &#128046;</a></li> 
					<li><a href="listarCavalo.php" target="quadro" onclick="aguarde()">Equinos &#128052;</a></li>
					<li><a href="listarOvelha.php" target="quadro" onclick="aguarde()">Ovinos &#128017;</a></li>
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
					<li><a href="listarVeterinario.php" target="quadro">Listar &#9877;</a></li>
				</ol>
				
			</li>
			<li>Saúde Animal
				<ol>
					<li><a href="aplicacaoVacina.php" target="quadro">Vacinas</a></li>
					<li><a href="aplicacaoVermifugo.php" target="quadro">Vermifugação</a></li>
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
<span id="mensagem"></span>
</div>

<div id="rodape">
	<div id="endereco">
		<p>Rua X de Y, 1228</p>
		<p>CEP 84053-444</p>
		<p>Tel: (42) 3232-3434</p>
		<p>Ponta Grossa - PR</p>
</br>
	</div>
	<div id="sobre">
		<p>Projeto Integrador do curso Programador de Sistemas turma 202300015 - SENAC&reg;</p>
	</div>
</div>

<?php 
//} 
?>
<script src="js/mensagem.js"></script>

</body>
</html>