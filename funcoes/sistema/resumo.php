<?php
	session_start();
	include "produtos.php";

	$_SESSION['produtos'] = $_POST;
?>

<table>
	<?php 
	$total_geral = 0;
	foreach( $produtos as $indice => $produto ){
		$subtotal = $_POST['qnt_'.$indice] * $produto['valor'];
		// $total_geral = $total_geral + $subtotal;
		$total_geral+= $subtotal;
	?>
	<tr>
		<td><?php echo $_POST['qnt_'.$indice]; ?></td>
		<td><?php echo $produto['nome']; ?></td>
		<td>R$ <?php echo $subtotal;  ?></td>
	</tr>
	<?php } ?>

	<tr>
		<td>Total</td>
		<td></td>
		<td>R$ <?php echo $total_geral; ?></td>
	</tr>
</table>

<?php
	$_SESSION['total'] = $total_geral;
?>

<a href="index.php">Voltar</a> | 
<a href="cancelar.php">Cancelar</a> | 
<a href="finalizar.php">Finalizar</a>

