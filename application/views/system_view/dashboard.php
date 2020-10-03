<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Ahli Media</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>

<body>
    <!-- load sidebar in page/sidebar -->
    <?php $this->load->view('page/sidebar'); ?>
    <!-- Load navbar in page/navbar -->
    <?php $this->load->view('page/navbar'); ?>

    <div class="container-fluid">
      <!-- Main component for a primary marketing message or call to action -->
<div class="panel panel-default">
  <div class="panel-heading"><b>Form Upload</b></div>
  <div class="panel-body">
  <?=$this->session->flashdata('pesan') ?>
     <form action="<?=base_url()?>upload/insert" method="post" enctype="multipart/form-data">
       <table class="table table-striped">
       
         <tr>
          <td style="width:15%;">File Foto</td>
          <td>
            <div class="col-sm-6">
                <input type="file" name="filefoto" class="form-control">
            </div>
            </td>
         </tr>
        <tr>
          <td style="width:15%;">Judul</td>
          <td>
            <div class="col-sm-10">
                <textarea name="judul" class="form-control"></textarea>
            </div>
            </td>
         </tr>
         <tr>
          <td style="width:15%;">Kategori</td>
          <td>
            <div class="col-sm-10">
            <select name="kategori" class="form-control">
              <option value="">- Pilih -</option>
              <option value="1" <?='kategori' == 1 ? "selected" : null?>>Anak</option>
              <option value="2" <?='kategori'== 2 ? "selected" : null?>>Dewasa</option>
              <option value="3" <?='kategori' == 3 ? "selected" : null?>>Karya Ilmiah</option>
            </select>
          </div>
        </td>
      </tr>
         <tr>
          <td style="width:15%;">Penulis</td>
          <td>
            <div class="col-sm-10">
                <textarea name="penulis" class="form-control"></textarea>
            </div>
            </td>
         </tr>
          <tr>
          <td style="width:15%;">Sinopsis</td>
          <td>
            <div class="col-sm-10">
                <textarea name="sinopsis" class="form-control"></textarea>
            </div>
            </td>
         </tr>
         <tr>
          <td colspan="2">
            <input type="submit" onclick="return insert_confirm()" class="btn btn-success" value="Simpan">
            <button type="reset" class="btn btn-default">Batal</button>
          </td>
         </tr>
       </table>
     </form>
        </div>
    </div>    <!-- /panel -->

    </div> <!-- /container -->
 
    
<!-- <div class="wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Data Buku</h4>
                                <p class="category">*data buku selama 1 bulan</p>
                            </div>
                            
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Ipa
                                        <i class="fa fa-circle text-danger"></i> Ips
                                        <i class="fa fa-circle text-warning"></i> Sejarah
                                    </div>
                                    <hr>
                                    <div class="stats">
                                       <i class="fa fa-clock-o"></i> Campaign sent 2 days ago 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->

                    <!-- <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Data Peminjaman</h4>
                                <p class="category">*data peminjaman selama 1 bulan</p>
                            </div>
                            <div class="content">
                                <div id="chartHours" class="ct-chart"></div>
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Click
                                        <i class="fa fa-circle text-warning"></i> Click Second Time
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">2014 Sales</h4>
                                <p class="category">All products including Taxes</p>
                            </div>
                            <div class="content">
                                <div id="chartActivity" class="ct-chart"></div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Tesla Model S
                                        <i class="fa fa-circle text-danger"></i> BMW 5 Series
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
 -->
                    
                </div>
            </div>
        </div>



        <?php $this->load->view('page/footer'); ?>

</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-user',
            	message: "Selamat datang <?php echo $this->session->userdata('nama') ?>, anda berhasil login sebagai admin<b>."

            },{
                type: 'info',
                timer: 5000
            });

    	});
	</script>

</html>
