<?php

	require_once 'config/init.php';
	
	// $conn = mysqli_connect('localhost', 'root', 'dev123', 'orcamento');
	// mysqli_set_charset($conn, "utf8");

	$produto = new Produto($conn);
	// $produto->consultaTodos();
	$produto->consultaBusca($_GET['busca']);


	// if(isset($_GET['categoria_id']) == TRUE)
	// {
	// 	$produto->consultaPorCategoria($_GET['categoria_id']);
	// }else{
	// 	$produto->consultaTodos();
	// }

?>
<html>
	<?php include 'partials/head.inc.php'; ?>
	<body>
		<div class="container">
		<?php include 'partials/menu.inc.php'; ?>
			<?php 
			$c = 0;
			while( $linha = $produto->pegaUm() ){ $c++; ?>			
		<?php if($c == 1){ ?><div class="row"><?php } ?>
			<div class="four columns">
				<?php echo $linha['nome']; ?><br />
				R$ <?php echo number_format($linha['preco'], 2, ',', '.'); ?>
				<p>
					<a class="button" href="exec_adicionar_carrinho.php?id=<?php echo $linha['id']; ?>">Comprar</a>	
				</p>

			</div>
		<?php if($c == 3){ $c = 0; ?></div><?php } ?>
			<?php } ?>

		<?php if($c < 3){ ?></div><?php } ?>
		
		</div>
	</body>
</html>	