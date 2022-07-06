<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<style>
    body{
		  background-image: url("img/img2.jpg");
		  background-repeat: no-repeat;
		  background-size: cover;
    }
	  .navbar-inverse {
      background-color: rgba(0, 0, 0, 0.5);
      border: 0px;
    }
    .panel-primary{
      background-color: rgba(255, 250, 250, 0.9);
      border-radius:10px;
      padding: 1px;
      box-shadow: 1px 1px 9px #cccccc;
    }

</style>

	</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Usuário</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Configuração</a></li>
      </ul>
    </div>
  </div>
</nav>


	
<div class="container">
  <!-- Modal cadastro-->
  <div class="modal fade" id="cadModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Conteúdo modal-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><center>Cadastro de Usuário</center></h4>
        </div>
        <div class="modal-body">
          <center>
          <form name="formcad" action="validacad.php" method="POST">

        <div class="form-group">
          <div class="input-group">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-user"></i></span>
          <input type="text" class="form-control" id="usu" placeholder="Digite seu nome completo" name="usu">
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-envelope"></i></span>
          <input type="email" class="form-control" id="email" placeholder="Digite seu email" name="email">
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-user"></i></span>
          <input type="text" class="form-control" id="usu" placeholder="Nome de usuário" name="nUsu">
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-lock"></i></span>
          <input type="password" class="form-control" id="pwd" placeholder="Senha, mínimo 6 caracteres" name="pwd">
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-lock"></i></span>
          <input type="password" class="form-control" id="pwd" placeholder="Confirme a senha" name="confPwd">
          </div>
        </div>
         
        <button type="submit" class="btn btn-primary" name="entrar"><span class="glyphicon glyphicon-floppy-save"></span> Cadastrar</button>
        <button type="reset" class="btn btn-danger" name="cadlimpar"><span class="glyphicon glyphicon-erase"> Limpar</button>
        
        </form>
          </center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>

        </div>
      </div>
      
    </div>
  </div>
<!-- Fim Modal cadastro-->

<!-- Modal verificar email-->
  <div class="modal fade" id="emailModal" role="dialog">
    <div class="modal-dialog">

      <!-- Conteúdo modal-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><center>Verificar email</center></h4>
        </div>
        <div class="modal-body">
          <center>
          <form name="formcad" action="verificaemail.php" method="POST">
        
        <div class="form-group">
          <div class="input-group">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-envelope"></i></span>
          <input type="email" class="form-control" id="email" placeholder="Digite seu email" name="verificaEmail">
          </div>
        </div>
         
        <button type="submit" class="btn btn-primary" name="entrar"><span class="glyphicon glyphicon-floppy-save"></span> Verificar</button>
        <button type="reset" class="btn btn-danger" name="limpar"><span class="glyphicon glyphicon-erase"> Limpar</button>
        
        </form>
          </center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>

        </div>
      </div>
      
    </div>
  </div>
<!-- Fim Modal verificar email-->

<div class='container-fluid'>
  <div class='row'>
    <div class='col-sm-4'></div>
    <div class='col-sm-4'>
    <div class="panel-group">
  <div class="panel panel-primary">
    <div class="panel-heading"><center><h4>Consumo Consiente de Água</h4></center></div>
    <div class="panel-body">

  <center>
      <form name="formlogin" action="logar.php" method="POST">

        <div class="form-group">
          <div class="input-group">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" id="user" placeholder="Usuário" name="nUsu">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-lock"></i></span>
          <input type="password" class="form-control" id="pwd" placeholder="Senha" name="senha">
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="entrar"><span class="glyphicon glyphicon-ok-circle"></span> Entrar </button>
        </form>
          <br>
          <button class="btn btn-link" onclick="cadastroModal()"> Criar Cadastro </button>
          <button class="btn btn-link" onclick="verificaEmail()"> Esqueci a senha </button>
        </div>
  </center>
      </div>
      </div>

<div class='col-sm-4'></div>

    </div>
  </div>
</div>
</div>

<script type="text/javascript">
  function cadastroModal() {
    $('#cadModal').modal('show')
    $('#cadModal').on('hide.bs.modal', function () { window.location.href = 'login.php'; })
  }
  function verificaEmail() {
    $('#emailModal').modal('show')
    $('#emailModal').on('hide.bs.modal', function () { window.location.href = 'login.php'; })
  }
</script>
</body>
</html>
