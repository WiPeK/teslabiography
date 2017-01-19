<?php $this->load->view('include/header'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<div class="space100"></div>
			<div class="space50"></div>
			<?php if(isset($message)): ?>
				<div class="alert alert-warning no_border_radius" role="alert"><?php echo $message; ?></div>
			<?php endif; ?>
			<?php if(validation_errors()): ?>
				<div class="alert alert-warning no_border_radius" role="alert">
					<?php echo validation_errors(); ?>
				</div>
			<?php endif; ?>	
			<div class="panel panel-info no_border_radius login_panel">
			  <div class="panel-heading">
			    <h3 class="panel-title">Panel logowania</h3>
			  </div>
			  <div class="panel-body">
			  	<div class="row">
			  		<div class="col-lg-6">
			  			<?php echo form_open(); ?>
					    <?php echo form_label('Login', 'login'); ?>
					    <?php echo form_input('login', '', 'class="input_wp"'); ?><br><br>
					    <?php echo form_label('Hasło', 'password'); ?>
					    <?php echo form_password('password', '', 'class="input_wp"'); ?><br><br>
						
			  		</div>
			  		<div class="col-lg-6">
			  			<?php echo form_submit('submit', 'Logowanie', 'class="btn btn-primary btn-block no_border_radius btn_login"'); ?>
					    <?php echo form_close(); ?>
			  		</div>
			  	</div>
			    
			  </div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('include/footer'); ?>