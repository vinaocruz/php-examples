
<ul class="nav nav-pills">
	<li role="presentation">
		<a href="index.php">Home</a>
	</li>
	<li role="presentation" class="dropdown">
	    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
	      Categorias <span class="caret"></span>
	    </a>
	    <ul class="dropdown-menu">
			<?php
				$categorias = new Categoria($conn);
				$categorias->consultaTodos();
				$cats = $categorias->pegaTodos();
			?>

			<?php foreach($cats as $item_categoria){ ?>
			<li role="presentation">
				<a href="#"><?php echo $item_categoria['nome']; ?></a>
			</li>
			<?php } ?>
		</ul>
	</li>
	<li role="presentation">
		<a href="carrinho.php">Carrinho</a>
	</li>
</ul>

<div>
<?php	
$cliente = new Cliente($conn);
if($cliente->estaLogado() == TRUE){
?>
	Olá, <?php echo $cliente->nome; ?>. <a href="logout.php">Sair</a>
<?php }else{ ?>
	Olá visitante. <a href="login.php">Faça seu login</a>
<?php } ?>
</div>