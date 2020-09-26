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
                  showAnim:""	,
                  minDate: -0, 
                  maxDate: "+1M",

    });

    $( "#datepicker2" ).datepicker({
        
                  dateFormat : "dd-mm-yy",
                  showAnim:""	,
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


<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if ( NULL !== $this->session->flashdata('message')){echo $this->session->flashdata('message');} ?>
                            <div class="card card-plain table-plain-bg">
                                <div class="card-header ">
                                    <h4 class="card-title">Data-Data User</h4>
                                     
                                    <p class="card-category"></p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <th>No</th>
                                            <th>Nama_lengkap</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Role</th>
                                            <th>Aksi</th>
                                        </thead>

                                        <tbody>
                                            <?php $no = 1;
                                            foreach($query->result() as $key => $data) { ?>
                                            <tr>
                                                <td><?=$no++?></td>
                                                <td><?=$data->Nama_lengkap?></td>
                                                <td><?=$data->Username?></td>
                                                <td><?=$data->Password?></td>
                                                <td><?=$data->id_akses?></td>
                                                <td class="text-center" width="160px">
                                                <form action="<?=site_url('user/del')?>" method="post">
                                                <a href="<?=site_url('user/edit/'.$data->user_id)?>" class="btn btn-primary btn-xs" >
                                                        <i class="pe-7s-edit"></i> Update</a>
                                                
                                                    <input type="hidden" name="user_id" value="<?=$data->user_id?>">
                                                    <button type="submit" class="btn btn-danger btn-xs" onclick="return hapus_confirm()">
                                                        <i class="pe-7s-shield"></i> Delete</a>
                                                    </button>
                                                </form>
                                                </td>
                                            </tr>
                                            <?php
                                            } ?>
                                        </tbody>
                                    </table>
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
