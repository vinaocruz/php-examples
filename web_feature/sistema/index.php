<?php
	session_start();
	include "produtos.php";


?>
<form action="resumo.php" method="POST">
	<table>

		<tr>
			<td>Nome</td>
			<td>Valor</td>
			<td>Qnt</td>
		</tr>
		<?php foreach( $produtos as $indice => $produto ){ ?>
		<tr>
			<td><?php echo $produto['nome'] ?></td>
			<td>R$ <?php echo $produto['valor'] ?></td>
			<td><input name="qnt_<?php echo $indice; ?>" value="<?php echo $_SESSION['produtos']['qnt_'.$indice] ?>" placeholder="Digite a quantidade" /></td>
		</tr>
		<?php } ?>

	</table>

	<input type="submit" value="Enviar" />

</form>

