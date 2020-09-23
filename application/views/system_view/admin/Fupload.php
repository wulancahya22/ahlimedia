<script>
    
    function insert_confirm(){
  var msg;
  msg= "Anda yakin data sudah benar ?? " ;
  var agree=confirm(msg);
  if (agree)
  return true ;
  else
  return false ;
}
</script>
<head>
    <title>MaBook</title>
    
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet"> <!-- Custom styles for this template -->
</head>
<?php $this->load->view('page/header'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jq-3.2.1/dt-1.10.16/r-2.2.1/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/jq-3.2.1/dt-1.10.16/r-2.2.1/datatables.min.js"></script>

<!-- load sidebar in page/sidebar -->
<?php $this->load->view('page/sidebar'); ?>

<!-- Load navbar in page/navbar -->
<?php $this->load->view('page/navbar'); ?>

<div class="container-fluid">
      <!-- Main component for a primary marketing message or call to action -->
<div class="panel panel-default">
  <div class="panel-heading"><b>Form Upload</b></div>
  <div class="panel-body">
  <?=$this->session->flashdata('pesan')?>
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
          <td style="width:15%;">File Dokumen</td>
          <td>
            <div class="col-sm-6">
                <input type="file" name="filedokumen" class="form-control">
            </div>
            </td>
         </tr>
        <tr>
          <td style="width:15%;">Judul</td>
          <td>
            <div class="col-sm-10">
                <textarea name="judul_buku" class="form-control"></textarea>
            </div>
            </td>
         </tr>
         <tr>
          <td style="width:15%;">Kategori</td>
          <td>
            <div class="col-sm-10">
            <select name="kategori_buku" class="form-control">
              <option value="">- Pilih -</option>
              <option value="1" <?='kategori_buku' == 1 ? "selected" : null?>>IPA</option>
              <option value="2" <?='kategori_buku'== 2 ? "selected" : null?>>IPS</option>
              <option value="3" <?='kategori_buku' == 3 ? "selected" : null?>>BAHASA INDONESIA</option>
              <option value="4" <?='kategori_buku'== 4 ? "selected" : null?>>LAINNYA</option>
              <option value="5" <?='kategori_buku'== 5 ? "selected" : null?>>BUKU UJIAN</option>
            </select>
          </div>
        </td>
      </tr>
         <tr>
          <td style="width:15%;">Pengarang</td>
          <td>
            <div class="col-sm-10">
                <textarea name="pengarang_buku" class="form-control"></textarea>
            </div>
            </td>
         </tr>
         <tr>
          <td style="width:15%;">Penerbit</td>
          <td>
            <div class="col-sm-10">
                <textarea name="penerbit_buku" class="form-control"></textarea>
            </div>
            </td>
         </tr>
         <tr>
          <td style="width:15%;">Halaman</td>
          <td>
            <div class="col-sm-10">
                <textarea name="jumlah_halaman" class="form-control"></textarea>
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