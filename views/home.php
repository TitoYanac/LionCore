<?php include 'header.php'; ?>

<?php include '../models/productos.php'; ?>
<section class="container">
	<div class="row">
		<div class="col-xl-8">
			<h1>PC COMPLETA</h1>
			<img src="../assets/img/img1.png" alt="">
		</div>
		<div class="col-xl-4">
			<div class="row h-100">
			<h1>OFERTAS</h1>
				<div class="col-6 col-lg-12 align-self-start"><img src="../assets/img/img2.png" alt=""></div>
				<div class="col-6 col-lg-12 align-self-end"><img src="../assets/img/img3.png" alt=""></div>
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

	<section class="row">
<?php foreach ($productos as $key => $value) { ?>
		<article class="col-6 col-lg-4 col-xl-3 mb-3">
			<figure class="col-12 h-100" style="border: 2px #198754 solid; padding: 15px;">
				<img src="../assets/img/celular.jpg" alt="Card image cap">
				<figcaption class="col-12">
					<h5><?php echo $value->titulo; ?></h5>
					<p class="mb-1">Descripcion.</p>
					<p class="mb-1">Descripcion.</p>
					<p class="mb-1">Descripcion.</p>
					<p class="mb-1">Precio: S/.<?php echo $value->precio; ?></p>
					<a href="#" class="btn btn-success">Comprar</a>
				</figcaption>
			</figure>
		</article>
<?php } ?>
	</section>

</section>

<?php include 'footer.php'; ?>
