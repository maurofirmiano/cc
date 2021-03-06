<?php
  session_start();
 $sessao = $_SESSION['usuario'];
    if (!isset($_SESSION['usuario']) == true){
    header("Location:login.php"); 
    }  
?>

<!DOCTYPE html>
<html>
<head>
  <title>Sensores HomeAuto</title>
  <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='css/bootstrap.min.css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='js/jquery.min.js'></script>
    <script src='js/bootstrap.min.js'></script>

    <!--Minhas configuracoes css-->
    <link rel="stylesheet" type="text/css" href="">
<style>
  body{
    background-image: url("img/img3.png");
    background-repeat: no-repeat;
    background-size: cover;
  }
  .navbar-inverse {
    background-color: rgba(0, 0, 0, 0.5);
    border: 0px;


}
.panel-default{
  background-color: rgba(255, 250, 250, 0.8);
  border-top-right-radius: 80px;
  border-bottom-right-radius: 80px;
  border-top-left-radius: 80px;
  border-bottom-left-radius: 80px;
  border: 0px;
}
.panel-heading{
  
  border-top-right-radius: 100px;
 
  border-top-left-radius: 100px;
  
}
.panel-footer{
  
  border-bottom-right-radius: 100px;
 
  border-bottom-left-radius: 100px;
  
}
</style>

</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand"><span class="glyphicon glyphicon-user"></span> <?php echo $sessao ?></a>

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href=#><span class="glyphicon glyphicon-dashboard"></span> Consumo </a></li>
        <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Configura????o</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Sair</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-heading"><b><center>VAZ??O</center></b></div>
        <div class="panel-body">
         <h4><center> L/min </center></h4> 
        </div>
        <div class="panel-footer">Status: <?php if (isset($_GET['st17'])) { echo $_GET['st17']; }if (isset($_GET['st18'])) { echo $_GET['st18'];}?></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-default" >
        <div class="panel-heading"><b><center>TOTAL DE LITROS</center></b></div>
        <div class="panel-body">
          <h4><center> L </center></h4>
        </div>
        <div class="panel-footer">Status: <?php if (isset($_GET['st19'])) { echo $_GET['st19']; }?></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-default" >
        <div class="panel-heading"><b><center>VALOR GASTO</center></b></div>
        <div class="panel-body">
          <h4><center> R$ </center></h4>
        </div>
        <div class="panel-footer">Status:</div>
      </div>
    </div>
  </div>
</div><br>


  </div>
</div><br><br>    


</div>
</div>
</div>

</body>
</html>


