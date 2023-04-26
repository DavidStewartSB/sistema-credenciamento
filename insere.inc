<?php 

include 'conecta_mysql.inc';

$nome 			 = $_POST['nome'];
$cpf 			 = $_POST['cpf'];
$telefone  	 	 = $_POST['telefone'];
$email  		 = $_POST['email'];
$empresatrabalho  = $_POST['empresatrabalho'];
$ramoatividade    = $_POST['ramoatividade'];
$telefoneempresa  = $_POST['telefoneempresa'];
$categoria       = $_POST['categoria'];
$estande         = $_POST['estande'];

$sql = "INSERT INTO credenciamento (nome,cpf,telefone,email,empresatrabalho,ramoatividade,telefoneempresa,categoria,empresaprestarservico)VALUES";
$sql .= "('$nome','$cpf','$telefone', '$email', '$empresatrabalho', '$ramoatividade', '', '$categoria', '$estande');";

if ($conexao->query($sql) === TRUE) {
	echo  "CADASTRO REALIZADO COM SUCESSO!";
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();

