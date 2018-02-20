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
        margin-top: -20px;
        margin-left: -200px;

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
      <li><a href="home.html"  style="color: #fff">Home</a></li>
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



<script type="text/javascript">
      $('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
      $('#myTabs a[href="#profile"]').tab('show') // Select tab by name
$('#myTabs a:first').tab('show') // Select first tab
$('#myTabs a:last').tab('show') // Select last tab
$('#myTabs li:eq(2) a').tab('show')

</script>


  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Pluviometria</a></li>
    <!--<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Muro de Arrimo</a></li>
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
    <div role="tabpanel" class="tab-pane" id="settings"><h2>Cálculo de Pavimentação</h2><br>
    <ul>
    <li>
    <a href = calculoN.php role="tabpanel" class="tab-pane" id="settings">Calculo do N</a>
    <li>
    <a href = SegHomogeneo.php role="tabpanel" class="tab-pane" id="settings">Segmento Homogeneo</a>
    <li>
    <a href = formPro11.html role="tabpanel" class="tab-pane" id="settings">Dimensionamento PRO11-79</a>
    <li>
    <a href = PRO269.php role="tabpanel" class="tab-pane" id="settings">Dimensionamento PRO269-94</a>
    <li>
    <a href = ComparacaoPRO.php role="tabpanel" class="tab-pane" id="settings">Comparação de Dimensionamento</a></li>
    </ul>
    </li>
    </li>
    </li>
    </li>


    </li>
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
        margin-top: -20px;
        margin-left: -200px;

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



<script type="text/javascript">
      $('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
      $('#myTabs a[href="#profile"]').tab('show') // Select tab by name
$('#myTabs a:first').tab('show') // Select first tab
$('#myTabs a:last').tab('show') // Select last tab
$('#myTabs li:eq(2) a').tab('show')

</script>


  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Pluviometria</a></li>
    <!--<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Muro de Arrimo</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Concretagem</a></li>-->
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Pavimentação</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home" ><h2>Cálculo de Pluviometria</h2><br>
<form method="get" action="calculoform.php">

    <input type="float" name="area" placeholder="Área(a)"><br>
    <input type="float" name="altura" placeholder="Altura(h)"><br>

    <input type="submit" name="enviar">
</form>
    </div>

    <div role="tabpanel" class="tab-pane" id="settings"><h2>Cálculo de Pavimentação</h2><br>
    <ul>
    <li>
    <a href = calculoN.php role="tabpanel" class="tab-pane" id="settings">Calculo do N</a>
    <li>
    <a href = SegHomogeneo.php role="tabpanel" class="tab-pane" id="settings">Segmento Homogeneo</a>
    <li>
    <a href = formPro11.php role="tabpanel" class="tab-pane" id="settings">Dimensionamento PRO11-79</a>
    <li>
    <a href = PRO269.php role="tabpanel" class="tab-pane" id="settings">Dimensionamento PRO269-94</a>
    <li>
    <a href = ComparacaoPRO.php role="tabpanel" class="tab-pane" id="settings">Comparação de Dimensionamento</a></li>
    </ul>
    </li>
    </li>
    </li>
    </li>
</div>
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

?>
