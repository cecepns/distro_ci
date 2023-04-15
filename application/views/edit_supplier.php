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
                    <form action="<?php echo base_url(); ?>supplier/proses_edit/<?PHP echo $this->uri->segment('3')?>" method="POST">
                        <div class="form-body">
                            <h4 class="card-title m-t-15">Form Edit Supplier</h4>
                            <hr>
                            <!-- <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label class="control-label">Nama Kategori</label>
                                        <input type="text" class="form-control" rows="15" name="nama_kategori" value="<?php echo $kategori->nama_kategori ?>">
                                    </div>
                                </div>
                            </div> -->
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label class="control-label">Nama Supplier</label>
                                        <input type="text" required class="form-control input-default" name="nama" value="<?php echo $supplier->nama ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label class="control-label">Alamat Supplier</label>
                                        <input type="text" required class="form-control input-default" name="alamat" value="<?php echo $supplier->alamat ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label class="control-label">Nomor Telepon</label>
                                        <input type="text" required class="form-control input-default" name="telepon" value="<?php echo $supplier->telepon ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>Update</button>
                            <a href="<?php echo base_url(); ?>supplier/view_supplier">
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