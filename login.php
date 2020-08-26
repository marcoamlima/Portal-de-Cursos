<!DOCTYPE html>
<html>
<head>
	<title>Front-End Portal</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilosLogin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<body>

	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="card_login">
				<div class="d-flex justify-content-center">
					<div class="area_logo">
						<a href="index.php"><img src="img/logo.png" width="150px" class="logo_circular"></a> 
					</div>
				</div>

				<div class="d-flex justify-content-center form_login">
					<form>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text glyphicon glyphicon-user"><i class="far fa-user"></i></span>
							</div>
							<input type="text" name="" class="form-control input_usuario" placeholder="Usuário">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="far fa-key"></i></span>
							</div>
							<input type="password" name="" class="form-control input_usuario" placeholder="Senha">
						</div>
						<div class="input-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" name="" class="custom-control-input" id="customComtrolInline" placeholder="Senha">
								<label class="custom-control-label" for="customComtrolInline">Lembrar-me</label>
							</div>
						</div>
					</form>

				</div>
				<div class="d-flex justify-content-center mt-3 area_botao">
					<button name="button" class="btn btn_login">Login</button>
				</div>

				<div class="mb-4 area_links">
					<div class="d-flex justify-content-center mt-3 links">
						Não possui cadastro?<a href="#" class="ml-2">Cadastrar</a>
					</div>
					<div class="d-flex justify-content-center mt-3 links">
						<a href="#" class="ml-2">Recuperar senha</a>
					</div>
				</div>

			</div>
		</div>
	</div>

</body>
</html>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>