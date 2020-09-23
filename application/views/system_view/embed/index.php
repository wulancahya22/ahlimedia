<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets2/img/logo.png'); ?>">
	<meta charset="utf-8">
	<title> FORM BACA</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="<?php echo base_url(); ?>assets2/css/bootstrap.css" rel="stylesheet" />
    <!-- MATERIALIZE -->
    <link href="<?php echo base_url(); ?>assets2/css/materialize.min.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="<?php echo base_url(); ?>assets2/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?php echo base_url(); ?>assets2/css/style.css" rel="stylesheet" />
    <style>
    .bgg {
        background-image: url('<?php echo base_url(); ?>');
        background-size: cover;
    }
	</style>
<!-- padding untuk upload pdf -->
<style>
	.container(padding: 30px;)
</style>	
</head>
<body>
<!-- navbar -->
<div class="navbar-fixed">
<nav class="brown">
	<div class="container">
	<?=anchor(base_url(), 'Form Baca Online', ['class'=>'navbar-brand'])?>
			<div class="nav-wrapper">
				<!-- Button -->
				<ul class="right hide-on-med-and-down">
					<li><a class="btn brown" href="<?php echo base_url();?>/welcome/cart">KEMBALI</a></li>
				</ul>
				<ul class="right hide-on-med-and-down">
					<li><a class="btn brown" href="<?php echo base_url();?>/welcome">HOME</a></li>
				</ul>
			</div>
	</div>
</nav>
</div>
<!-- navbar-end -->
<!-- Untuk mengupload pdf di layar form baca pada halaman user -->
	<div class="container">
		<embed src="<?=base_url()?>/uploads/sjr.pdf#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="667px" /> 
	</div>
<!-- End upload pdf -->
<!-- Script untuk menampilkan bootstrap atau assets yang ada di halaman user -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/materialize.min.js"></script>
<!-- <?php echo base_url(); ?>assets/bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/plugins/plugins/fastclick/fastclick.js"></script>
<!-- End Script -->

</body>
</html>