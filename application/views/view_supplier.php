<!-- Bread crumb -->
<div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Kelola Supplier</h3> </div>
    </div>
<!-- End Bread crumb -->
<!-- Container fluid -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Supplier <a href="<?php echo base_url();?>supplier/tambah_supplier">
                    <button type="button" class="btn btn-info">Tambah Supplier</button></a>
                    </h4>
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-script table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Supplier</th>
                                    <th>Telepon</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                            $n=1; foreach($supplier as $data)
                            {?>
                            <tbody>
                                <tr>
                                    <td><?php echo $n++ ?></td>
                                    <td><?php echo $data->nama ?></td>
                                    <td><?php echo $data->telepon ?></td>
                                    <td><?php echo $data->alamat ?></td>
                                    <td><a class="badge badge-info p-2" href="<?php echo base_url();?>supplier/edit_supplier/<?PHP echo $data->id_supplier ?>">
                                        <i class="fa fa-edit">Edit</i>
                                    </a>
                                    <!-- | -->
                                    <a class="badge badge-danger p-2" onclick="return hapus()" href="<?php echo base_url();?>supplier/hapus_supplier/<?PHP echo $data->id_supplier ?>">
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