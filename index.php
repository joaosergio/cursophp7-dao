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

/*
//carrega usuário usando login e senha
	$usuario=new Usuario();
	$usuario->login("bambino","yorkfofinho");
	echo $usuario;*/

//insere usuario


/*
$aluno=new Usuario("kyle busch","nascar18");

$aluno->insert();
echo $aluno;
*/

/*
//alterar um usuário
$aluno=new Usuario();
$aluno->loadById(14);
$aluno->update("Fernando Prass","camisa1sep!");
echo $aluno;
*/

//alterar um usuário
$aluno=new Usuario();
$aluno->loadById(17);
$aluno->delete();


?>