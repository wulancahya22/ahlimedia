<?php $this->load->view('page/header'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jq-3.2.1/dt-1.10.16/r-2.2.1/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/jq-3.2.1/dt-1.10.16/r-2.2.1/datatables.min.js"></script>

<!-- load sidebar in page/sidebar -->
<?php $this->load->view('page/sidebar'); ?>

<!-- Load navbar in page/navbar -->
<?php $this->load->view('page/navbar'); ?>

<script>
    
    function hapus_confirm(){
  var msg;
  msg= "Anda yakin data sudah benar ?? " ;
  var agree=confirm(msg);
  if (agree)
  return true ;
  else
  return false ;
}
</script>


<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        <form action="" method="post">
                            <?php if ( NULL !== $this->session->flashdata('message')){echo $this->session->flashdata('message');} ?>
                            <div class="card card-plain table-plain-bg">
                                <div class="card-header ">
                                    <h4 class="card-title">Add User</h4>
                                    <div class="pull-right">
                                        <a href="<?=site_url('user')?>" clas="btn btn-warning btn-flat">
                                            <i class="fa fa-undo"></i>Kembali
                                        </a>
                                    </div>
                                    <p class="card-category"></p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
  
                        <div class="row">
                            <div class="col-md-12">
                            <label>Nama_lengkap *</label>
                                <div class="form-group">
                                    <input type="text" name="fullname" value="<?=set_value('fullname')?>" class="form-control">
                                    <?=form_error('fullname')?>
                                </div>
                            </div>
                        </div>       
                        <div class="row">
                            <div class="col-md-12">
                            <label>Username *</label>
                                <div class="form-group">
                                    <input type="text" name="username" value="<?=set_value('username')?>" class="form-control">
                                    <?=form_error('username')?>
                                </div>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-md-12">
                            <label>Password *</label>
                                <div class="form-group">
                                    <input type="password" name="password" value="<?=set_value('password')?>" class="form-control">
                                    <?=form_error('password')?>
                                </div>
                            </div>
                        </div>  
                        <div class="row">
                        
                            <div class="col-md-12">
                            <label>Role *</label>
                                <div class="form-group">
                                    <select name="id_akses" class="form-control">
                                        <option value="">- Pilih -</option>
                                        <option value="1" <?=set_value('id_akses') == 1 ? "selected" : null?>>Admin</option>
                                        <option value="2" <?=set_value('id_akses') == 2 ? "selected" : null?>>Siswa</option>
                                    </select>
                                    <?=form_error('id_akses')?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" onclick="return hapus_confirm()" class="btn btn-success btn-flat">Submit</button>
                            
                        </div>
                        <div class="clearfix"></div>
                        
            </form>

                                        </div>
                                </div>
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
