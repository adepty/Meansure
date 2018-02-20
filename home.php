<?php
	 require_once 'usuario.class.php';
	 require_once 'login.php';

	$autenticacao = $r;
    $login_cookie = $_POST['email'];

        if(login.$r > 0){
            echo"Bem-Vindo, $login_cookie <br>";
            echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
        }else{
            echo"Bem-Vindo, convidado <br>";
            echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
            echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
        }
  ?>


Read more: http://www.linhadecodigo.com.br/artigo/3561/criando-um-sistema-de-cadastro-e-login-com-php-e-mysql.aspx#ixzz4N6lbuJLE