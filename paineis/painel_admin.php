<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<!-- se adaptar a tela de dispositivos automáticamente-->
	<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
	<!-- Essencial para buscadores, refereniar o site nas pesquisas -->
	<meta name="description" content="Portal  de Cursos Online">
	<meta name="author" content="Marco Aurélio Monteiro Lima">
	<meta name="keywords" content="cursos, cursos online, cursos de programação web, cursos de front-end">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/estilos-site.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos-padrao.css">
    <link rel="stylesheet" type="text/css" href="../css/cursos.css">
    <link rel="stylesheet" type="text/css" href="../css/painel.css">
    <link rel="stylesheet" type="text/css" href="../css/cards.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<title>Sua central de cursos</title>
</head>
<body id="page-top">

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a href="../index.php#page-top" class="navbar-brand js-scroll-trigger">
            <img src="../img/logo-qcursos.png" class="img-logo"><span class="texto-logo">Home</span>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
			arial-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle Navigation"><i class="fas fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-default"
                    aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="#">Sair</a>
                    <a class="dropdown-item" href="#">Painel dos Professores</a>
                    <a class="dropdown-item" href="#">Painel dos Alunos</a>
                    </div>
                </li>

                    <li class="nav-item avatar mt-1 mr-1">
                        <a class="nav-link p-0" href="#">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="rounded-circle z-depth-0"
                            alt="avatar image" height="35">
                        </a>

                </li>
                <li class="nav-item avatar mt-2">
                    <span class="text-muted nome_usuario">Marco Lima </span>
                    <li class="nav-item avatar">
                </ul>
            </div>
		</div>
    </nav>
    <!-- Sidebar -->
    <div class="container_admin">
    <div class="row">
    <div class="col-md-3 col-lg-2 col-sm-12">
        <div class="bg-light" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
                <span href="#" class="list-group-item ativo">Painél Administrativo</span>
                <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-user-friends mr-1"></i>Usuários</a>
                <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-book-reader mr-1"></i>Curso</a>
                <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-sitemap mr-1"></i>Categorias</a>
                <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-sitemap mr-1"></i>Desempenho</a>
                <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-sitemap mr-1"></i>Profile</a>
                <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-sitemap mr-1"></i>Status</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-9 col-lg-10 col-sm-12">
	<div class="content area_cards">
	        <div class="row">
                
	          <div class="col-lg-3 col-md-6 col-sm-6">
	            <div class="card card-stats">
	              <div class="card-body ">
	                <div class="row">
	                  <div class="col-5 col-md-4">
	                    <div class="icon-big text-center icon-warning">
	                      <i class="fas fa-globe"></i>
	                    </div>
	                  </div>
	                  <div class="col-7 col-md-8">
	                    <div class="numbers">
	                      <p class="card-category">Total de Alunos</p>
	                      <p class="card-title">55.000
	                        <p>
	                    </div>
	                  </div>
	                </div>
	              </div>
	              <div class="card-footer ">
	                <hr>
	                <div class="stats">
                     Total de alunos matriculados
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-lg-3 col-md-6 col-sm-6">
	            <div class="card card-stats">
	              <div class="card-body ">
	                <div class="row">
	                  <div class="col-5 col-md-4">
	                    <div class="icon-big text-center icon-warning">
	                      <i class="far fa-money-bill-alt text-success"></i>
	                    </div>
	                  </div>
	                  <div class="col-7 col-md-8">
	                    <div class="numbers">
	                      <p class="card-category">Saldo do dia</p>
	                      <p class="card-title">$ 680,00
	                        <p>
	                    </div>
	                  </div>
	                </div>
	              </div>
	              <div class="card-footer ">
	                <hr>
	                <div class="stats">
	                  Total arrecadado
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-lg-3 col-md-6 col-sm-6">
	            <div class="card card-stats">
	              <div class="card-body ">
	                <div class="row">
	                  <div class="col-5 col-md-4">
	                    <div class="icon-big text-center icon-warning">
                        <i class="fa fa-calendar text-info"></i>
	                    </div>
	                  </div>
	                  <div class="col-7 col-md-8">
	                    <div class="numbers">
	                      <p class="card-category">Matrículas no mês</p>
	                      <p class="card-title">233
	                        <p>
	                    </div>
	                  </div>
	                </div>
	              </div>
	              <div class="card-footer ">
	                <hr>
	                <div class="stats">
	                  <i class="fa fa-clock-o"></i> Total de matrículas no mês
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-lg-3 col-md-6 col-sm-6">
	            <div class="card card-stats">
	              <div class="card-body ">
	                <div class="row">
	                  <div class="col-5 col-md-4">
	                    <div class="icon-big text-center icon-warning">
	                      <i class="fas fa-users text-primary"></i>
	                    </div>
	                  </div>
	                  <div class="col-7 col-md-8">
	                    <div class="numbers">
	                      <p class="card-category">Professores</p>
	                      <p class="card-title">43
	                        <p>
	                    </div>
	                  </div>
	                </div>
	              </div>
	              <div class="card-footer ">
	                <hr>
	                <div class="stats">
	                  <i class="fa fa-refresh"></i> Total de professores
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
            </div> 
        </div>   
</div>

