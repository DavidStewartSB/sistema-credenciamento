<?php
require_once('conecta_mysql.inc');
if(!$_SESSION['usuario']) {
	header('Location: index.php');
		exit();
	} 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<!-- 	<script type="text/javascript">
        function mascara(telefone){ 
            if(telefone.value.length == 0)
                telefone.value = '(' + telefone.value; 
            if(telefone.value.length == 3)
                telefone.value = telefone.value + ') '; 
 
            if(telefone.value.length == 8)
                telefone.value = telefone.value + '-';
  
}
    </script> -->
	<meta charset="UTF-8">
	
	<title>Sistema de Credenciamento de Expositor</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/bulma.min.css" />
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
	 <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Credenciamento de Expositor</h3>
                    
                    
                    <div class="notification is-danger">
                      
                    </div>
                    
                    <div class="box">
                        <form method="POST"	action="verifica.php">
                            <div class="field">
                                <div class="control">
                                    <strong> Insira as informações para efetuar o cadastro.</strong><br>
                                    <br>

									<strong> Nome Completo:</strong> <br>
								  <input type="text" size="30" maxlength="256" name="nome">
									<br><br>
									<strong> CPF: </strong><br>
									<input id="cpf-mask" type="text" size="30" maxlength="256" name="cpf">
									<br><br>
									<strong> Qual o número do seu Telefone?</strong> <br>
									<input id="phone-mask" type="text" class="form-control cel-sp-mask" placeholder="Ex.: (00) 00000-0000" size="30" maxlength="256" name="telefone">
									<br><br>
									<strong> Qual o seu E-mail? </strong><br>
									<input type="email" size="30" maxlength="256" name="email">
									<br><br>
									<strong> Empresa na qual trabalha</strong><br>
								  <input type="text" size="30" maxlength="256" name="empresatrabalho">
									<br><br>
									<strong> Ramo de atividade</strong><br>
								  <input type="text" size="30" maxlength="256" name="ramoatividade">
									<br><br>
									<strong> Telefone da Empresa:</strong><br>
								  <input id="cel-sp-mask" type="text"  class="form-control phone-ddd-mask" placeholder="Ex.: (00) 0000-0000"size="30" maxlength="256" name="telefoneempresa">
									<br><br>
									<strong> Escolha sua categoria:</strong> <br>
								  <input type="radio" size="30" maxlength="256" name="categoria" value="Sou Expositor">Sou Expositor
									<br> <input  type="radio" size="30" maxlength="256" name="categoria" value="Sou Prestador de Serviço">Sou Prestador de Serviço<br>
								  <input type="radio" size="30" maxlength="256" name="categoria" value="Sou da Montadora de estande">Sou da Montadora de estande<br>
									<input id="" type="radio" size="30" maxlength="256" name="categoria" value="Contratado pela organização do evento">Contratado pela organização do evento<br>
									<br><br>
									<strong> Estande em que vai trabalhar / montar / prestar serviço: </strong><br>
								  <input type="text" size="30" maxlength="200" name="estande">
									
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                   
                                </div>
                            </div>
                            <button type="submit" value="" name="enviar" class="button is-block is-link is-large is-fullwidth">Efetuar Cadastro</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		
    </section>
	
	<br></br>
<button><a href="url_do_client" url="url_do_client">Sair</a></button>
	
	
	
	<script>
		$(document).ready(function(){
  $('#cpf-mask').mask('000.000.000-00');
  $('#phone-mask').mask('(00) 0000-0000');
  $('#cel-sp-mask').mask('(00) 0000-0000');
});
	</script>
	
	
	

</body>
</html>