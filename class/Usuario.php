<?php
	
	class Usuario{
		private $idUsuario,$desLogin,$desSenha,$dtCadastro;
	
		public function setIdUsuario($idUsuario) {
			$this->idUsuario = $idUsuario;
		}
		public function getIdUsuario() {
			return $this->idUsuario;
		}
		public function setDesLogin($desLogin) {
			$this->desLogin = $desLogin; 
		}
		public function getDesLogin() { 
			return $this->desLogin; 
		}
		public function setDesSenha($desSenha) { 
			$this->desSenha = $desSenha; 
		}
		public function getDesSenha() { 
			return $this->desSenha; 
		}
		public function setDtCadastro($dtCadastro) { 
			$this->dtCadastro = $dtCadastro; 
		}
		public function getDtCadastro() { 
			return $this->dtCadastro; 
		}

		public function loadById($id){
			$sql=new Sql();
			$result=$sql->select("select *from tb_usuarios where idusuario= :ID",array(":ID"=>$id));
			if(count($result)>0){
				$row=$result[0];
				//var_dump($row);
				

				$this->setIdUsuario($row["idusuario"]);
				$this->setDesLogin($row['deslogin']);
				$this->setDesSenha($row['dessenha']);
				$this->setDtCadastro(new DateTime($row['dtcadastro']));
			}
		}

		public static function getList(){
			$sql=new Sql();
			return $sql->select("select * from tb_usuarios order by deslogin");
		}

		public static function search($chave){
			$sql=new Sql();
			$buscado="%".$chave."%";
			return $sql->select("select * from tb_usuarios where deslogin like :search order by deslogin",array(":search"=>$buscado));
		}

		public function __toString(){
			return json_encode(array(
				"idUsuario"=> $this->getidUsuario(),
				"desLogin"=> $this->getDesLogin(),
				"desSenha"=> $this->getDesSenha(),
				"dtCadastro"=> $this->getdtCadastro()->format("d/m/Y H:i:s")
			));
		}


		public function login($usuario,$senha){
			$sql=new Sql();
			
			$result= $sql->select("select * from tb_usuarios where deslogin = :user and dessenha = :pass",array(":user"=>$usuario,":pass"=>$senha));
			if(count($result)>0){
				$row=$result[0];
				//var_dump($row);
				

				$this->setIdUsuario($row["idusuario"]);
				$this->setDesLogin($row['deslogin']);
				$this->setDesSenha($row['dessenha']);
				$this->setDtCadastro(new DateTime($row['dtcadastro']));
			}else{
				throw new Exception("erro de login e/ou senha", 1);
				  
			}	

				
		}

			
	}




	

?>