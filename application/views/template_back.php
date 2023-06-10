<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/back/images/favicon.png">
	<title>Distro</title>

	<link href="<?php echo base_url() ?>assets/back/css/lib/chartist/chartist.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/back/css/lib/owl.carousel.min.css" rel="stylesheet" />
	<link href="<?php echo base_url() ?>assets/back/css/lib/owl.theme.default.min.css" rel="stylesheet" />
	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url() ?>assets/back/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="<?php echo base_url() ?>assets/back/css/helper.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/back/css/style.css" rel="stylesheet">
	<!-- Editor -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/back/css/lib/html5-editor/bootstrap-wysihtml5.css" />
	<!-- Editor -->
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
	<!--[if lt IE 9]>-->
	<script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<!--[endif]-->
</head>

<body class="fix-header fix-sidebar">
	<!-- Preloader - style you can find in spinners.css -->
	<div class="preloader">
		<svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
	</div>
	<!-- Main wrapper  -->
	<div id="main-wrapper">
		<!-- header header  -->
		<div class="header">
			<nav class="navbar top-navbar navbar-expand-md navbar-light">
				<!-- Logo -->
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo base_url()?>dashboard">
						DISTRO STORE
					</a>
				</div>
				<!-- End Logo -->
				<div class="navbar-collapse">
					<!-- toggle and nav items -->
					<ul class="navbar-nav mr-auto mt-md-0">
						<!-- This is  -->
						<li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  "
								href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
						<li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  "
								href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
					</ul>
					<!-- User profile and search -->
					<ul class="navbar-nav my-lg-0">

						<!-- Search -->
						<li class="nav-item hidden-sm-down search-box">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false"><img
									src="<?php echo base_url()?>assets/back/images/users/5.jpg" alt="user"
									class="profile-pic" /></a>
							<div class="dropdown-menu dropdown-menu-right animated zoomIn">
								<ul class="dropdown-user">
									<li><a href="<?php echo base_url() ?>login/logout"><i class="fa fa-power-off"></i>
											Logout</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- End header header -->
		<!-- Left Sidebar  -->
		<div class="left-sidebar">
			<!-- Sidebar scroll-->
			<div class="scroll-sidebar">
				<!-- Sidebar navigation-->
				<nav class="sidebar-nav">
					<?php $this->load->view('nav_menu/menu_back.php') ?>
				</nav>
				<!-- End Sidebar navigation -->
			</div>
			<!-- End Sidebar scroll-->
		</div>
		<!-- End Left Sidebar  -->
		<!-- Page wrapper  -->
		<div class="page-wrapper">
			<?php $this->load->view($konten) ?>
		</div>
		<!-- End Page wrapper  -->
	</div>
	<!-- End Wrapper -->
	<!-- All Jquery -->
	<script src="<?php echo base_url() ?>assets/back/js/lib/jquery/jquery.min.js"></script>
	<!-- Bootstrap tether Core JavaScript -->
	<script src="<?php echo base_url() ?>assets/back/js/lib/bootstrap/js/popper.min.js"></script>
	<script src="<?php echo base_url() ?>assets/back/js/lib/bootstrap/js/bootstrap.min.js"></script>
	<!-- slimscrollbar scrollbar JavaScript -->
	<script src="<?php echo base_url() ?>assets/back/js/jquery.slimscroll.js"></script>
	<!--Menu sidebar -->
	<script src="<?php echo base_url() ?>assets/back/js/sidebarmenu.js"></script>
	<!--stickey kit -->
	<script src="<?php echo base_url() ?>assets/back/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>


	<script src="<?php echo base_url() ?>assets/back/js/lib/datamap/d3.min.js"></script>
	<script src="<?php echo base_url() ?>assets/back/js/lib/datamap/topojson.js"></script>
	<script src="<?php echo base_url() ?>assets/back/js/lib/datamap/datamaps.world.min.js"></script>
	<script src="<?php echo base_url() ?>assets/back/js/lib/datamap/datamap-init.js"></script>

	<script src="<?php echo base_url() ?>assets/back/js/lib/weather/jquery.simpleWeather.min.js"></script>
	<script src="<?php echo base_url() ?>assets/back/js/lib/weather/weather-init.js"></script>
	<script src="<?php echo base_url() ?>assets/back/js/lib/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?php echo base_url() ?>assets/back/js/lib/owl-carousel/owl.carousel-init.js"></script>


	<script src="<?php echo base_url() ?>assets/back/js/lib/chartist/chartist.min.js"></script>
	<script src="<?php echo base_url() ?>assets/back/js/lib/chartist/chartist-plugin-tooltip.min.js"></script>
	<script src="<?php echo base_url() ?>assets/back/js/lib/chartist/chartist-init.js"></script>
	<!--Custom JavaScript -->
	<script src="<?php echo base_url() ?>assets/back/js/custom.min.js"></script>

	<!-- Datatables -->
	<script src="<?php echo base_url() ?>assets/back/js/lib/datatables/datatables.min.js"></script>
	<script
		src="<?php echo base_url() ?>assets/back/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js">
	</script>
	<script
		src="<?php echo base_url() ?>assets/back/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js">
	</script>
	<script
		src="<?php echo base_url() ?>assets/back/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js">
	</script>
	<script
		src="<?php echo base_url() ?>assets/back/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js">
	</script>
	<script
		src="<?php echo base_url() ?>assets/back/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js">
	</script>
	<script
		src="<?php echo base_url() ?>assets/back/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/button.html5.min.js">
	</script>
	<script
		src="<?php echo base_url() ?>assets/back/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/button.print.min.js">
	</script>
	<script src="<?php echo base_url() ?>assets/back/js/lib/datatables/datatables-init.js"></script>
	<!-- Datatables -->

	<!-- Editor -->
	<script src="<?php echo base_url() ?>assets/back/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
	<script src="<?php echo base_url() ?>assets/back/js/lib/html5-editor/wysihtml5-0.3.0.js"></script>
	<script src="<?php echo base_url() ?>assets/back/js/lib/html5-editor/bootstrap-wysihtml5.js"></script>
	<script src="<?php echo base_url() ?>assets/back/js/lib/html5-editor/wysihtml5-init.js"></script>
	<script src="<?php echo base_url() ?>assets/back/js/helper.js"></script>

	<script>
		function hapus() {
			var conf = confirm("Apakah data ini ingin dihapus ?");
			if (conf = true) {
				return true;
			} else {
				return false;
			}
		}

	</script>
	<script>
		$(document).ready(function () {
			$('#nominal').keyup(function () {
				formatCurrency("nominal", $(this).val());
			})
		})

	</script>
	<?php echo $this->session->flashdata("pesan"); ?>
</body>

</html>
