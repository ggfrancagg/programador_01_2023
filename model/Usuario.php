<?php
	require_once './persistence/Banco.php';

	function login($usuario,$senha){
		$banco= new Banco();
		$sql="select usuario,senha from usuarios";
		$consulta=$banco->consultar($sql);
		if(!$consulta){
			return false;
		}else{
			while ($linha=$consulta->fetch_assoc()) {
				if($linha['usuario']==$usuario){
					if($linha['senha']==$senha){
						return true;
					}else{
						return false;
					}
				}else{
						return false;
					}
			}
		}
	}
	function criarSessao($teste,$usuario){
		if ($teste) {
			setcookie('usuario',$usuario);//setcookie('usuario',$usuario,time()+172800);
		}else{
			return false;
		}
	}

	function estaLogado(){
		if (isset($_COOKIE['usuario'])) {
			return true;
		}else{
			return false;
		}
	}

?>