<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Kelola product</h3>
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
                    <form action="<?php echo base_url(); ?>product/proses_edit/<?PHP echo $this->uri->segment('3')?>" method="POST" enctype="multipart/form-data">
                        <!-- <?php if (isset($error)) : ?> -->
                            <div class="d-block text-red"><?= $error ?></div>
                        <!-- <?php endif; ?> -->    
                        <div class="form-body">
                            <h4 class="card-title m-t-15">Form Edit product</h4>
                            <hr>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label class="control-label pr-3">Gambar Sekarang</label>
                                        <?php
                                            echo'<img width="50" src="' . base_url().'uploads/product/' . $product->img_product . '">';
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label class="control-label">Gambar Baru</label>
                                        <input type="file" id="img_product" require class="form-control input-default" name="img_product">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label class="control-label">Nama product</label>
                                        <input type="text" id="firstName" require class="form-control input-default" name="name_product" value="<?php echo $product->name_product ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label class="control-label">Harga</label>
                                        <input id="nominal" type="text" required class="form-control input-default" name="price" value="<?php echo $product->price ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                        <div class="form-grouphas-success">
                                            <label class="control-label">Kategori Produk</label>
                                            <select class="form-control" name="category" required>
                                                <?php foreach ($kategori as $row) { ?>
                                                    <option <?php if($row->id_kategori == $product->id_category){ echo 'selected="selected"'; } ?> value="<?php echo $row->id_kategori ?>"><?php echo $row->nama_kategori?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                </div>
                            </div>
                            <!-- /row -->
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label class="control-label">Isi product</label>
                                        <textarea class="textarea_editor form-control" rows="15" placeholder="Enter text ..." style="height: 300px;" name="desc_product"><?php echo $product->desc_product ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>Update</button>
                            <a href="<?php echo base_url(); ?>product/view_product">
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
