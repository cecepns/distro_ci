<!-- Bread crumb -->
<div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Tentang Kami</h3> </div>
    </div>
<!-- End Bread crumb -->
<!-- Container fluid -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- <a href="<?php echo base_url();?>edit/view_edit">
                        <button type="button" class="btn btn-primary">Edit</button>
                    </a> -->
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-script table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tentang Kami</th>
                                    <th>Alamat</th>
                                    <th>Nomor Telepon</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                                $n=1; foreach($about as $data)
                            {?>
                            <tbody>
                                <tr>
                                    <td><?php echo $n++ ?></td>
                                    <td><?php echo $data->about ?></td>
                                    <td><?php echo $data->address ?></td>
                                    <td><?php echo $data->phone ?></td>
                                    <td>
                                        <a class="badge badge-info p-2" href="<?php echo base_url();?>aboutme/view_edit/<?PHP echo $data->id ?>">
                                            <i class="fa fa-edit">Edit</i>
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