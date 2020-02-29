

	<body class="slider-collapse">
		
		<div id="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-text">
							<h1 class="site-title">PoliGame</h1>
							<small class="site-description">Polinema Bergame</small>
						</div>
					</a> <!-- #branding -->
					<?php 
						$keranjang = ' <i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i> ' .$this->cart->total_items().
						'items'
					?>
					<?php echo anchor('Home/ditambah', $keranjang)  ?>
					
				</div> <!-- .container -->
			</div> <!-- .site-header -->


			<main class="main-content">
				<div class="container">
					<div class="page">
					<section>
							<header>
								<h2 class="section-title">promotion</h2>
								<a href="#" class="all">Show All</a>
							</header>

							<div class="product-list">
							<?php foreach($game as $gm):?>
								<div class="product">
									
									<div class="inner-product">
										<div class="figure-image">
											<!-- gambar -->
											<img src=<?php echo base_url().'/image/' .$gm->gambar?> >
										</div>
										<h3 class="product-title"><?php echo $gm->nama_game ?></h3>
										<small class="price">Rp.<?php echo number_format($gm->harga, 0,',','.') ?></small>
										<p><?php echo $gm->deskripsi ?></p>
										<?php echo anchor('Home/ditambah/'.$gm->id_game, '<div class="btn btn-primary">Beli</div>')?>
										

									</div>
								</div> <!-- .product -->
								<?php endforeach; ?>

						</section>
						
					</form>
				</div> <!-- .column -->
			</div> <!-- .row -->
		</div> <!-- .auth-popup -->

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>