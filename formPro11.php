<!DOCTYPE html>
<html>
<head>
	<title></title>

<script type="text/javascript">
	var contador = 3;

	function duplicarCampos(){
		var clone = document.getElementById('origem').cloneNode(true);
		clone.getElementsByTagName("input")[2].name = "cont" + contador;
		contador++;

		var destino = document.getElementById('destino');
		destino.appendChild (clone);
		
		var camposClonados = clone.getElementsByTagName('input');
			for(i=0; i<camposClonados.length;i++){
				camposClonados[i].value = '';
				}
	}

	function removerCampos(id){
		var node1 = document.getElementById('destino');
		node1.removeChild(node1.childNodes[0]);
}
</script>

</head>

<?php

if(isset($_GET['enviar'])){ //resultado do formulario


 // $chuva = $_GET["chuva"];
  //$volume = $_GET["volume"];
  $area = $_GET['area'];
  $altura = $_GET['altura'];
//  $metros = $_GET['altura'];
  $resultado = $area*$altura;


?>

<!DOCTYPE html >
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
  <title>Cálculo</title>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="js/menuUsuario.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/npm.js"></script>

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
        margin-top: -60px;
        margin-left: -200px;

     }

     h2{
      background: #e67e22;
      color: #fff;
      font-weight: bold;
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
      <li><a href="index.html"  style="color: #fff">Home</a></li>
      <li><a href="calculo.html"  style="color: #fff">Cálculo</a></li>
      <li><a href="pluviometria.html"  style="color: #fff">Pluviometria</a></li> 
      <li><a href="relatorio.php"  style="color: #fff">Relatório</a></li>
      <li><a href="mapeamento.html"  style="color: #fff">Mapeamento</a></li> 
    </ul>
  </div>
</nav> 

    <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" style="top: 10%"; id="sidebar-wrapper" role="navigation">
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
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-lg-offset-2">


  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Pluviometria</a></li>
  <!--  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Muro de Arrimo</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Concretagem</a></li>-->
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Pavimentação</a></li>
  </ul>

<style type="text/css">
    .resultado {
       font-size: 20px;

      }

</style>
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home" ><h2>Cálculo de Pluviometria</h2><br>

<?php 

$resultadofinal = $resultado*1000;
echo "<div class ='resultado'>A quantidade de chuva é de ". $resultadofinal ." litros na região.</div>";

?>
  </div>




    <div role="tabpanel" class="tab-pane" id="messages"><h2>Cálculo de Concretagem</h2><br>
    <input type="number" name="nX" id="iX" placeholder="Valor de X"><br>
    <input type="number" name="nY" id="iY" placeholder="Valor de Y"><br>
    <input type="number" name="nZ" id="iZ" placeholder="Valor de Z">
    <input type="submit" name="nCalM" id="iCalM">
    </div>
    <div role="tabpanel" class="tab-pane" id="settings"><h2>Cálculo de Pavimentoção</h2><br>
?>
    </div>
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
<?php

}
else{
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
  <title>Cálculo</title>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="js/menuUsuario.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/npm.js"></script>

</head>

 <style type="text/css">
     body{
         background: #ffdead;
     }
     .nav a:hover {
        color: black;
        text-decoration: underline;
     }
     #add{
      width:25px;
      height:25px;
     }
      #cross{
      width:30px;
      height:30px;
     }
      #title{
          margin-top: 50px;
      background: #e67e22;
      color: #fff;
      height: 50px;
      width: 600px;
      border-radius: 10px;
}
      h2{
        margin-right: 30px;
        margin-bottom: 30px;
        margin-left: 50px;
        margin-top: -60px;
        text-align: center;

            font-weight: bold;
     }
     #img{

        width: 200px;
        margin-top: -60px;
        margin-left: -200px;

}
  #pav{
    width: 50px;
    margin-left: 50px;
    margin-top: -1.5px;
    margin-bottom: 20px;
    margin-right: 20px;
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
      <li><a href="index.php"  style="color: #fff">Home</a></li>
      <li><a href="calculoform.php"  style="color: #fff">Cálculo</a></li>
      <li><a href="pluviometria.html"  style="color: #fff">Pluviometria</a></li> 
      <li><a href="relatorio.php"  style="color: #fff">Relatório</a></li>
      <li><a href="mapeamento.html"  style="color: #fff">Mapeamento</a></li> 
    </ul>
  </div>
</nav> 

    <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" style="top: 10%"; id="sidebar-wrapper" role="navigation">
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
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-lg-offset-2">

  <!-- Tab panes -->
    <div role="tabpanel" class="tab-pane"><div id="title" ><img id="pav" src="img/pav.png"></a><h2>Cálculo de Pavimentação</h2></div><br>
<h4>Seguimento: SH-1</h4>
<div id="origem">	
	<form method="post" action="pro11.php">
		  <input type="float" name="v" placeholder="Km inicial">
		  <input type="float" name="v1" placeholder="Km final">
		  <input type="float" name="cont2" placeholder="Dfwd(10-²mm)">
		  <!--<input type="number" name="i1" placeholder="I1">
  		<input type="number" name="i2" placeholder="I2">-->
		<img src="img/add.ico" id="add" style="cursor: pointer;" onclick="duplicarCampos();">
		<img src="img/cross.png" id="cross" style="cursor: pointer;" onclick="removerCampos(this);">

</div>
<div id="destino"></div>
		<input type="submit" name="calcular" >
	</form>
		<a href="calculo.html">Voltar</a>
</div>
</body>
</html>
<?php
}
?>