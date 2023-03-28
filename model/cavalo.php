<?php

require_once './persistence/banco.php';

function cadastrarCavalo($Identificacao_cav,$Nome_cav,$Raca_cav,$Datanasc_cav,$Sexo_cav,$Peso,$Racapai_cav,$Altura_cav,$Racamae_cav){
	$banco=new banco();
	$sql="insert into cavalo values($Identificacao_cav,'$Nome_cav','$Raca_cav','$Datanasc_cav','$Sexo_cav',$Peso,'$Racapai_cav',$Altura_cav,'$Racamae_cav')";
	echo "$sql";
	$resposta=$banco->executar($sql);
	if($resposta){
		return true;
}else{
	return false;
	}
				}


function listarCavalo(){
	$banco=new banco();
	$sql="select * from cavalo order by Identificacao_cav";
	$consulta=$banco->consultar($sql);
	if(!$consulta){
		return false;
	}else{
		return $consulta;
	}
}

function retornaUltimoCodigo(){
	$banco=new banco();
	$sql="select max(Identificacao_cav) from cavalo";
	$consulta=$banco->consultar($sql);
	if(!$consulta){
		return false;
	}else{
		while($linha=$consulta->fetch_assoc()){
			$ultimo=$linha['max(Identificacao_cav)'];
		}
	return $ultimo;

		}
}

function verificarVacina($idvasc){
		$banco=new Banco();
		$sql="select Nome_cav from cavalo where IDvac_cav in(select IDvac_cav from vacina_cav where Dataapli_cav=$idvasc)";
		$consulta=$banco->consultar($sql);
		if(!$consulta){
			return false;
		}else{
			return $consulta;
		}
	}	

?>
</body>
</html>