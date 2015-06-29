<?php
	
	require_once 'config/init.php';
	// $conn = mysqli_connect('localhost', 'root', 'dev123', 'orcamento');

	$categoria = new Categoria($conn);
	$categoria->consultaTodos();

	//passo a percorrer com o FOREACH	
	$resultados = $categoria->pegaTodos();
	// var_dump($resultados); exit;

?>
<html>
	<?php include 'partials/head.inc.php'; ?>
	<body>
		<h1>Lista de categorias</h1>
		<table class="table table-striped">
			<?php //while($linha = $categoria->pegaUm()){
			foreach($resultados as $linha){ ?>
			<tr>
				<td><?php echo $linha['nome']; ?></td>
				<td><a class="button button-primary" href="admin_editar_categoria.php?id=<?php echo $linha['id']; ?>">Editar</a></td>
				<td><a class="button button-danger" onclick="return confirm('Deseja executar esta ação? Todos os produtos dessa categoria serão removidos PERMANENTEMENTE.')" href="admin_remover_categoria.php?id=<?php echo $linha['id']; ?>">Remover</a></td>
			</tr>
			<?php } ?>
		</table>

	</body>

</html>