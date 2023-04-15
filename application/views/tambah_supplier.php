<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Kelola Supplier</h3>
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
                    <form action="<?php echo base_url(); ?>supplier/proses_tambah" method="POST">
                        <div class="form-body">
                            <h4 class="card-title m-t-15">Form Input Supplier</h4>
                            <hr>
                            <!-- /row -->
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label class="control-label">Nama Supplier</label>
                                        <input type="text" required class="form-control input-default" name="nama">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label class="control-label">Alamat Supplier</label>
                                        <input type="text" required class="form-control input-default" name="alamat">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label class="control-label">Nomor Telepon</label>
                                        <input type="text" required class="form-control input-default" name="telepon">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>Simpan</button>
                            <a href="<?php echo base_url(); ?>supplier/view_kategori">
                                <button type="button" class="btn btn-inverse">Batal</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
</div>