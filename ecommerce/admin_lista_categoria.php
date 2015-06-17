<?php
	
	require_once 'config/init.php';
	$conn = mysqli_connect('localhost', 'root', 'dev123', 'orcamento');

	$categoria = new Categoria($conn);
	$categoria->consultaTodos();

?>
<html>

	<body>
		<h1>Lista de categorias</h1>
		<table>
			<?php while($linha = $categoria->pegaUm()){ ?>
			<tr>
				<td><?php echo $linha['nome']; ?></td>
				<td><a href="editar_categoria.php">Editar</a></td>
				<td><a href="remover_categoria.php">Remover</a></td>
			</tr>
			<?php } ?>
		</table>

	</body>

</html>