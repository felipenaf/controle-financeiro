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
							<p>Cadastrar Usuário</p>

							<?php if ($_GET['erro'] == 2): ?>
								<div class="form-group">
									<span style="color: red; font-size: 0.9rem; text-align: center;">Login já existente !!</span>
								</div>
							<?php endif;?>

							<div class="form-group">
								<input type="text" class="form-control" name="nome" placeholder="Nome" required>
							</div>


							<div class="form-group">
								<input type="text" class="form-control" name="login" placeholder="login" required>
							</div>

							<div class="form-group">
								<input type="password" class="form-control" name="senha" placeholder="senha" required>
							</div>

							<div class="form-group">
								<input type="submit" class="form-control" value="Cadastrar">
							</div>
							<br>
							<a href="/">Voltar</a>

						</div>
					</form>
				</div>
			</div>
		</main>
	</body>
</html>