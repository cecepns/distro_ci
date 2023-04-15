<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Kelola Tentang Situs</h3>
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
                    <form action="<?php echo base_url(); ?>aboutme/proses_edit/<?PHP echo $this->uri->segment('3')?>" method="POST">
                        <div class="form-body">
                            <h4 class="card-title m-t-15">Form Edit Kategori</h4>
                            <hr>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label class="control-label">Alamat</label>
                                        <input type="text" id="firstName" require class="form-control input-default" name="address" value="<?php echo $about->address ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label class="control-label">Nomor Telepon</label>
                                        <input type="text" id="firstName" require class="form-control input-default" name="phone" value="<?php echo $about->phone ?>">
                                    </div>
                                </div>
                            </div>
                            <!-- /row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label class="control-label">Tentang Kami</label>
                                        <textarea class="textarea_editor form-control" rows="15" placeholder="Enter text ..." style="height: 300px;" name="about"><?php echo $about->about ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>Update</button>
                            <a href="<?php echo base_url(); ?>aboutme">
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