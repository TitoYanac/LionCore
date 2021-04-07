<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- BOOTSTRAP -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-between container">
			<a class="navbar-brand" href="#">LOGO</a>
		<form class="d-flex w-50">
			<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success" type="submit">Buscar</button>
		</form>

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sesion" aria-controls="sesion" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

		<div id="drop-header">
			<div class="collapse navbar-collapse" id="sesion">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">

					<li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Productos</a></li>
					<li class="nav-item"><a class="nav-link" href="#"><img src="https://img.icons8.com/material-rounded/24/ffffff/favorite-cart.png"/></a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="border: 2px white solid;color: white;">inicia sesión</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="#">Facebook</a></li>
							<li><a class="dropdown-item" href="#">Google</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="#">Crear Cuenta</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	</header>
	
