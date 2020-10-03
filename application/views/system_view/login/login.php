<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets2/img/logo.png'); ?>">
    <title>Ahli Media</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
 
body{
	font-family: sans-serif;
	background-image: url('<?php echo base_url(); ?>assets2/img/q.jpg');
        background-size: cover;
}

h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}

.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}

.kotak_login{
	width: 250px;
	background:    white;
	/*meletakkan form ke tengah*/
	margin: 120px auto;
	padding: 30px 20px;
}

label{
	font-size: 12pt;
}

.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}

.tombol_login{
	background: #46de4b;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 2px;
	padding: 10px 20px;
}

.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}
    </style>
</head>
  <body>

	<!-- <h1 style="font-family: Cooper Black">Library Ahli Media<br/></h1> -->

	<div class="kotak_login" style="font-family: streetslab">
		<p class="tulisan_login">Silahkan login</p>
            <center>
                <img  src="<?php echo base_url(); ?>/assets2/img/a.png" class="profile-img" alt="logo images" style="height: 90px; width: 90px; border-radius: 50%;	">    
            </center>
            <form action="<?php echo base_url('auth/ceklogin');?>" method="POST">
                <div><?=validation_errors()?></div>
                <div><?=$this->session->flashdata('error')?></div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Username</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="Username" placeholder="Masukkan Username Anda" autofocus>
                                    <?php echo form_error('Username'); ?>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Password</label>
                                <div class="form-group">
                                    <input type="password" name="Password" class="form-control" placeholder="Masukkan Password Anda">
                                        <?php echo form_error('Password'); ?>
                                </div>
                        </div>
                    </div>
                <button class="btn btn-lg btn-primary btn-block" name="login" id="btn-login" type="submit">
                    Masuk</button>
                </form>
                <?php if(isset($error)) echo "<b><span style='color:red;'>$error</span></b>";
                if(isset($logout)) echo "<b><span style='color:red;'>$logout</span></b>"; ?>
            </div>
            <div id="error" style="margin-top: 10px"></div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>

    <?php echo form_close()?>
  </body>
</html>