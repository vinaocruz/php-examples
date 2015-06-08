<?php

	$id = $_GET['id'];

	require_once 'class/produto.class.php';
	
	$conn = mysqli_connect('localhost', 'root', 'dev123', 'orcamento');

	$produto = new Produto($conn);
	$produto->consulta($id);

?>
<html>
	<body>
		<h1><?php echo $produto->nome; ?></h1>
		<p>
			<?php echo $produto->descricao; ?>
			<br />
			<strong><?php echo $produto->preco; ?></strong>
		</p>
		<p>
			<img src="uploads/produtos/thumb/<?php echo $produto->imagem; ?>" />
		</p>
	</body>
</html>	