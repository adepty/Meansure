<?php
	require_once 'usuario.class.php';

	$nome=$_POST['nome'];
	$sobrenome=$_POST['sobrenome'];
	$email=$_POST['email'];
	$senha=$_POST['senha'];
	
	$usuario = new usuario();
	$usuario->setNome($nome);
	$usuario->setSobrenome($sobrenome);
	$usuario->setEmail($email);
	$usuario->setSenha($senha);
	$usuario->inserir();
	header("refresh:3;cadastrouser.html");

	print "<p>Cadastro realizado com sucesso!</p>";
	print "<p><a href='cadastrouser.php'>Voltar</a></p>";
?>
