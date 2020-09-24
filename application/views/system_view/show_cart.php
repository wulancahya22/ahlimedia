<script>
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
<!DOCTYPE html>
<html lang="en">
	<head>
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets2/img/logo.png'); ?>">
		<title>Ahli Media</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php $this->load->view('system_view/layout/top_menu') ?>
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Judul</th>
					<th>Pengarang</th>
					<th>Penerbit</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
			<?php $no = 1;
                foreach($order as $key => $items) { ?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $items->judul_buku?></td>
					<td><?= $items->pengarang_buku?></td>
					<td><?= $items->penerbit_buku?></td>
					<td class="text-center" width="160px">
                        <!--aksi-->
						<a href="<?=site_url('welcome/delete/'.$items->id) ?>" class="btn btn-danger" onclick="return hapus_confirm()">
                        <i class="pe-7s-shield"></i> Delete</a>
						<a href="<?=site_url('baca/') ?>" class="btn btn-danger" >
                        <i class="pe-7s-shield"></i> Baca</a>
                         
                        </button>
                        </form>
                    </td>
				</tr>
				<?php
            } ?>
			</tbody>
		</table>
	</body>
</html>