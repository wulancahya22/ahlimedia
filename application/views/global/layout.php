<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets2/img/logo.png'); ?>">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>AhliMedia</title>
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
        background-image: url('<?php echo base_url(); ?>assets2/img/1.jpg');
        background-size: cover;
    }
    </style>
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- navbar -->
    <div class="navbar-fixed">


            <nav class="brown">
            	<a href="<?php echo base_url();?>Buku"   class="brand-logo" ><img src="<?php echo base_url(); ?>assets2/img/a.png" style="height: 80px; width: 80px; border-radius: 90%;" alt="" ></a>
                <div class="container">
                  <div class="dropdown">
                  	<div class="nav-wrapper">
                             
                            <ul class="right hide-on-med-and-down">

                                
                                <li><a href="<?php echo base_url();?>Buku/profile">Tentang Perputakaan</a></li>
                                <li><a class="btn brown" href="<?php echo base_url();?>/auth">MASUK</a></li>
                            </ul>
                        </div>
                      <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"> Main Menu <span class="caret"></span></button>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url();?>Buku/profile">Tentang Perputakaan</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url();?>/auth">MASUK</a></li>
                      </ul>
                    </div>
                  </div>
                         
                </div>
            </nav>
          </div>
    <!-- mavbar-end -->

    
    <!-- SideNav-end -->
    <!-- Slider -->
    <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <div class="row center">
          
        </div>
        <h3 class="header center black-text" style="font-family: mojo">PERPUSTAKAAN</h3>
       <h3 class="header center black-text" style="font-family: mojo">ONLINE</h3>

      </div>
    </div>
    <div class="parallax"><img src="<?php echo base_url(); ?>assets2/img/6.jpg" alt=""></div>
  </div>
  <!-- Slider end -->

    <!-- LOGO HEADER END-->
    
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
        <?php echo $content; ?>
        </div>
            <div class="row">
                <div class="col-md-12">
                </div>
          </div>
        </div>
        <footer class="brown">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    ICT &copy; : <a href="#" target="_blank">MaBook</a>
                </div>

            </div>
        </div>
      </footer>
                    
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/materialize.min.js"></script>
<!-- <?php echo base_url(); ?>assets/bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
<!--data tables-->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
<script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        

        const parallaxkeren = document.querySelectorAll('.parallax');
        M.Parallax.init(parallaxkeren);

        const materialboxjalan = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialboxjalan);

        const scrolloto = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scrolloto, {
            scrollOffset: 50
        });
    </script>
<script>
  
function format_buku ( d ) {
    // `d` is the original data object for the row
    return '<div class="box box-info">'+
  '<div class="box-header with-border">'+
    '<h3 class="box-title">Detail Buku</h3>'+
  '</div>'+
  '<div class="box-body no-padding">'+
  '<table class="table table-striped">'+
                '<tr>'+
                  '<td>ID Buku</td>'+
                  '<td>'+d[2]+'</td>'+
                '</tr>'+
                 '<tr>'+
                  '<td>ISBN</td>'+
                  '<td>'+d[3]+'</td>'+
                '</tr>'+
                 '<tr>'+
                  '<td>Judul Buku</td>'+
                  '<td>'+d[4]+'</td>'+
                '</tr>'+
                 '<tr>'+
                  '<td>Kategori</td>'+
                  '<td>'+d[5]+'</td>'+
                '</tr>'+
                 '<tr>'+
                  '<td>Penerbit</td>'+
                  '<td>'+d[6]+'</td>'+
                '</tr>'+
                 '<tr>'+
                  '<td>Pengarang</td>'+
                  '<td>'+d[7]+'</td>'+
                '</tr>'+
                 '<tr>'+
                  '<td>Tahun Terbit</td>'+
                  '<td>'+d[11]+'</td>'+
                '</tr>'+
              '</table>'+
            '</div>'+
  '</div>'+
'</div>';
}
 
$(document).ready(function() {
     $('#table-buku').DataTable( {
        "columnDefs": [
            {
                "targets": [ 3 ],
                "visible": false,
            },
            {
                "targets": [ 10 ],
                "visible": false
            },
            {
                "targets": [ 11 ],
                "visible": false
            },
            {
                "targets": [ 12 ],
                "visible": false
            },

        ]
    } );

       var table = $('#table-buku').DataTable();
      $('#table-buku tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format_buku(row.data()) ).show();
            tr.addClass('shown');
        }
    } );
  } );


$(document).ready(function() {

      $('#table-penerbit').DataTable();
      
  } );


  $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            
            $('.debug-url').html('URL Hapus: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
        });

  $('.date-own').datepicker({
         minViewMode: 2,
         format: 'yyyy'
       });


 $(document).ready(function() {
  $(".js-example-basic-single").select2();
});
</script>




<!-- SlimScroll -->
<!-- script src="<?php echo base_url(); ?>assets/plugins/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<!-- <script src="<?php echo base_url(); ?>assets/plugins/plugins/fastclick/fastclick.js"></script> -->
</body>
</html>

