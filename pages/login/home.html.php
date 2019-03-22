<!DOCTYPE html>
<html lang="pt-br">
	<?php include_once ROOT_PATH . "/pages/_templates/head.html.php"?>
	<body>
		<main>
			<div class="container">
				<div class="col-md-5">
					<div class="space-10"></div>
					<form action="" method="POST">

						<div class="borda login-box">
							<p>Login de Acesso</p>
							<br>

							<div class="form-group">
								<input type="text" class="form-control" name="login" placeholder="login" required>
							</div>

							<div class="form-group">
								<input type="password" class="form-control" name="senha" placeholder="senha" required>
							</div>

							<div class="form-group">
								<input type="submit" class="form-control" value="Entrar">
							</div>

							<table cellspacing="10">
								<tr>
									<td><a href="#">Voltar</a></td>
									<td><a href="#">Cadastre-se</a></td>
								</tr>
							</table>
						</div>

					</form>
					<div class="space-10"></div>
				</div>
			</div>
		</main>
	</body>
</html>