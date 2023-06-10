 <!-- WRAPPER UNTUK MAIN CONTENT -->

 <!-- END WRAPPER MENU HEADER -->
 <div class="wrapper-video">

 	<!-- WRAPPER HEADER POPULER PRODUK -->
 	<div class="wrapper-header">
 		<h1>Video Produk</h1>
 		<svg width="49" height="9" viewBox="0 0 49 9" fill="none" xmlns="http://www.w3.org/2000/svg">
 			<line x1="6" y1="1" x2="31" y2="0.999998" stroke="#FF2D55" stroke-width="2" stroke-linecap="round" />
 			<line x1="39" y1="1" x2="48" y2="1" stroke="#FF2D55" stroke-width="2" stroke-linecap="round" />
 			<line x1="1" y1="8" x2="37" y2="8" stroke="#FF2D55" stroke-width="2" stroke-linecap="round" />
 		</svg>
 	</div>
 	<!-- END WRAPPER HEADER PRODUK -->

 	<!-- START VIDEO WRAPPER -->
 	<div class="video-wrapper">
 		<div class="row">
 			<div class="col-md-4">
 				<div class="video">
 					<video width="320" height="180" controls autoplay>
 						<source src="<?php echo base_url() ?>assets/video/videoplayback.mp4" type="video/mp4">
 						Your browser does not support HTML video.
 					</video>
 					<div class="wrapper-audio">
 						<audio controls>
 							<source src="<?php echo base_url() ?>assets/mp3/music.mp3" type="audio/mpeg">
 							Your browser does not support the audio element.
 						</audio>
 					</div>
 				</div>
 			</div>
 			<div class="col-md-8">
 				<div class="backpack">
 					<img src="<?php echo base_url() ?>assets/images/product/backpack.jpg" alt="backpack">
 				</div>
 			</div>
 		</div>
 	</div>
 	<!-- END START VIDEO WRAPPER -->

 </div>
 <!-- WRAPPER UNTUK ITEM PRODUK -->
 <div class="list-product">

 	<!-- WRAPPER HEADER POPULER PRODUK -->
 	<div class="row">
 		<div class="col-md-12">
 			<div class="wrapper-header">
 				<h1>Paling Populer</h1>
 				<svg width="49" height="9" viewBox="0 0 49 9" fill="none" xmlns="http://www.w3.org/2000/svg">
 					<line x1="6" y1="1" x2="31" y2="0.999998" stroke="#FF2D55" stroke-width="2"
 						stroke-linecap="round" />
 					<line x1="39" y1="1" x2="48" y2="1" stroke="#FF2D55" stroke-width="2" stroke-linecap="round" />
 					<line x1="1" y1="8" x2="37" y2="8" stroke="#FF2D55" stroke-width="2" stroke-linecap="round" />
 				</svg>
 			</div>
 		</div>
 	</div>
 	<!-- END WRAPPER HEADER PRODUK -->

	<div class="row">
		<div class="col-md-3 mb-3">
			<div class="form-group">
				<select class="form-control" id="filter-portfolio" onchange="filterPortfolio('onchange')">
					<option value="*">Show All</option>
					<?php foreach($kategori as $row):?>
						<option value=".<?php echo $row->nama_kategori;?>"><?php echo $row->nama_kategori;?></option>
					<?php endforeach;?>
				</select>
			</div>
		</div>
	</div>
 	<div class="row">
		
 		<div class="col-md-12">

 			<!-- WRAPPER LIST PRODUK -->
 			<div class="row grid">
 				<?php foreach ($product as $item):?>
 				<div class="col-md-4 mb-3 grid-item <?php echo $item->nama_kategori ?>">
 					<!-- LIST PRODUK -->
 					<div class="item-product">
						<div class="image">
							<img src="<?php echo base_url('uploads/product/'.$item->img_product); ?>"
								alt="product-image">
						</div>
						<span class="badge btn-primary mt-2"><?php echo $item->nama_kategori ?></span>
						<div class="description-product">
							<h3 class="title-product">
								<?php echo $item->name_product ?>
							</h3>
							<span class="description">
								<?php echo $item->desc_product ?>
							</span>
							<!-- <div class="rating">
								<span>5/4</span>
								<img src="<?php echo base_url() ?>assets/images/icon/icon-star.png" alt="star">
							</div> -->
						</div>
						<div class="wrapper-order">
							<span class="price">
								Rp <?php echo $item->price ?>
							</span>
							<!-- <a href="javasript:;"
								class="btn btn-product">
								Beli sekarang
							</a> -->
							<a href="<?php echo base_url();?>frontend/detail_product/<?PHP echo $item->id_product ?>"
								class="btn btn-product">
								Lihat detail produk
							</a>
						</div>
 					</div>
 					<!-- END LIST PRODUK -->
 				</div>
 				<?php endforeach; ?>
 			</div>

 		</div>
 		<!-- <div class="col-md-4">
 			<?php echo $about->about ?>
 		</div> -->
 	</div>
 </div>
 <!-- END WRAPPER ITEM PRODUK -->




 <script>

	let elem = document.querySelector('.grid');
	let iso = new Isotope( elem, {
		itemSelector: '.grid-item',
		layoutMode: 'fitRows'
	});

	function filterPortfolio(filterName) {

		if(filterName === 'onchange') {
			const selectOption = document.getElementById('filter-portfolio').value;
			filterName = selectOption;
		};


		iso.arrange({
			filter: filterName
		});
		
	}

 </script>
