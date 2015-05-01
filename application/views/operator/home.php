<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Absensi Siswa Realtime</title>

	<link href="<?php echo base_url()."assets/vendor/css/bootstrap.css"; ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/style.css"; ?>">
</head>
	
<body>
	<section id="header">
		<div class="container">
			<h1 class="navbar-brand">Absensi Siswa Realtime</h1>
			<ul class="nav navbar-nav navbar-right">
        		<li role="presentation"><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Username</a></li>
        		<li role="presentation"><a href="#"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>Log out</a></li>
      		</ul>
		</div>
	</section>

	<section id="menubar">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Collect the nav links, forms, and other content for toggling -->
    			<ul class="nav navbar-nav">
        			<li class="active"><a href="<?php echo base_url()."operator/home"; ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Dashboard</a></li>
        			<li><a href="<?php echo base_url()."operator/view_siswa"; ?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Siswa</a></li>
        			<li><a href="<?php echo base_url()."operator/view_guru"; ?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Guru</a></li>
        			<li><a href="<?php echo base_url()."operator/view_mapel"; ?>"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>Mata Pelajaran</a></li>

      			</ul>
      			<ul class="nav navbar-nav navbar-right">
        			<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span><?php echo date('d-m-Y H:i:s'); ?></li>
      			</ul>
			</nav>
		</div>
	</section>
	<section id="content">
		<div class="container">
			<?php if ($this->session->flashdata('tambah')) : ?>
			<div class="alert alert-success alert-dismissible" role="alert">
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  				<strong>Sukses!</strong> data berhasil ditambahkan.
			</div>
    		<?php endif ?>

    		<?php if ($this->session->flashdata('update')) : ?>
    		<div class="alert alert-info alert-dismissible" role="alert">
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  				<strong>Info!</strong> data berhasil diperbarui.
			</div>
    		<?php endif ?>

    		<?php if ($this->session->flashdata('delete')) : ?>
    		<div class="alert alert-danger alert-dismissible" role="alert">
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  				<strong>Warning!</strong> data telah dihapus.
			</div>
    		<?php endif ?>

    		<?php if ($this->session->flashdata('import')) : ?>
    		<div class="alert alert-danger alert-dismissible" role="alert">
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  				<strong>Sukses!</strong> data telah diimport.
			</div>
    		<?php endif ?>
    		
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-12 col-md-8">
							<h4>Daftar Siswa</h4>
						</div>
  						<div class="col-xs-6 col-md-4 text-right">
  							<a href="<?php echo base_url()."operator/import_siswa"; ?>">
								<button type="button" class="btn btn-success btn-sm">Import</button>
							</a>

							<a href="<?php echo base_url()."operator/export_siswa"; ?>">
								<button type="button" class="btn btn-success btn-sm">Export</button>
							</a>

  							<a href="<?php echo base_url()."operator/add_siswa"; ?>">
								<button type="button" class="btn btn-success btn-sm">Tambah</button>
							</a>
  						</div>
					</div>
			</div>
				<div class="panel-body">
					
				</div>
			</div>
			
			
		</div>
	</section>

	<section id="footer">
		<div class="container">
			<hr />
			<p class="text-center">&copy; 2015 Pemrograman Internet IF UIN SGD 2012</p>
		</div>
	</section>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="assets/vendor/js/jquery.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="assets/vendor/js/bootstrap.js"></script>
</body>
</html>