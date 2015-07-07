<?php
	require_once 'config/init.php';

	$compra = new Compra($conn);
	$produtos = $compra->listarTodosProdutos();

	// var_dump($produtos); exit;	
	$total_compras = 0;
?>

<html>
	<?php include 'partials/head.inc.php'; ?>
	<script type="text/javascript">

	$( document ).ready(function() {

		$('.button-update').click(function(){
			var id = $(this).attr('id');
			var qnt = $('.p_'+id).val();

			$.ajax('exec_atualiza_carrinho.php', {
				method: "GET",
				data: {produto_id: id, quantidade: qnt}
			});
		});

	});

	</script>
	<body>
		<h1>Carrinho</h1>

		<p>
			<a class="button button-primary" href="listar_produtos.php">Continuar comprando</a>
		</p>

		<table class="table table-striped">
			<?php foreach($produtos as $item){ 
					$produto = new Produto($conn);
					$produto->consulta($item['produto_id']);

					$total_compras+= $item['valor']*$item['quantidade'];
				?>
			<tr>
				<td><?php echo $produto->nome; ?></td>
				<td>R$<?php echo $item['valor']; ?></td>
				<td>
					<input type="text" class="p_<?php echo $produto->id; ?>" value="<?php echo $item['quantidade']; ?>" />
				</td>
				<td>
					<a class="button button-update" id="<?php echo $produto->id; ?>" href="#">Atualizar</a>
					<a class="button button-danger" href="exec_remover_carrinho.php?id=<?php echo $item['produto_id']; ?>">Remover</a>
				</td>
			</tr>
			<?php } ?>
		</table>
		<p>
			Total R$<?php echo number_format($total_compras, 2, ',', '.'); ?>
		</p>
		<p>
			<a class="button button-primary" href="#">Finalizar</a>
		</p>
	</body>

</html>


