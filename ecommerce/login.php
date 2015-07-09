<html>
	<?php include 'partials/head.inc.php'; ?>
	<body>
		
		<h1>Login</h1>

		<form method="POST" action="exec_login.php">
			<p>
				Nome:<br />
				<input type="text" name="login" />
			</p>
			<p>
				Senha:<br />
				<input type="password" name="senha" />
			</p>

			<input type="submit" value="Entrar" />
		</form>
	</body>
</html>	