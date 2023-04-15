<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Kelola gallery</h3>
    </div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-body">
                    <form action="<?php echo base_url(); ?>gallery/proses_edit/<?PHP echo $this->uri->segment('3')?>" method="POST" enctype="multipart/form-data">
                        <!-- <?php if (isset($error)) : ?> -->
                            <div class="d-block text-red"><?= $error ?></div>
                        <!-- <?php endif; ?> -->    
                        <div class="form-body">
                            <h4 class="card-title m-t-15">Form Edit gallery</h4>
                            <hr>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label class="control-label pr-3">Gambar Sekarang</label>
                                        <?php
                                            echo'<img width="50" src="' . base_url().'uploads/product/' . $gallery->img_gallery . '">';
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label class="control-label">Gambar Baru</label>
                                        <input type="file" id="img_gallery" require class="form-control input-default" name="img_gallery">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>Update</button>
                            <a href="<?php echo base_url(); ?>gallery/view_gallery">
                                <button type="button" class="btn btn-inverse">Batal</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
</div>
<!-- End Container fluid -->
