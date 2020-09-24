<?php $this->load->view('page/header'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jq-3.2.1/dt-1.10.16/r-2.2.1/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/jq-3.2.1/dt-1.10.16/r-2.2.1/datatables.min.js"></script>

<!-- load sidebar in page/sidebar -->
<?php $this->load->view('page/sidebar'); ?>

<!-- Load navbar in page/navbar -->
<?php $this->load->view('page/navbar'); ?>

<script>
    $( function() {
    $( "#datepicker" ).datepicker({
        
                  dateFormat : "dd-mm-yy",
                  showAnim:"" ,
                  minDate: -0, 
                  maxDate: "+1M",

    });

    $( "#datepicker2" ).datepicker({
        
                  dateFormat : "dd-mm-yy",
                  showAnim:"" ,
                  minDate: -0, 
                  maxDate: "+2W",

    });
  } );
  
    function hapus_confirm(){
  var msg;
  msg= "Data ingin dihapus, Anda yakin ? " ;
  var agree=confirm(msg);
  if (agree)
  return true ;
  else
  return false ;
}
</script>


<div class="container">
    <?php if( $this->session->flashdata('msg') ) : ?>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data <strong>berhasil</strong> <?= $this->session->flashdata('msg'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-md-12">
          <h1 style="font-size: 20px">Data Kategori Buku</h1>
          <table class="table table-stripped">
            <thead>
              <tr>
                
                <th scope="col">ID</th>
                <th scope="col">Kategori</th>
                <th scope="col">Aksi</th>
              
              </tr>
            </thead>
            <tbody>
              <?php foreach ($ktg as $ktg) :?>
                <tr>
                
                <td><?= $ktg['id_kategori'];?></td>
                  <td><?= $ktg['nama_kategori'];?></td>
                  <td>
                    <a href="<?= base_url(); ?>kategori/edit/<?= $ktg['id_kategori']; ?>" class="badge badge-primary badge-pill tampilModalUbah">Edit</a>
                    <a href="<?= base_url(); ?>kategori/hapus/<?= $ktg['id_kategori']; ?>" class="badge badge-danger badge-pill" onclick="return confirm('Hapus data?');">Hapus</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>    
        </div>
    </div>
</div>

        <?php $this->load->view('page/footer'); ?>

</body>

    <!--   Core JS Files   -->
    <?php $this->load->view('page/js'); ?>

<script type="text/javascript">$(document).ready(function(){$("#table-ah").dataTable();});</script>
</html>
