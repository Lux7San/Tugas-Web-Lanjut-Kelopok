


	<body>
		
		<div id="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-text">
							<h1 class="site-title">Company name</h1>
							<small class="site-description">Tagline goes here</small>
						</div>
					</a> <!-- #branding -->

					<div class="right-section pull-right">
						<a href="cart.html" class="cart"><i class="icon-cart"></i> 0 items in cart</a>
						<a href="#">My Account</a>
						<a href="#">Logout <small>(John Smith)</small></a>
					</div> <!-- .right-section -->

					<div class="container-fluid">
   <h4>Keranjang Belanja</h4>
   <table class="table table-bordered table-striped table-hover">
       <tr>
           <th>No</th>
           <th>Nama Produk</th>
           <th>jumlah</th>
           <th>Harga</th>
           <th>Sub Total</th>
       </tr>
       <?php 
           $no=1;
           foreach ($this->cart->contents() as $items):
       ?>
           <tr>
               <td><?php echo $no++ ?></td>
               <td><?php echo $items['nama'] ?></td>
               <td><?php echo $items['harga'] ?></td>
               <td align="left">Rp. <?php echo number_format($items['price'], 0,',','.') ?></td>
               <td align="left">Rp. <?php echo number_format($items['subtotal'], 0,',','.')?></td>
           </tr>
       <?php 
           endforeach;
       ?>
       <tr>
           <td colspan="4"></td>
           <td align="right">Rp. <?php  echo number_format($this->cart->total(), 0,',','.')?></td>
       </tr>
   </table>

   <div align="right">
       <a href="<?php echo base_url('Admin/hapus_keranjang') ?>">
           <div class="btn btn-sm btn-danger">Hapus Cart</div>
       </a>
       <a href="<?php echo base_url('Admin/index') ?>">
           <div class="btn btn-sm btn-primary">Lanjut Belanja</div>
       </a>
       <a href="<?php echo base_url('Admin/pembayaran') ?>">
           <div class="btn btn-sm btn-success">Checkout</div>
       </a>
      
   </div>
</div>
	</body>