<?php
    session_start();

    if (!isset($_SESSION['iduser']))    {

            header("location:index.html");
        }


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/menuUsuario.js"></script>
</head>

 <style type="text/css">
     body{
         background: #ffdead;
     }
     .nav a:hover {
        color: black;
        text-decoration: underline;
     }
     #img{

        width: 200px;
        margin-top: -20px;
        margin-left: -200px;

     }
     #user{
        margin-left: 10%;
        margin-top: 5%;
     }
 </style>

<body>

<nav class="navbar navbar-inverse"  style="background: #e67e22; border: 0">
  <div class="container-fluid" style="background: #e67e22; margin-left: 400px">
    <div class="navbar-header" style="background: #e67e22">
      <a  class="navbar-brand" href="index.php" >
      <img src="logoborda.png" id="img"> </a>
    </div>
    <ul  id="lista-menu" class="nav navbar-nav" style="background:#e67e22">
      <li><a href="index.php" style="color: #fff">Home</a></li>
      <li><a href="calculoform.php"  style="color: #fff">Cálculo</a></li>
      <li><a href="pluviometria.html"  style="color: #fff">Pluviometria</a></li> 
     <li><a href="relatorio.php"  style="color: #fff">Relatório</a></li>
      <li><a href="mapeamento.html"  style="color: #fff">Mapeamento</a></li> 
    </ul>
</nav> 

<div id="wrapper">
        <div class="overlay"></div>
        <nav class="navbar navbar-inverse navbar-fixed-top" style="top: 10%;" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       Usuário
                    </a>
                </li>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Perfil</a>
                </li>
                <li>
                    <a href="#">Setup</a>
                </li>
                <li>
                    <a href="#">Ajuda</a>
                </li>
                <li class="dropdown">
                  <a href="#">Siga-nos</a>
                </li>
                <li>
                    <a href="#">Sair</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row" id="user">
                    <div class="col-lg-8 col-lg-offset-2">
            <img src="imagens/user.png" class="img-user"/>
            <input class="btn" type="button" value="Trocar Foto  ">
            <input class="btn" type="submit" value="Editar Perfil">

 <?php
    require_once 'usuario.class.php';

    $usuario = new usuario();
    $usuario -> setIduser($_SESSION['iduser']);
    $r = $usuario->buscarId();
?>

<div class="nome">      
    <?php 
        echo $r['nome'];

    ?>
</div>
<div class="sobrenome">
    <?php
        echo $r['sobrenome'];
        echo "<br>";
        echo $r['email'];
        echo $r['profissao'];
        echo $r['formacao'];
    
?>
</div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->



</body>

</html>