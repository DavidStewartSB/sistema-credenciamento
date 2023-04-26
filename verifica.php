<!DOCTYPE html>
<html>
<head>
	<title>Verifica</title>
	<meta charset="utf-8">
</head>
<body>
<?php 

$nome 			 = $_POST['nome'];
$cpf 			 = $_POST['cpf'];
$telefone  	 	 = $_POST['telefone'];
$email  		 = $_POST['email'];
$empresatrabalho  = $_POST['empresatrabalho'];
$ramoatividade    = $_POST['ramoatividade'];
$telefoneempresa  = $_POST['telefoneempresa'];
$categoria       = $_POST['categoria'];
$estande         = $_POST['estande'];
$erro 			 = 0;

//Verifica se o campo nome não está em branco
if (empty($nome) OR strstr($nome, ' ')==false) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}
	



//Verifica se o campo email está preenchido corretamente
if (strlen($email)< 3 || strstr($email, '@')==false) {
	echo "Favor digitar o seu email corretamente.<br>";
	$erro = 1;
}

//Verifica se o campo categoria está em branco
if (empty($categoria)) {
	echo "Favor selecionar sua categoria.<br>";
	$erro = 1;
}

// verifica o CPF
	function validaCPF($cpf) {
 
    // Extrai somente os números
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
     
    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        return $erro =1 ;
    }
    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return $erro =1;
    }
    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf{$c} * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf{$c} != $d) {
            return $erro =1 ;
        }
    }
    return $erro =0;

	}
		


//Verifica se não houve erro - neste caso chama a include para inserir os dados
if ($erro == 0) {
	echo "Todos os dados foram digitados corretamente.<br>";
	
	include 'insere.inc';
}

 ?>
 <br></br>
<button><a href="url_do_client" url="url_do_client">Novo Cadastro</a></button>
<br></br>
<button><a href="url_do_client" url="url_do_client">Sair</a></button>
</body>
</html>