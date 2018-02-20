<?php

	$porta    = "5432";
	$banco    = "NOME_DO_BANCO";
	$usuario  = "USUARIO_DO_BANCO";
	$senha    = "SENHA";
	$conexao = pg_connect("port=$porta dbname=$banco user=$usuario password=$senha") or die("Nao Conectado");

	pg_close ($conexao);

	print "Conexão OK!";


?>