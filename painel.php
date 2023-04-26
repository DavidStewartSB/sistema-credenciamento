<?php
session_start();
include('verifica_login.php');
require_once('conecta_mysql.inc');
if(!$_SESSION['usuario']) {
	header('Location: index.php');
		exit();
	}
?>
<style type="text/css">
#topo {
}
</style>


<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>


<h2><a href="cadastro.php">Credenciar</a></h2>
<h2><a href="logout.php">Sair</a></h2>
