<?php
	$path = $_SERVER['DOCUMENT ROOT'].'/ecommerce/';
	include_once($path.'/Models/Usuario.php');

	class UsuarioController{

		public function login($objUsuario){
			echo $objUsuario->getemail_user();

			if($objUsuario->getemail_user() == null || strlen($objUsuario->getemail_user()) > 100){
				return "E-mail inválido!"
			}

			if($objUsuario->getsenha_user() == null || strlen($objUsuario->getsenha_user()) > 100){
				return "Senha inválida!"
			}
		}
	}

	function validaEmail($email){
		if ($email == null){
			echo "O E-mail é obrigatório.";
			return false;
		} elseif (strlen($email) > 100) {
			return false;
		}
		return true;
	}
?>