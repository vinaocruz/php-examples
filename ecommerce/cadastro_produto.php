<?php

require 'config/init.php';

$categoria = new Categoria($conn);
$categoria->consultaTodos();

?>

<html>

	<body>
		<h1>Cadastro de produto</h1>
		<form method="post" enctype="multipart/form-data" action="exec_cadastrar_produto.php">
			<p>
				Nome:<br />
				<input type="text" name="nome" />
			</p>
			<p>
				Descrição:<br />
				<input type="text" name="descricao" />
			</p>
			<p>
				Categoria:<br />
				<select name="categoria">
					<?php while( $linha = $categoria->pegaUm() ){ ?>
					<option value="<?php echo $linha['id']; ?>"><?php echo $linha['nome']; ?></option>
					<?php } ?>
				</select>
			</p>
			<p>
				Imagem:<br />
				<input type="file" name="foto" />
			</p>
			<p>
				Preço:<br />
				<input type="text" name="preco" />
			</p>
			
			<input type="submit" value="Enviar" />
		</form>

	</body>

</html>