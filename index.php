<?php
	 require_once("config.php");
	 $usuario=new Usuario();
	 $usuario->loadById(3);
	 echo $usuario;
	/*  $sql=new Sql();
	$usuarios=$sql->select("select * from tb_usuarios");
	 echo json_encode($usuarios);*/
?>