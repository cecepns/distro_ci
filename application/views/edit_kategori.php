<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Kelola Kategori</h3>
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
                    <form action="<?php echo base_url(); ?>kelola_kategori/proses_edit/<?PHP echo $this->uri->segment('3')?>" method="POST">
                        <div class="form-body">
                            <h4 class="card-title m-t-15">Form Edit Kategori</h4>
                            <hr>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label class="control-label">Nama Kategori</label>
                                        <input type="text" class="form-control" rows="15" name="nama_kategori" value="<?php echo $kategori->nama_kategori ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>Update</button>
                            <a href="<?php echo base_url(); ?>kelola_kategori/view_kategori">
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