<?php
require_once('conecta_mysql.inc');
if(!$_SESSION['usuario']) {
	header('Location: index.php');
		exit();
	}
?>

<DOCTYPE html>
<html>
<head>
	<?php
	require_once"conexao.php";
		?>
	<style>
		table {
			width: 650px;
			border:1px solid #FFCA5E;
			font-size:12;
		}
		caption {
			font: 1.8em/1.8em Arial, Helvetica, sans-serif;
			text-align: left;
			text-indent: 10px;
			background: url(bg_caption.jpg) right top;
			height: 45px;
			color: #FFAA00;
		}
		thead th {
			background: url(bg_th.jpg) no-repeat right;
			height: 47px;
			color: #FFFFFF;
			font-size: 0.8em;
			font-weight: bold;
			padding: 0px 7px;
			margin: 20px 0px 0px;
			text-align: left;
			border-right: 1px solid #FCF1D4;
		}
		tr {
		background: url(bg_td1.jpg) repeat-x top;
		width:50px	;
		}
		tbody tr.odd {
			background: #FFF8E8 url(bg_td2.jpg) repeat-x;
		}

		tbody th,td {
			font-size: 0.8em;
			line-height: 1.4em;
			font-family: Arial, Helvetica, sans-serif;
			color: #777777;
			padding: 10px 7px;
			border-top: 1px solid #FFCA5E;
			border-right: 1px solid #DDDDDD;
			text-align: left;
			width: 100px;
		}

	</style>
</head>
<body>

<div class="tabela">
	<?php
		$consulta = "select * from credenciamento order by nome";
		$result = mysqli_query($conexao,$consulta) or die (mysqli_error());	
		
				echo '<Table>';
					echo '<th>Nome</th>';
					echo '<th>Empresa</th>';
					echo '<th>CPF </th>';
					echo '<th>Telefone </th>';
				echo '</table>';
				echo '<br>';
		
				
		while ($sql = mysqli_fetch_array($result)){
					
			echo'<table>';
				echo  '<tr>';
					echo	'<td>'.$sql["nome"].'</td>';
					echo	'<td>'.$sql["empresatrabalho"].'</td>';
					echo	'<td>'.$sql["cpf"].'</td>';
					echo	'<td>'.$sql["telefone"].'</td>';
					
				echo  '</tr>';		
			echo'</table>';
			
			}				
	?>
</div>	

</body>
</html>