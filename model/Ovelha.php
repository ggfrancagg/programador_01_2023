<?php
require_once './persistence/Banco.php';

function cadastrarOvelha($id_ovl,$nome_ovl,$idade_ovl,$raca_ovl,$sexo_ovl,$cor_ovl,$peso_ovl,$altura_ovl){
	$banco=new Banco();
	$sql="insert into ovelhas values($id_ovl,'$nome_ovl',$idade_ovl,'$raca_ovl','$sexo_ovl','$cor_ovl',$peso_ovl,$altura_ovl)";
	echo "$sql";
	$resposta=$banco->executar($sql);
	if(!$resposta){
		return false;
	}else{
		return true;
	}
}

function retornaUltimaOvelha(){
	$banco=new Banco();
	$sql="select max(id_ovl) from ovelhas";
	$consulta=$banco->consultar($sql);
	if(!$consulta){
		return false;
	}else{
		while($linha=$consulta->fetch_assoc()){
			$codigo=$linha['max(id_ovl)'];
		}
		if($codigo==null){
			$codigo=0;
		}
	} return $codigo;

}

function listarOvelha(){
	$banco=new Banco();
	$sql="select * from ovelhas order by id_ovl";
	$consulta=$banco->consultar($sql);
	if(!$consulta){
		return false;
	}else{
		return $consulta;
	}
}

function verificarVacinaOvelha($idvasc){
		$banco=new Banco();
		$sql="select ovelhas.Nome_ovl from ovelhas inner join vacina_ovl where ovelhas.id_ovl=vacina_ovl.id_ovl and vacina_ovl.Dataapli_ovl='$idvasc'";
		$consulta=$banco->consultar($sql);
		if(!$consulta){
			return false;
		}else{
			return $consulta;
		}
	}	

	function buscarOvino($busca){
		$banco=new Banco();
		$sql="select * from ovelhas where id_ovl='$busca' or nome_ovl like '%$busca%' or idade_ovl='$busca' or raca_ovl='$busca' or
		sexo_ovl like '%$busca%' or cor_ovl like '%$busca%' or peso_ovl like '%$busca%' or altura_ovl like '%$busca%'";
		$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			return $consulta;
		}
	}

function acharOvino($codigo){
		$banco=new Banco();
		$sql= "select * from ovelhas where id_ovl=$codigo";
		$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			return $consulta;
		}
	}
	
	function alterarOvino($id_ovl,$nome_ovl,$peso_ovl,$altura_ovl){
		$banco=new Banco();
		$sql="update ovelhas set nome_ovl='$nome_ovl', peso_ovl='$peso_ovl', altura_ovl='$altura_ovl' where id_ovl=$id_ovl";
		$resposta=$banco->executar($sql);
		if (!$resposta) {
			return false;
		}else{
			return true;
		}
	}

	function removerOvino($id){
 	$banco=new Banco();
 	$sql="delete from ovelhas where id_ovl=$id";
 	$resposta=$banco->executar($sql);
		if (!$resposta) {
			return false;
		}else{
			return true;
		}
	}

?>
