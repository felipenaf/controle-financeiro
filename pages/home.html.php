<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="style/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="style/css/style.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
		<title>HOME</title>
	</head>

	<body>

		<header>
			<div class="container" style="background-color: lightblue;">MENU</div>
		</header>
		<main>
			<div class="container" style="background-color: lightgray;">
				<div class="col-md-5">
					<div class="p-2"></div>
					<form action="#" method="GET">
						<div class="form-group">
							<label for="descricao">Descrição</label>
							<input type="text" class="form-control" id="descricao" name="descricao" aria-describedby="descricao" placeholder="ex. Almoço, chocolate, etc...">
						</div>

						<div class="form-group w-50">
							<label for="data">Data</label>
							<input type="date" class="form-control" id="data" name="data" aria-describedby="data">
						</div>

						<div class="form-group">
							<label for="grupo">Grupo</label>
							<div class="input-group mb-3">
								<select class="custom-select" id="grupo" name="grupo">
									<option selected>Escolha...</option>
									<option value="uninove">Uninove</option>
									<option value="aml">Aml</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="valor">Valor</label>
							<input type="number" class="form-control" id="valor" name="valor" aria-describedby="valor" step=0.01>
						</div>

						<div class="form-group">
							<label for="observacao">Observação</label>
							<textarea type="text" class="form-control" id="observacao" name="observacao" aria-describedby="observacao"></textarea>
						</div>

						<div class="form-group">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<label class="input-group-text" for="tipo">Tipo</label>
								</div>
								<select class="custom-select" id="tipo" name="tipo">
									<option selected>Escolha...</option>
									<option value="1">Entrada</option>
									<option value="0">Saída</option>
								</select>
							</div>
						</div>
						<button class="btn btn-outline-primary" type="submit" value="salvar">Salvar</button>
						<div class="p-2"></div>
					</form>
				</div>
			</div>
		</main>
		<footer>
			<div class="container bg-info" style="background-color:;">FOOTER</div>
		</footer>

	</body>
</html>