<?php
//Variáveis para receber os dados do formulário
$usu = htmlspecialchars($_POST['usu']);
$email = htmlspecialchars($_POST['email']);
$nUsu = htmlspecialchars($_POST['nUsu']);
$senhacad = md5($_POST['pwd']);

if (empty($usu) or empty($email) or empty($senhacad)){
	echo "<script>
    		alert('Todos os campos são de preenchimento obrigatório.');
    		history.go(-1);
		 </script>";
exit;
} 
	
require_once 'conexao.php';


//Consulta SQL
$sql = "INSERT INTO usuario(nome, email, nomeusuario, senha ) VALUES('$usu', '$email', '$nUsu', '$senhacad' )";

//Verifica se o email ja está cadastrado no banco
$validaemail = mysqli_query($conexao, "SELECT * FROM usuario WHERE email = '$email'") or die("Erro na verificação de email");

if (mysqli_num_rows($validaemail) > 0){

echo "<script language='javascript' type='text/javascript'>
		alert('Email já cadastrado na base de dados, tente outro!');
		history.go(-1);
	  </script>";

}else{

//Inserir dados no banco
mysqli_query($conexao, $sql) or die("Erro ao inserir os dados");
}

//Encerra a conexão
mysqli_close($conexao);

echo "<script>
		alert('Cadastro realizado com sucesso.');
		window.location.href='login.php';
	 </script>";
exit;
