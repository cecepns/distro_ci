<!-- Bread crumb -->
<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-primary">Dashboard</h3>
	</div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid h-100">
	<!-- Start Page Content -->
	<?php
		$level=$this->session->userdata('level');
			if($level=="Admin")
		{
	?>
	<div class="row">
		<div class="col-md-3">
			<div class="card bg-primary p-20">
				<div class="media widget-ten">
					<div class="media-left meida media-middle">
						<span><i class="ti-bag f-s-40"></i></span>
					</div>
					<div class="media-body media-text-right">
						<h2 class="color-white"><?php echo $total_product ?></h2>
						<p class="m-b-0">Total Produk</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card bg-pink p-20">
				<div class="media widget-ten">
					<div class="media-left meida media-middle">
						<span><i class="ti-comment f-s-40"></i></span>
					</div>
					<div class="media-body media-text-right">
						<h2 class="color-white"><?php echo $total_category ?></h2>
						<p class="m-b-0">Total Kategori</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card bg-success p-20">
				<div class="media widget-ten">
					<div class="media-left meida media-middle">
						<span><i class="ti-user f-s-40"></i></span>
					</div>
					<div class="media-body media-text-right">
						<h2 class="color-white"><?php echo $total_users ?></h2>
						<p class="m-b-0">Total User</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php }
?>


	<?php
		$level=$this->session->userdata('level');
			if($level=="Member")
		{
	?>
	<div class="row">
		<div class="col-md-3">
			<div class="card bg-primary p-20">
				<div class="media widget-ten">
					<div class="media-left meida media-middle">
						<span><i class="ti-bag f-s-40"></i></span>
					</div>
					<div class="media-body media-text-right">
						<h2 class="color-white">0</h2>
						<p class="m-b-0">Total Pesanan</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php }
?>
	<!-- End PAge Content -->
</div>
<!-- End Container fluid  -->
<!-- footer -->
<footer class="footer"> © 2023 Distro Store
</footer>
<!-- End footer -->
