<div class="container-fluid">
	<div class="row no_space strap_top">
		<!-- row at top -->
		<div class="col-lg-2 no_space">
			<a class="logo_top" href="<?php echo site_url(); ?>">
				<p><?php echo $site_name; ?></p>
			</a>
		</div>
		<div class="col-lg-3"></div>
		<div class="col-lg-5 no_space">
		</div>
		<div class="col-lg-2 no_space">
			<div class="btn-group logged_as">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			    Zalogowano jako: <?php echo $this->session->userdata('login'); ?> <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
			    <li><a href="<?php echo site_url('user/logout'); ?>">Wyloguj się</a></li>
			  </ul>
			</div>
		</div>
	</div>
	<div class="row no_space">
		<!-- navbar -->
		<div class="col-lg-1 no_space col_navbar">
			<?php $this->load->view($navbar_admin); ?>
		</div>
		<div class="col-lg-11">
			<?php $this->load->view($subview); ?>
			<?php $this->load->view('admin/include/footer_s'); ?>
		</div>
	</div>
</div>