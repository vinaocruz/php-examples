<html>
	<?php include '../partials/head.inc.php'; ?>
	<body>

		<h1>Cadastro de Categoria</h1>

		<form method="POST" action="exec_cadastro_categoria.php">
			<p>
				Nome:<br />
				<input type="text" name="nome" />
			</p>
			<p>
				Descrição:<br />
				<input type="text" name="descricao" />
			</p>

			<input type="submit" value="Enviar" />
		</form>

	</body>

</html>