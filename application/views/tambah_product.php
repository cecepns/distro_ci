<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Kelola produk</h3>
    </div>
    <div class="col-md-7 align-selft-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Kelola produk</a></li>
            <li class="breadcrumb-item active">Tambah produk</li>
        </ol>
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
                    <form action="<?php echo base_url(); ?>product/proses_tambah_produk" method="POST" enctype="multipart/form-data">
                        <!-- <?php if (isset($error)) : ?> -->
                            <div class="d-block text-red"><?= $error ?></div>
                        <!-- <?php endif; ?> -->
                        <div class="form-body">
                            <h4 class="card-title m-t-15">Form Input produk</h4>
                            <hr>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label class="control-label">Gambar Produk</label>
                                        <input type="file" name="img_product" required class="form-control input-default">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label class="control-label">Nama Produk</label>
                                        <input type="text" required class="form-control input-default" name="name_product">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label class="control-label">Harga</label>
                                        <input id="nominal" type="text" required class="form-control input-default" name="price">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label class="control-label">Kategori Produk</label>
                                        <select class="form-control" name="category" required>
                                            <option value="">No Selected</option>
                                            <?php foreach($kategori as $row):?>
                                                <option value="<?php echo $row->id_kategori;?>"><?php echo $row->nama_kategori;?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /row -->
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label class="control-label">Deskripsi Produk</label>
                                        <textarea class="textarea_editor form-control" rows="15" placeholder="Enter text ..." style="height: 300px;" name="desc_product"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>Simpan</button>
                            <a href="<?php echo base_url(); ?>/product/view_product">
                                <button type="button" class="btn btn-inverse">Batal</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
</div>

