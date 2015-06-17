<?php

	require_once 'config/init.php';
	
	$conn = mysqli_connect('localhost', 'root', 'dev123', 'orcamento');
	mysqli_set_charset($conn, "utf8");

	$produto = new Produto($conn);
	$produto->consultaTodos();


	// if(isset($_GET['categoria_id']) == TRUE)
	// {
	// 	$produto->consultaPorCategoria($_GET['categoria_id']);
	// }else{
	// 	$produto->consultaTodos();
	// }

?>
<html>
	<body>

		<ul>
			<?php while( $linha = $produto->pegaUm() ){ ?>			
			<li><?php echo $linha['nome']; ?></li>
			<?php } ?>
		</ul>

	</body>
</html>	