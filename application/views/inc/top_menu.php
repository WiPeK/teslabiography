<div class="row">
		<div class="col-lg-2 col-lg-offset-1">
			<a href="<?php echo site_url(); ?>">
				<img src="<?php echo site_url() . $cmscfg->logo_url; ?>" alt="logo" class="site_logo img-responsive">
			</a>
		</div>
		<div class="col-lg-7 col-lg-offset-2">
			<ul class="menu_bar">
				<li>
					<a href="<?php echo site_url(); ?>">Strona główna</a>
				</li>
				<li>
					<a href="<?php echo site_url('wynalazki'); ?>">Wynalazki</a>
				</li>
				<li>
					<a href="<?php echo site_url('biografia'); ?>">Życiorys</a>
				</li>
				<li>
					<a href="<?php echo site_url('gallery'); ?>">Galeria</a>
				</li>
				<li>
					<a href="<?php echo site_url('about'); ?>">Więcej</a>
				</li>
			</ul>
			<div class="space_citat"></div>
			<i class="fa fa-quote-left pull-left"></i>
			<p class="pull-left citate">
				<?php
					$los_cyt = array_rand($quotes_rand, 1);
					echo $quotes_rand[$los_cyt];
				?>
			</p>
			<i class="fa fa-quote-right"></i>
		</div>
	</div>