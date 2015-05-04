<?php
session_start();
?>
<form method="POST" action="exec_login.php">

	Login: <input type="text" name="username" /><br />
	Senha: <input type="password" name="password" /><br />

	<input type="submit" value="Enviar" />
</form>

<?php

	require_once "feedback.lib.php";
	echo mostrar_msg();

?>