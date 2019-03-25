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

							<div class="form-group">
								<input type="text" class="form-control" name="login" placeholder="login" required>
							</div>

							<div class="form-group">
								<input type="password" class="form-control" name="senha" placeholder="senha" required>
							</div>

							<?php if ($_GET['erro']): ?>
								<div class="form-group">
									<span style="color: red; font-size: 0.9rem; text-align: center;">Usuário ou senha incorreto !!</span>
								</div>
							<?php endif;?>

							<div class="form-group">
								<input type="submit" class="form-control" value="Entrar">
							</div>
							<br>
							<a href="/usuario/cadastrar">Cadastre-se</a>

						</div>
					</form>
				</div>
			</div>
		</main>
	</body>
</html>