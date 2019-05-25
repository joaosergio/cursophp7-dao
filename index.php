<?php
	 require_once("config.php");


/*
	 //carrega um usuário
	 $usuario=new Usuario();
	 $usuario->loadById(3);
	 echo $usuario;
*/
/*
//carrega uma lista de usuários	 
$lista=Usuario::getlist();
echo(json_encode($lista));
*/
//$search=Usuario::search("jo");
//echo(json_encode($search));

//carrega usuário usando login e senha
	$usuario=new Usuario();
	$usuario->login("bambino","yorkfofinho");
	echo $usuario;
?>