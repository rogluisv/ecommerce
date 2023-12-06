<?php
	$path = $_SERVER['DOCUMENT_ROOT'].'/ecommerce';
	include_once($path."/Models/Usuario.php");

	/*$novoUsuario = new Usuario();
	$novoUsuario->setNOME_USER("Caio");
	$novoUsuario->setSENHA_USER("qwe123");
	$novoUsuario->setEMAIL_USER("caio@tiruliru.com");
	$novoUsuario->Cadastrar();*/

	// Encadeamento de chamada de métodos
	/*
	$novoUsuario = new Usuario();
	$novoUsuario
		->setNOME_USER("Caio")
		->setSENHA_USER("qwe123")
		->setEMAIL_USER("caio@tiruliru.com")
		// TODO: Salvar Endereço (no VS CODE)
		->Cadastrar();

	var_dump($novoUsuario);
	*/


