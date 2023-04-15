<!-- WRAPPER UNTUK MAIN CONTENT -->
<div class="main-content">
    <div class="container">

        <!-- END WRAPPER HERO BANNER -->

        <!-- WRAPPER UNTUK ITEM PRODUK -->
        <div class="list-product">

            <!-- WRAPPER HEADER POPULER PRODUK -->
            <div class="wrapper-header">
                <h1>Gallery Cepi Store</h1>
                <svg width="49" height="9" viewBox="0 0 49 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="6" y1="1" x2="31" y2="0.999998" stroke="#FF2D55" stroke-width="2"
                        stroke-linecap="round" />
                    <line x1="39" y1="1" x2="48" y2="1" stroke="#FF2D55" stroke-width="2"
                        stroke-linecap="round" />
                    <line x1="1" y1="8" x2="37" y2="8" stroke="#FF2D55" stroke-width="2"
                        stroke-linecap="round" />
                </svg>
            </div>

            <div class="row pb-5">
                <div class="col-md-12">
                    <?php echo $about->about ?>
                </div>
            </div>

            <div class="row grid">
 				<?php foreach ($gallery as $item):?>
 				<div class="col-md-4 mb-3 grid-item">
                     <div class="card p-3" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo base_url('uploads/product/'.$item->img_gallery); ?>" alt="Card image cap">
                    </div>
 				</div>
 				<?php endforeach; ?>
 			</div>
            <!-- END WRAPPER HEADER GALLERY -->
        </div>
        <!-- END WRAPPER ITEM GALLERY -->
    </div>
</div>
<!-- END WRAPPER UNTUK MAIN CONTENT -->
