<!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Kelola Produk</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Kelola Produk</a></li>
                <li class="breadcrumb-item active">View Produk</li>
            </ol>
        </div>
    </div>
<!-- End Bread crumb -->
<!-- Container fluid -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-between">
                        <h4 class="card-title">Data Produk 
                            <a href="<?php echo base_url();?>product/tambah_product">
                                <button type="button" class="btn btn-info">Tambah Produk</button>
                            </a>
                    </div>
                    </h4>
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-script table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Img</th>
                                    <th>Nama product</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Isi product</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                            $n=1; foreach($product as $data)
                            {?>
                            <tbody>
                                <tr>
                                    <td><?php echo $n++ ?></td>
                                    <td><?php
                                            echo'<img width="50" src="' . base_url().'uploads/product/' . $data->img_product . '">';
                                        ?>
                                    </td>
                                    <td><?php echo $data->name_product ?></td>
                                    <td><span class="badge badge-success"><?php echo $data->nama_kategori ?></span></td>
                                    <td><?php echo $data->price ?></td>
                                    <td><?php echo $data->desc_product ?></td>
                                    <td>
                                        <a class="badge badge-info p-2" href="<?php echo base_url();?>product/edit_product/<?PHP echo $data->id_product ?>">
                                            <i class="fa fa-edit">Edit</i>
                                        </a>
                                        |
                                        <a class="badge badge-danger p-2" onclick="return hapus()" href="<?php echo base_url();?>product/hapus_product/<?PHP echo $data->id_product ?>">
                                            <i class="fa fa-trash">Hapus</i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                           <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Content -->
</div>
<!-- End Container fluid -->