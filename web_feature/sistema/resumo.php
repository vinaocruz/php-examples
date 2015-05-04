<?php
	session_start();
	include "produtos.php";

	// $_SESSION['usuario'] = "Vinicius";
	$_SESSION['produtos'] = $_POST;
?>

<table>
	<?php 
	$total_geral = 0;
	foreach( $produtos as $indice => $produto ){
		$subtotal = $_POST['qnt_'.$indice] * $produto['valor'];
		//0 + 5600
		//5600 + 2800
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



<script>
	// var prazo = $("#data_1").val(); //48x
	// var pag = $("#data_2").val(); //24/04/2015

	// for(i=1; i<=prazo; i++){
	// 	var date = datetime + i month;
	// 	$("#data_3").val(date);
	// }
</script>



