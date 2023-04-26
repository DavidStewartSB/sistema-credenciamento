<?php
require_once('conecta_mysql.inc');
if(!$_SESSION['usuario']) {
	header('Location: index.php');
		exit();
	}
?>