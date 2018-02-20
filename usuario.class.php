<?php
	require_once 'conexao.class.php';
	class Usuario{
		
		private $iduser;
		private $nome;
		private $sobrenome;
		private $email;
		private $senha;
		private $profissao;
		private $formacao;
		
		public function getIduser(){
			return $this->iduser;
		}
		public function setIduser($iduser){
			if(!empty($iduser)) $this->iduser=$iduser;
		}
		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){
			if(!empty($nome)) $this->nome=$nome;
		}
		public function getSobrenome(){
			return $this->sobrenome;
		}
		public function setSobrenome($sobrenome){
			if(!empty($sobrenome)) $this->sobrenome=$sobrenome;
		}
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			if(!empty($email)) $this->email=$email;
		}
		public function getSenha(){
			return $this->senha;
		}
		public function setSenha($senha){
			if(!empty($senha)) $this->senha=$senha;
		}
				public function getFormacao(){
			return $this->formacao;
		}
		public function setFormacao($formacao){
			if(!empty($formacao)) $this->formacao=$formacao;
		}
				public function getProfissao(){
			return $this->profissao;
		}
		public function setProfissao($profissao){
			if(!empty($profissao)) $this->profissao=$profissao;
		}

		public function inserir(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
				"INSERT INTO usuario(nome,sobrenome,email,senha,profissao,formacao)
				VALUES(:nome,:sobrenome,:email,:senha,:profissao,:formacao)");
				$stmt->bindValue(":nome",$this->getNome());
				$stmt->bindValue(":sobrenome",$this->getSobrenome());
				$stmt->bindValue(":email",$this->getEmail());
				$stmt->bindValue(":senha",$this->getSenha());
				$stmt->bindValue(":formacao",$this->getFormacao());
				$stmt->bindValue(":profissao",$this->getProfissao());
				return $stmt->execute();
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}

	public function Login(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare("SELECT * from usuario where email=:email and senha=:senha");
				$stmt->bindValue(':email',$this->getEmail());
				$stmt->bindValue(':senha',$this->getSenha());
				$stmt->execute();
				$r=$stmt->fetchAll();
				return $r;
			}catch(PDOException $e){
				echo $e->getMessage();
				}
			}

			public function buscarTodos(){
			$conect = new conexao();
			try {
				$stmt = $conect->conn->prepare("select * from usuario");
				$stmt->execute();
				$r=$stmt->fetchAll();
				$resposta = array();
				foreach ($r as $row) {
					$temp=array("iduser" =>$row['iduser'], 
						"nome"=>$row['nome'],
						"sobrenome"=>$row['sobrenome'],
						"email"=>$row['email'],
						"senha"=>$row['senha']);
					array_push($resposta, $temp);
				}
				return $resposta;
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}

		public function buscarId(){
			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
				"select * from usuario where iduser=:iduser");
				$stmt->bindValue(':iduser',$this->getIduser());
				$stmt->execute();
				$r=$stmt->fetch();
				
				return $r;

			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}
		
		
}

?>