<?php include "conecta.php" ?> <!-- Importa conexão php -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/compiler/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="node_modules/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/compiler/style.css">
	<title>EMakers</title>
</head>
<body>

<!--       ############## NAVBAR ############### 		-->

	<nav class="navbar navbar-expand-lg navbar-dark bg_gradient_roxo">

		<a class="collapse navbar-collapse" id="navbarImg" href="index.html"><img  src="img/completa_branca_preta.png" height="40em"></a>

		<div class="container">

			<a class="navbar-brand h1 mb-0" href="index.html"> Home </a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite,#navbarImg">

				<span class="navbar-toggler-icon"></span>	

			</button>

			<div class="collapse navbar-collapse" id="navbarSite">

				<ul class="navbar-nav mr-auto">

					<li class="nav-item mr-2">
						<a class="nav-link" href="blog.html">Blog</a>
					</li>

					<li class="nav-item mr-2">
						<a class="nav-link" href="index.html#servicos">Serviços</a>
					</li>


					<!--<li class="nav-item dropdown mr-2">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Cursos</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">Eletrônica</a>
							<a class="dropdown-item" href="#">Desenvolvimento Mobile</a>
							<a class="dropdown-item" href="#">Linguagens</a>
							<a class="dropdown-item" href="#">Ferramentas</a>
						</div>
					</li>-->
					<li class="nav-item mr-2">
						<a class="nav-link" href="#">Equipe</a>
					</li>
					<li class="nav-item mr-2">
						<a class="nav-link" href="contato.html">Contato</a>
					</li>
				</ul>

				<ul class="navbar-nav ml-auto">
					<form class="form-inline">
						<input type="search" class="form-control mr-2" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Pesquisar...">
						<button class="btn btn-light" type="Submit"> 	<img src="img/lupa.svg" height="15rem">
						</button>
					</form>
				</ul>
			</div>
		</div>
	</nav>


<!--       ############## INICIO CONTEUDO ############### 		-->
<!-- <img class="img-fluid" src="img/bg_tools.png"> -->
	<div class="d-block" style="background-image: url('img/bg-tools.jpg'); background-repeat: no-repeat;
    background-size: 100%;">
		<div class="container" >
			
			<div class="row">
				
				<div class="col-12 text-center mt-5 mb-5">
					
					<h1 class="display-1 roxo">EMakers</h1>
					<p>Este é o primeiro website do núcleo de estudos em Sistemas Embarcados, <i>Internet das coisas</i> e Otimização. </p>

				</div>

			</div>



<!-- #################### CARDS #################### -->

	<div class="bg_roxo text-center box_generic">
		<br> <br>
		<div class="mb-5">

			<h1 class="display-3 text-light ">Quem somos?</h1>

			<p class="lead text-light"> Professores, alunos e contribuintes!</p>	

		</div>		

<!-- PROFESSORES -->
	
		<div class="mb-5">
			
			<h3 class="text-light display-4">  <i class="fa fa-graduation-cap" aria-hidden="true"></i> Professores e Técnicos</h3>

		</div>

		<!--Le o banco de dados -->
		<?php
		$querySelecao = "Select nome, atuacao from equipe";
		$resultado = mysqli_query($con, $querySelecao); 
		while($row = mysqli_fetch_assoc($resultado)) {
			if($row["atuacao"] == "Coordenador" || $row["atuacao"] == "Professor" || $row["atuacao"] == "Técnico") { ?>

				<div class="row my-4 mb-5 justify-content-center">
						
					<div class="col-lg-3 col-md-4 col-sm-6">
						
						<div class="card ml-4">
							
							<div class="mx-2 mt-4">
							
								<i class="fa fa-user-circle fa-5x" aria-hidden="true"></i>
							
							</div>
							
							<div class="card-body">

								<h4 class="card-title"> <?php echo $row["nome"]; ?> </h4>
								
								<h6 class="subtitle text-muted"> <?php echo $row["atuacao"]; ?> </h6>
								
								<div class="mt-4">

									<a href="#" class="text-dark"><i class="fa fa-linkedin-square fa-4x" aria-hidden="true"></i></a>	

								</div>

							</div>

						</div>

					</div>

				</div>
		<?php 
			}
		}?>
<!-- ALUNOS -->

		<div class="mb-5">
			
			<h3 class="text-light display-4 mt-5"> <i class="fa fa-users" aria-hidden="true"></i>  Alunos </h3>

		</div>

		<?php
		$querySelecao = "Select nome, atuacao from equipe";
		$resultado = mysqli_query($con, $querySelecao); 
		while($row = mysqli_fetch_assoc($resultado)) {
			if($row["atuacao"] != "Coordenador" && $row["atuacao"] != "Professor" && $row["atuacao"] != "Técnico") { ?>

				<div class="row my-4 mb-5 justify-content-center">

					<div class="col-lg-3 col-md-4 col-sm-6">
						
						<div class="card mr-lg-3 mr-md-2 mr-sm-4 ml-lg-2 ml-md-3 ml-sm-0 mb-5">
							
							<div class="mx-2 mt-4">
							
								<i class="fa fa-user-circle fa-5x" aria-hidden="true"></i>
							
							</div>

							<div class="card-body">

								<h4 class="card-title"> <?php echo $row["nome"]; ?> </h4>
								
								<h6 class="subtitle text-muted"> <?php echo $row["atuacao"]; ?> </h6>
								
								<div class="mt-4">

									<a href="#" class="text-dark"><i class="fa fa-linkedin-square fa-4x" aria-hidden="true"></i></a>	

								</div>

							</div>

						</div>

					</div>

				</div>
		<?php 
			}
		}?>
		
	</div>
	

<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>