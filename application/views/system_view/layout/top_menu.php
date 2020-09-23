<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <?=anchor(base_url(), 'Perpusatakaan Online', ['class'=>'navbar-brand'])?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      	  
      <ul class="nav navbar-nav navbar-right">
		<li><?php echo anchor(base_url('welcome'), 'Home');?></li>
    <li><?php echo anchor(base_url('welcome/cart'), 'Library');?></li>
		<?php if($this->session->userdata('Username')) { ?>
			<li><div style="line-height:50px;">You Are : <?=$this->session->userdata('Username')?></div></li>
			<li><?php echo anchor('auth/logout', 'Logout');?></li>
		<?php } else { ?>
			<li><?php echo anchor('auth', 'Login');?></li>
		<?php } ?>
      </ul>
	  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  


</nav>