<?php
$novaSenha = md5($_POST['recPWD']);
$senhaID = $_POST['senhaId'];

require_once 'conexao.php';

$sql = "UPDATE login SET senha ='$novaSenha' WHERE id='$senhaID' ";

mysqli_query($conexao, $sql) or die("Erro na atualização");

mysqli_close($conexao);

echo "<script>
		alert('Senha atualizada!');
		window.location.href= 'login.php';
	  </script>";