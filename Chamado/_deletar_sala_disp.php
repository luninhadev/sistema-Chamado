<?php

include 'conexao.php';

$id  = $_GET['id_sala'];

$sql = "DELETE FROM `bd_chamado`.`tb_item` WHERE (`id_item` = '$id')";
$deletar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<div class="container form-group" style="width: 550px; margin-top: 20px">
	<center>
		<h4>Item excluído permanentemente!!</h4>
		<div style="margin-top: 20px">
			<center>
				<a href="listar_sala_disp.php" role="button" class="btn btn-warning btn-sm" position="center">OK</a>
			</center>
		</div>
	</center>
</div>