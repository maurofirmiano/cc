<?php
    require_once 'conexao.php';
    $senhaId = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script type="text/javascript">
    window.onload = function cadastroModal() {
      $('#senhaModal').modal('show')
      $('#senhaModal').on('hide.bs.modal', function () { window.location.href = 'login.php'; })
    }
  </script>

</head>
<body>
<!-- Modal recuperar senha-->
  <div class="modal fade" id="senhaModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Conteúdo modal-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><center>Alterar Senha</center></h4>
        </div>
        <div class="modal-body">
          <center>
          <form name="formcad" action="validatrocasenha.php" method="POST">

            <input type="hidden" readonly name="senhaId" value="<?php echo $senhaId ?>"><br><br>
        

        <div class="form-group">
          <div class="input-group">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-lock"></i></span>
          <input type="password" class="form-control" id="pwd" placeholder="Senha, mínimo 6 caracteres" name="recPWD">
          </div>
        </div>

        
         
        <button type="submit" class="btn btn-primary" name="entrar"><span class="glyphicon glyphicon-floppy-save"></span> Alterar</button>
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
<!-- Fim Modal recuperar senha-->
</body>
</html>