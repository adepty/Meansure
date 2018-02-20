<?php

    require_once 'usuario.class.php';

    $email = $_POST['email'];
    $entrar = $_POST['entrar'];
    $senha = $_POST['senha'];
    //$connect = mysql_connect("localhost","root","");
   // $db = mysql_select_db("measure");
        $usuario = new usuario();
        if (isset($entrar)) {
            
            $usuario->setEmail($email);
            $usuario->setSenha($senha);
            $r = $usuario->Login();
            if(count($r) > 0){
                session_start();
                $_SESSION['iduser'] = $r[0]['iduser'];

            header("location:index.php");

        }else{

            echo"Bem-Vindo, convidado <br>";
            echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você, faça o cadastro para ter acesso";
            echo"<br><a href='index.html'>Faça Login</a> Para ler o conteúdo";

            header("refresh:3; cadastrouser.html");
        }

        }
?>
