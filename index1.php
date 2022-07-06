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
  <title></title>
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
    background-image: url("img/img1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }
  .navbar-inverse {
    background-color: rgba(255, 250, 250, 0.2);
}
.panel-default{
  background-color: rgba(255, 250, 250, 0.8);
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
        <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="sensores.php"><span class="glyphicon glyphicon-dashboard"></span> Sensores </a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Sair</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-heading"><center>ÁREA</center></div>
        <div class="panel-body">
          <form name='formArea' action="controle.php" method="POST">
            <label><i class="material-icons">lightbulb_outline</i> LUZ PRINCIPAL</label>
            <button type='submit' name='liga17' value="LIGA" class='btn btn-warning btn-block btn-sm'><span class="glyphicon glyphicon-off"></span> LIGAR</button><br><br>
            <button type='submit' name='desliga17'  value='DESLIGA' class='btn btn-danger btn-block btn-sm'><span class="glyphicon glyphicon-off"></span> DESLIGAR</button><br><br>
            <label><i class="material-icons">lightbulb_outline</i> LUZ DE DESCANSO</label>
            <button type='submit' name='liga18' value='LIGA' class='btn btn-warning btn-block btn-sm'><span class="glyphicon glyphicon-off"></span> LIGAR</button><br><br>
            <button type='submit' name='desliga18' value='DESLIGA' class='btn btn-danger btn-block btn-sm'><span class="glyphicon glyphicon-off"></span> DESLIGAR</button>
          </form>
        </div>
        <div class="panel-footer">Status: <?php if (isset($_GET['st17'])) { echo $_GET['st17']; }if (isset($_GET['st18'])) { echo $_GET['st18'];}?></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-default" >
        <div class="panel-heading"><center>SALA</center></div>
        <div class="panel-body">
          <form name='formSala' action="controle.php" method="POST">
            <label><i class="material-icons">lightbulb_outline</i> LUZ PRINCIPAL</label>
            <button type='submit' name='liga19' class='btn btn-warning btn-block btn-sm'><span class="glyphicon glyphicon-off"></span> LIGAR</button><br><br>
            <button type='submit' name='desliga19'  value='DESLIGA' class='btn btn-danger btn-block btn-sm'><span class="glyphicon glyphicon-off"></span> DESLIGAR</button><br><br>
            <label><i class="material-icons">lightbulb_outline</i> LUZ DE DESCANSO</label>
            <button type='submit' name='liga20' value='LIGA' class='btn btn-warning btn-block btn-sm'><span class="glyphicon glyphicon-off"></span> LIGAR</button><br><br>
            <button type='submit' name='desliga20' value='DESLIGA' class='btn btn-danger btn-block btn-sm'><span class="glyphicon glyphicon-off"></span> DESLIGAR</button>
          </form>
        </div>
        <div class="panel-footer">Status: <?php if (isset($_GET['st19'])) { echo $_GET['st19']; }?></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-default" >
        <div class="panel-heading"><center>QUARTO</center></div>
        <div class="panel-body">
          <form name='formQuarto' action="controle.php" method="POST">
            <label><i class="material-icons">lightbulb_outline</i> LUZ PRINCIPAL</label>
            <button type='submit' name='liga21' class='btn btn-warning btn-block btn-sm'><span class="glyphicon glyphicon-off"></span> LIGAR</button><br><br>
            <button type='submit' name='desliga21'  value='DESLIGA' class='btn btn-danger btn-block btn-sm'><span class="glyphicon glyphicon-off"></span> DESLIGAR</button><br><br>
            <label><i class="material-icons">lightbulb_outline</i> LUZ DE DESCANSO</label>
            <button type='submit' name='liga22' value='LIGA' class='btn btn-warning btn-block btn-sm'><span class="glyphicon glyphicon-off"></span> LIGAR</button><br><br>
            <button type='submit' name='desliga22' value='DESLIGA' class='btn btn-danger btn-block btn-sm'><span class="glyphicon glyphicon-off"></span> DESLIGAR</button>
          </form>
        </div>
        <div class="panel-footer">Status:</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default" >
        <div class="panel-heading"><center>COZINHA</center></div>
        <div class="panel-body">
          
        </div>
        <div class="panel-footer">Status:</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-default" >
        <div class="panel-heading"><center>BANHEIRO</center></div>
        <div class="panel-body">
          
        </div>
        <div class="panel-footer">Status:</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-default" >
        <div class="panel-heading"><center>QUINTAL</center></div>
        <div class="panel-body">
          
        </div>
        <div class="panel-footer">Status:</div>
      </div>
    </div>
  </div>
</div><br><br>    


</div>
</div>
</div>

</body>
</html>


