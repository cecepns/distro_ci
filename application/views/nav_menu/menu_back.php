<?php
$level=$this->session->userdata('level');
if($level=="Admin")
{
?>
<ul id="sidebarnav">
    <li>
        <a href="<?php echo base_url()?>dashboard"><i class="fa fa-home"></i><span class="hide-menu">Dashboard</span></a>
    </li>
    <li>
        <a href="<?php echo base_url() ?>product/view_product" ><i class="fa fa-book"></i><span class="hide-menu">Kelola Produk</span></a>
    </li>
    <li>
        <a href="<?php echo base_url() ?>kelola_kategori/view_kategori" ><i class="fa fa-list"></i><span class="hide-menu">Kelola Kategori</span></a>
    </li>
    <li>
        <a href="<?php echo base_url() ?>supplier/view_supplier" ><i class="fa fa-list"></i><span class="hide-menu">Supplier</span></a>
    </li>
    <li>
        <!-- <a href="<?php echo base_url() ?>Gallery/view_gallery" ><i class="fa fa-image"></i><span class="hide-menu">Kelola Gallery</span></a> -->
    </li>
    <li>
        <a href="<?php echo base_url() ?>aboutme" ><i class="fa fa-info"></i><span class="hide-menu">Kelola Tentang Situs</span></a>
    </li>
    <li>
        <a href="<?php echo base_url() ?>login/logout">
        <i class="fa fa-power-off"></i><span class="hide-menu">Logout</span></a>
    </li>
</ul>
<?php }
?>

<!-- Member menu -->
<?php
$level=$this->session->userdata('level');
if($level=="Member")
{
?>
<ul id="sidebarnav">
    <li>
        <a href="<?php echo base_url()?>dashboard"><i class="fa fa-home"></i><span class="hide-menu">Dashboard</span></a>
    </li>
    <li>
        <a href="javascript:;"><i class="fa fa-home"></i><span class="hide-menu">Pesanan</span></a>
    </li>
    <li>
        <a href="<?php echo base_url() ?>login/logout">
        <i class="fa fa-power-off"></i><span class="hide-menu">Logout</span></a>
    </li>
</ul>
<?php }
?>