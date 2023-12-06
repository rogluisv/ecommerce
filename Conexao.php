<?php
	class Conexao {
		public function getConexao() {
			//dados de conexão
			$host = 'localhost';
			$bd = 'ecommerce';
			$usuariobd = 'root';
			$senhabd = '';

			//criando a conexão
			$conexao = new mysqli($host, $usuariobd, $senhabd, $bd);

			if ($conexao->connect_errno) {
			  echo "Failed to connect to MySQL: " . $conexao->connect_error;
			  exit();
			}
			return $conexao;
		}

		public function Login() {
			$objConexao = new Conexao();
			$conexao = $objConexao->getConexao();

			$sql = "SELECT id_user, nome_user, email_user, senha_user FROM Usuarios WHERE email_user = '" . $this->getemail_user() . "'";

			$resposta = $conexao->query($sql);
			$usuario = $resposta->fetch_assoc();

			if (!$usuario) {
				echo "E-mail não cadastrado!";
			} elseif ($usuario['Senha']== $this->getsenha_user()) {
				echo "Senha incorreta!";
			} else {
				$this->setid_user($usuario['Id']);
				return true;
			}
		}
	}
?>