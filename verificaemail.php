<?php

$email = $_POST['verificaEmail'];

require_once 'conexao.php';

//Verifica se o email ja está cadastrado no banco
$validaemail = mysqli_query($conexao, "SELECT * FROM login WHERE email = '$email'") or die("Erro na verificação de email");

if (mysqli_num_rows($validaemail) > 0){
	
	while($res = $validaemail->fetch_array()){
		
	echo 
		"<script> window.location.href='trocasenha.php?id=".$res['id']."'; </script>";	  
};

}else{
	echo "<script> alert('Email não cadastrado'); 
		  history.go(-1);
	</script>";

}