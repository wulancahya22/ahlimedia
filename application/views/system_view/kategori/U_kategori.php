<?php $this->load->view('page/header'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jq-3.2.1/dt-1.10.16/r-2.2.1/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/jq-3.2.1/dt-1.10.16/r-2.2.1/datatables.min.js"></script>

<!-- load sidebar in page/sidebar -->
<?php $this->load->view('page/sidebar'); ?>

<!-- Load navbar in page/navbar -->
<?php $this->load->view('page/navbar'); ?>

<script>
    
    function update_confirm(){
  var msg;
  msg= "Anda yakin data sudah benar ?? " ;
  var agree=confirm(msg);
  if (agree)
  return true ;
  else
  return false ;
}
</script>


<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Edit Data Mahasiswa

                </div>
                <div class="card-body">
                    <?php if( validation_errors() ) : ?>
                        <div class="alert alert-danger" role="alert"> <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <input type="hidden" name="id" id="id" value="<?= $ktg->id; ?>">                        
                        <div class="form-group">
                            <label for="id_kategori">Level</label>
                            <input type="text" name="id_kategori" id="level" value="<?= $ktg->id_kategori; ?>" class="form-control" placeholder="Masukkan Level">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input type="text" name="kategori" id="kategori" value="<?= $ktg->kategori; ?>" class="form-control" placeholder="Masukkan Nama Kategori">

                        </div>
                        <button type="submit" onclick="return insert_confirm()" class="btn btn-primary float-right">Update</button>
                        <a href="<?= base_url(); ?>/kategori" class="btn btn-primary float-right mr-2">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

        <?php $this->load->view('page/footer'); ?>

</body>

    <!--   Core JS Files   -->
    <?php $this->load->view('page/js'); ?>

<script type="text/javascript">$(document).ready(function(){$("#table-ah").dataTable();});</script>
</html>
