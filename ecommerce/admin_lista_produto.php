<?php
	
	require_once 'config/init.php';

	$produto = new Produto($conn);
	$produto->consultaTodos();

	//passo a percorrer com o FOREACH	
	$resultados = $produto->pegaTodos();

?>
<html>
	<?php include 'partials/head.inc.php'; ?>
	<body>
		<h1>Lista de produtos</h1>

		<table class="table table-striped">
			<?php foreach($resultados as $linha){ ?>
			<tr>
				<td><?php echo $linha['nome']; ?></td>
				<td><a class="btn btn-primary" href="admin_editar_produto.php?id=<?php echo $linha['id']; ?>">Editar</a></td>
				<td><a class="btn btn-danger" href="remover_produto.php">Remover</a></td>
			</tr>
			<?php } ?>
		</table>

	</body>

</html>