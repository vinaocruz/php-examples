<?php

$categoria = new Categoria();
$categoria->consulta($_GET['id']);

?>
<html>

	<body>

		<h1>Editar Categoria</h1>

		<form method="POST" action="exec_editar_categoria.php?id=">
			<p>
				Nome:<br />
				<input type="text" name="nome" value="<?php echo $categoria->nome; ?>" />
			</p>
			<p>
				Descrição:<br />
				<input type="text" name="descricao" value="" />
			</p>

			<input type="submit" value="Enviar" />
		</form>

	</body>

</html>