<?php
require_once __DIR__.'/../auth/authcore_check.php';
require_once __DIR__.'/../bpcore/sqltransaction.php';
// require_once __DIR__.'/keyns.php';
require_once __DIR__.'/../bpcore/htmlentitygenerator.php';

if(isset($_SESSION["user_type"]) && $_SESSION["user_type"]=="user"){
	session_destroy();
	header('Location: '.SITE_URL);
}

$arr_colors_dark=array("#670236","#12446e","#0f374a","#3b673b","#743877","#241608","#2e2011","#6e647b","#6e6f62","#4a3850","#4e294c","#775e7d","#446e46","#5e0652","#22375a","#6c4276","#5d100d","#625a0d","#2d6c14","#2a7d2f","#240d11","#0a0c7f","#02452d","#161c4c","#476464","#485553","#3f4222","#0d267d","#6b783e","#412647","#317859","#2c0429","#5d2e5b","#7e5a3f","#19671b","#5f670e","#6f036d");

?>

<!DOCTYPE html>
<html lang="en" class="">

<head>

	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>iedc</title>
	<!--favicon-->
	<!-- <link rel="icon" href="<?php echo SITE_URL; ?>assetsl/images/favicon-32x32.png" type="image/png" /> -->
	<link rel="icon" href="<?php echo XCBPFCONSOLELOGO; ?>" type="image/png" />
	<!-- Vector CSS -->
	<link href="<?php echo SITE_URL; ?>assetsl/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
	<!--plugins-->
	<link href="<?php echo SITE_URL; ?>assetsl/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="<?php echo SITE_URL; ?>assetsl/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="<?php echo SITE_URL; ?>assetsl/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="<?php echo SITE_URL; ?>assetsl/css/pace.min.css" rel="stylesheet" />
	<script src="<?php echo SITE_URL; ?>assetsl/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo SITE_URL; ?>assetsl/css/bootstrap.min.css" />

	<!-- Icons CSS -->
	<link rel="stylesheet" href="<?php echo SITE_URL; ?>assetsl/css/icons.css" />
	<!-- App CSS -->
	<link rel="stylesheet" href="<?php echo SITE_URL; ?>assetsl/css/app.css" />
	<link rel="stylesheet" href="<?php echo SITE_URL; ?>assetsl/css/dark-sidebar.css" />
	<link rel="stylesheet" href="<?php echo SITE_URL; ?>assetsl/css/dark-theme.css" />
	<!-- Datatables -->
	<link href="<?php echo SITE_URL?>assetsl/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<!-- 	<link href="<?php echo SITE_URL?>assetsl/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
-->	<link href="<?php echo SITE_URL?>assetsl/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo SITE_URL?>assetsl/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo SITE_URL?>assetsl/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo SITE_URL?>assetsl/vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
<!-- 
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/autofill/2.3.7/css/autoFill.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.bootstrap4.min.css">
-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.css" />


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;1,200;1,300;1,400;1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style type="text/css">
	.sidebar-wrapper .metismenu a:hover, .sidebar-wrapper .metismenu a:focus, .sidebar-wrapper .metismenu a:active, .sidebar-wrapper .metismenu .mm-active>a {
		color: #f65c37;
		text-decoration: none;
		background: rgb(64 64 64 / 10%);
		border-radius: .7em;
	}

	.sidebar-wrapper .metismenu a .menu-title {
		margin-left: 10px;
		font-size: 1em;
		font-weight: 700;
	}

	.table th, .table td {
		padding: 0.25rem;
	}
	.img-thumbnail {
		width: 25px !important;
	}
	.fe_box .note-editor,
	.re_box .note-editor,
	.lp_box .note-editor{
		background-color: #000c !important;
	}


	.sidebar-wrapper .metismenu ul {
    border: none; 
    background: #ffffff;
	}
</style>


</head>

<body>
	<div style="    position: fixed;
	z-index: 99999999;
	width: 100%;
	height: 100%;
	background: #3c3b3b2e;
	display: none;
	" id="ajaxloader">
	<img style="
	position: fixed;
	z-index: 99999999;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	margin: auto;
	width: 100px;
	" src="../assetsl/img/loader/1.gif" /> 
</div>
<!-- wrapper -->
<div class="wrapper">
	<!--sidebar-wrapper-->
	<div class="sidebar-wrapper" data-simplebar="true">
		<div class="sidebar-header">
			<div class="">
			</div>
			<div>
				<!-- <img src="<?php echo XCBPFCONSOLELOGO;  ?>" class="" width="80%" alt="" /> -->

			</div>
			<a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
			</a>
		</div>
		<!--navigation-->
		<ul class="metismenu" id="menu">
			<li>
				<a href="javascript:;" class="">
					<div class="parent-icon "><i class="fas fa-chart-line"></i>
					</div>
					<div class="menu-title">Dashboard</div>
				</a>

			</li>
			 

 
			
			

			<li class="menu-label">General</li>

			<li class="">
				
			<li>
				<a href="am10.php">
					<div class="parent-icon  "><i class="bx bx-grid-alt"></i></i>
					</div>
					<div class="menu-title">Slider</div>
				</a>
			</li>
			<li>
				<a href="am13.php">
					<div class="parent-icon  "><i class="far fa-newspaper"></i></i>
					</div>
					<div class="menu-title">Speakers</div>
				</a>
			</li>

			<li>

			<li>
				<a href="am1.php">
					<div class="parent-icon  "><i class="fas fa-layer-group"></i></i>
					</div>
					<div class="menu-title">Previous Summit</div>
				</a>
			</li>	 

		<?php  
		if($_SESSION["user_type"]=="admin"){

			echo '<li class="menu-label">Settings</li>

						<li>
							<a href="user.php">
								<div class="parent-icon  "><i class="bx bx-group"></i>
								</div>
								<div class="menu-title">Users</div>
							</a>
						</li>

						<li>
							<a href="systemconfig.php">
								<div class="parent-icon  "><i class="bx bx-group"></i>
								</div>
								<div class="menu-title">Default Options</div>
							</a>
						</li>';
		}
		?>
			
		</ul>
		<!--end navigation-->
	</div>
	<!--end sidebar-wrapper-->
	<!--header-->
	<header class="top-header">
		<nav class="navbar navbar-expand">
			<div class="left-topbar d-flex align-items-center">
				<a href="javascript:;" class="toggle-btn">	<i class="bx bx-menu"></i>
				</a>
			</div>

			<div class="right-topbar ml-auto">
				<ul class="navbar-nav">
					<li class="nav-item search-btn-mobile">
						<a class="nav-link position-relative" href="javascript:;">	<i class="bx bx-search vertical-align-middle"></i>
						</a>
					</li>


					<li class="nav-item dropdown dropdown-user-profile">
						<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-toggle="dropdown">
							<div class="media user-box align-items-center">
								<div class="media-body user-info">
									<p class="user-name mb-0"><?php echo $_SESSION['username'] ?></p>
									<p class="designattion mb-0">Available</p>
								</div>
								<img src="https://via.placeholder.com/110x110" class="user-img" alt="user avatar">
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javascript:;"><i
							class="bx bx-user"></i><span>Profile</span></a>

							<div class="dropdown-divider mb-0"></div>	<a class="dropdown-item" href="logout.php"><i
								class="bx bx-power-off"></i><span>Logout</span></a>
							</div>
						</li>

					</ul>
				</div>
			</nav>
		</header>
		<!--end header-->