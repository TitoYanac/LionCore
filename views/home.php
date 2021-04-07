<?php include 'header.php'; ?>

<?php include '../models/productos.php'; ?>
<section class="container">
	<div class="row">
		<div class="col-md-8">
			<h1>PC COMPLETA</h1>
		</div>
		<div class="col-md-4">
			<h1>OFERTAS</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<img src="../assets/img/img1.png" alt="">
		</div>
		<div class="col-md-4">
			<div class="row h-100">
				<div class="align-self-start"><img src="../assets/img/img2.png" alt=""></div>
				<div class="align-self-end"><img src="../assets/img/img3.png" alt=""></div>
			</div>
		</div>
	</div>
</section>

<section class="container">
	<div class="row">
		<h1>PRODUCTOS</h1>
		<p class="align-self-start">Los mejores precios solo los encontraras en Lion Core.</p>
		<p class="align-self-start">
			Categorias 
			<button id="btn_categorias" style="width: 40px; padding: 0">
				<img src="../assets/img/icon_categorias.jpg" alt="btn_categorias.jpg">
			</button>
		</p>
		
	</div>

	<div class="card-group row">
<?php foreach ($productos as $key => $value) { ?>
		<div class="card" style="min-width: 25%;max-width: 33.3%; margin: 15px;">
			<img class="card-img-top" src="../assets/img/celular.jpg" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title"><?php echo $value->titulo; ?></h5>
				<p class="card-text">Descripcion.</p>
				<p class="card-text">Descripcion.</p>
				<a href="#" class="btn btn-success">Comprar</a>
			</div>
		</div>
<?php } ?>
	</div>

</section>

<?php include 'footer.php'; ?>
