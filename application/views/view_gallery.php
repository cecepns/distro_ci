<!-- Bread crumb -->
<div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Kelola Gallery</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Kelola Gallery</a></li>
                <li class="breadcrumb-item active">View Gallery</li>
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
                        <h4 class="card-title">Data Gallery 
                            <a href="<?php echo base_url();?>gallery/tambah_gallery">
                                <button type="button" class="btn btn-info">Tambah Gallery</button>
                            </a>
                    </div>
                    </h4>
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-script table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                            $n=1; foreach($gallery as $data)
                            {?>
                            <tbody>
                                <tr>
                                    <td><?php echo $n++ ?></td>
                                    <td><?php
                                            echo'<img width="50" src="' . base_url().'uploads/product/' . $data->img_gallery . '">';
                                        ?>
                                    </td>
                                    <td>
                                        <a class="badge badge-info p-2" href="<?php echo base_url();?>gallery/edit_gallery/<?PHP echo $data->id_gallery ?>">
                                            <i class="fa fa-edit">Edit</i>
                                        </a>
                                        |
                                        <a class="badge badge-danger p-2" onclick="return hapus()" href="<?php echo base_url();?>gallery/hapus_gallery/<?PHP echo $data->id_gallery ?>">
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