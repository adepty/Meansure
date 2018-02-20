<?php

  if(isset($_GET['Calcular'])){ //resultado do formulario

    require_once 'calculo.class.php';

  $homogeneo = new calculo();
  $clone = intval($_GET['contador']);
  //<script>document.write(localStorage.getItem('contador'))</script>;
  echo "clone é igual a:".$clone;
  var_dump($clone);
  $homogeneo->setQtda($clone);
  $i = 0;

 // while($i <= $clone){
//for($i=0;$i<$clone;$i++){
  $dfwd = $_GET['dfwd'];
  $segmento = $_GET['segmento'];
  $km = $_GET['km'];
  echo $dfwd." - ".$segmento." - ".$km."</br>";

  $homogeneo->setDfwd($dfwd);
  $homogeneo->setSegmento($segmento);
  $homogeneo->setKM($km);
  $segmentof=$homogeneo->getSegmento();
  $KMf=$homogeneo->getKM();
  $dfwdf=$homogeneo->getDfwd();
  $calculo = $homogeneo->HomogeneoDVB($dfwd);
  $DVBtotal = $homogeneo->DVBtotal($calculo);
  echo "DVB:".$DVBtotal."QTDA:".$clone;
  $Dvbmedia = $homogeneo->DMedia_VB($clone,$DVBtotal);

for($i = 0; $i <= $clone ; $i++){

  $dfwd = $_GET['dfwd']+$i;
  $segmento = $_GET['segmento']+$i;
  $km = $_GET['km']+$i;
  echo $dfwd." - ".$segmento." - ".$km."</br>";

  $homogeneo->setDfwd($dfwd);
  $homogeneo->setSegmento($segmento);
  $homogeneo->setKM($km);
  $segmentof=$homogeneo->getSegmento();
  $KMf=$homogeneo->getKM();
  $dfwdf=$homogeneo->getDfwd();
  $calculo = $homogeneo->HomogeneoDVB($dfwd);
  $DVBtotal = $homogeneo->DVBtotal($calculo);
  echo "DVB:".$DVBtotal."QTDA:".$clone;
  $Dvbmedia = $homogeneo->DMedia_VB($clone,$DVBtotal);
}
  ?>
  <!DOCTYPE html >
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
  <title>Cálculo</title>
  <!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="js/menuUsuario.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/npm.js"></script>
  <link href="css/login_style.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

  <link rel="shortcut icon" href="img/favicon.ico"/>
  <link rel="apple-touch-icon" href="img/favicon.png"/>
</head>

 <style type="text/css">

     body{
         background: #ffdead;
     }
     .nav a:hover {
        color: black;
        text-decoration: underline;
     }
     .li .ul .href{
      color: black;
      font-weight: bold;
     }
     #DVB{
      background-color:#E67E22;
      color: #fff;
      font-weight: bold;
      border:5%;
      border-color: #e67e22;
     }
     #titulotb{
      background-color: #000000;
      color: #fff;
      font-weight: bold;
     }
     #conteudo{
      background-color: #FFFFE0;
     }

 </style>

<body>

<nav class="navbar navbar-inverse"  style="background: #e67e22; border: 0">
  <div class="container-fluid" style="background: #e67e22; margin-left: 400px">
    <div class="navbar-header" style="background: #e67e22">
      <a class="navbar-brand" href="index.html" style="background: #e67e22">[Logo]</a>
    </div>
    <ul  id="lista-menu" class="nav navbar-nav" style="background:#e67e22">
      <li><a href="index.html"  style="color: #fff">Home</a></li>
      <li><a href="calculo.html"  style="color: #fff">Cálculo</a></li>
      <li><a href="pluviometria.html"  style="color: #fff">Pluviometria</a></li> 
      <li><a href="relatorio.html"  style="color: #fff">Relatório</a></li>
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
  <!-- Tab panes -->
    <div role="tabpanel" class="tab-pane" id="segmento"><h2>Segmento Homogeneo</h2>
<?php

  echo "

  <table class='table table-bordered'>
  <tr>
  <th id='titulotb'> <center>Segmento Homogeneo </th>
  <th id='titulotb'> <center>KM </th>
  <th id='titulotb'> <center>Dfwd </th>
  <th id='titulotb'> <center>Dvb (10^-2mm) </th>
  <th id='titulotb'><center>Dmédia (10^-2 mm)</th>
  <th id='titulotb'> <center>Dmedia - Dvb </th>
  <th id='titulotb'> <center>Acumulo </th>
  </tr>
   <tr>
   <th id='conteudo'><center>$segmentof</th>
   <th id='conteudo'><center>$KMf</th>
    <th id='conteudo'> <center>$dfwdf </th>
   <th id='conteudo'><center>$calculo</th>
   <th id='conteudo'><center> $DVBtotal</th>
   <th id='conteudo'><center>$Dvbmedia </th>
   <th id='conteudo'> <center> </th>
   </tr>
   </table>";


?>
    <a href = "calculo.html"> Voltar </a>
    
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

}else{

?>
<!DOCTYPE html >
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
	<title>Cálculo</title>
<!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/menuUsuario.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/npm.js"></script>
  <link href="css/login_style.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.ico"/>
  <link rel="apple-touch-icon" href="img/favicon.png"/>

  <script language="JavaScript" type="text/javascript">
  var contador = 0;
  function duplicarCampos(){
      var clone = document.getElementById('origem').cloneNode(true);
        clone.getElementsByTagName("input")[0].name="dfwd" + contador;
        clone.getElementsByTagName("input")[1].name="segmento" + contador;
        clone.getElementsByTagName("input")[2].name="km" + contador;

      var destino = document.getElementById('destino');
      destino.appendChild (clone);

      var camposClonados = clone.getElementsByTagName('input');
      for(i=0; i<camposClonados.length;i++){
        camposClonados[i].value = '';

      }        
              contador++;
      localStorage.setItem("contador", contador);
      debugger;
      document.getElementById("contador").setValue(contador);

  }


function removerCampos(id){
  var node1 = document.getElementById('destino');
  node1.removeChild(node1.childNodes[0]);
}
  </script>
</head>

 <style type="text/css">

     body{
         background: #ffdead;
     }
     .nav a:hover {
        color: black;
        text-decoration: underline;
     }
     .li .ul .href{
      color: black;
      font-weight: bold;
     }
     #DVB{
      background-color:#E67E22;
      color: #fff;
      font-weight: bold;
      border:5%;
      border-color: #e67e22;
     }
      #icone{
      height: 4.5%;
      width: 4.5%;
     }
 </style>

<body>

<nav class="navbar navbar-inverse"  style="background: #e67e22; border: 0">
  <div class="container-fluid" style="background: #e67e22; margin-left: 400px">
    <div class="navbar-header" style="background: #e67e22">
      <a class="navbar-brand" href="index.html" style="background: #e67e22">[Logo]</a>
    </div>
    <ul  id="lista-menu" class="nav navbar-nav" style="background:#e67e22">
      <li><a href="index.html"  style="color: #fff">Home</a></li>
      <li><a href="calculo.html"  style="color: #fff">Cálculo</a></li>
      <li><a href="pluviometria.html"  style="color: #fff">Pluviometria</a></li> 
      <li><a href="relatorio.html"  style="color: #fff">Relatório</a></li>
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

//---------------------
//duplicação

</script>
  <!-- Tab panes -->
    <div role="tabpanel" class="tab-pane" ><h2>Segmento Homogeneo</h2>
    <form method="GET">
    <input type="hidden" name="contador" id="contador" value="1">
    <div role="tabpanel" class="tab-pane" name="origem" id="origem">
      <input type="text" name="segmento" placeholder=Segmento>
      <input type="text" name="km" placeholder="Km">
      <input type="float" name="dfwd" placeholder="Dfwd">
    <img  src="img/add.ico" id="icone" style="cursor: pointer; height: 4%; width: 4%;" onclick="duplicarCampos();">
    <img  src="img/cross.png" id="icone" style="cursor: pointer; margin-bottom: 0.2px;" onclick="removerCampos(this);">
    </div>
    <div id="destino">
    </div>
              <input type="submit" value="Calcular" name="Calcular" id="Calcular">
    </form>
    </div>
    <a href = "calculo.html"> Voltar </a>
    
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