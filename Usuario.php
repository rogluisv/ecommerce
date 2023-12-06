<?php

	$path = $_SERVER['DOCUMENT_ROOT'].'/ecommerce';
	include_once($path."/conexao.php");

	class Usuario {

		// TODO: Criar método construtor
		// TODO: Validar se já existe usuário com determinado e-mail

		// O ID não precisa de SETTERS porque o método que salva no banco já seta o mesmo
		private $ID_User;
		public function getID_User() { return $this->ID_user; }

		private $NOME_USER;
		public function getNOME_USER() { return $this->NOME_USER; }
		public function setNOME_USER($nome_user) { $this->NOME_USER = $nome_user; return $this; }

		private $EMAIL_USER;
		public function getEMAIL_USER() { return $this->EMAIL_USER; }
		public function setEMAIL_USER($email_user) { $this->EMAIL_USER = $email_user; return $this; }

		private $SENHA_USER;
		public function getSENHA_USER() { return $this->SENHA_USER; }
		public function setSENHA_USER($senha_user) { $this->SENHA_USER = $senha_user; return $this; }

		private $ENDERECO_USER;
		public function getENDERECO_USER() { return $this->ENDERECO_USER; }
		public function setENDERECO_USER($endereco_user) { $this->ENDERECO_USER = $endereco_user; return $this; }

		public function __construct($NOME_USER, $EMAIL_USER, $SENHA_USER, $ENDERECO_USER){

		}


		// TODO: Verificar se pode cadastrar/salvar garantindo que o e-mail seja único

		public function Cadastrar(){
			$objConexao = new Conexao();
			$conexao = $objConexao->getConexao();

			$query = "INSERT INTO Usuarios (NOME_USER, EMAIL_USER, SENHA_USER) VALUES ('$this->NOME_USER', '$this->EMAIL_USER', '$this->SENHA_USER')";
			$result = mysqli_query($conexao, $query);
			if (!$result) {
				mysqli_close();
				return false;
			}

			$query = "SELECT ID_User FROM Usuarios WHERE EMAIL_USER = '$this->EMAIL_USER' ORDER BY ID_User DESC LIMIT 1";
			$result = mysqli_query($conexao, $query);
			$user = $result->fetch_assoc();

			$this->ID_User = $user["ID_User"];

			mysqli_close($conexao);

			return $this;
		}

	}

?>