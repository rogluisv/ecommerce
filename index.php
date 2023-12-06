<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ecommerce.com</title>
</head>
<body>
	<h1>Acesse sua conta</h1>
	<form action="" method="post">
		Email: <input type="text" name="email" value=""> <br>
		Senha: <input type="text" name="senha" value=""> <br>
		<button type="submit" name="logar">Entrar</button>
		<button type="submit" name="cadastrar" >Cadastrar</button>
	</form>
</body>
</html>

<?php 
	$path = $_SERVER['DOCUMENT_ROOT'].'/ecommerce/';
	include_once($path.'/Models/Usuario.php');
	
	if(isset($_POST['logar'])){
		$objUsuario = new Usuario();
		$objUsuario->setemail_user($_POST['email_user']);
		$objUsuario->setsenha_user($_POST['senha_user']);
		//$objUsuario->password_hash($_POST['senha_user'], PASSWORD_DEFAULT);

		$mysqli->query("INSERT INTO Usuarios (EMAIL_USER, SENHA_USER) VALUES ('$email_user', '$senha_user')");

		$controllerUsuario = new UsuarioController();

		$resposta = $controllerUsuario->validaUsuario($objUsuario);

		if($resposta == "Sucesso"){
			header("Location: http://localhost/ecommerce/Views/inicio.php");
		} else {
			echo $resposta;
		}
	}
?>