<?php $this->load->view('include/header'); ?> <br>
<div id="page_full">
		<!-- str główna wynalazki -->
	<div id="home" class="home">
		<div class="container-fluid no_space">
			<div class="row no_space">
					<div class="col-lg-3 no_space">
						<img src="<?php echo site_url() . $cmscfg->logo_url; ?>" alt="logo" class="logo_wynalazki">
					</div>
					<div class="col-lg-9 no_space">
						<h1 class="page_bar_head text-center">
							Biografia
						</h1>
						<div class="space50"></div>
						<div class="row">
							<div class="col-lg-12">
								<ul class="ul_wyn">
									<?php if(isset($page_data)): ?>
										<?php $i=1; foreach ($page_data as $pg_data): ?>
											<li class="text-center">
												<a href="<?php echo site_url() . 'biografia#' . $pg_data->event_year . $pg_data->id; ?>">
													<div class="circle_year center-block"><?php echo $pg_data->event_year; ?></div>
													<?php echo $pg_data->title; ?>
												</a>
											</li>
										<?php endforeach ?>
									<?php endif; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>	
		</div>
	</div>

<?php foreach ($page_data as $pg_data): ?>
	<div id="<?php echo $pg_data->event_year . $pg_data->id; ?>" style="overflow-y: auto;">
		<div class="container-fluid no_space">
			<div class="row no_space">
				<div class="col-lg-2">
					<?php $this->load->view($menu_view); ?>
				</div>
				<div class="col-lg-10">
					<?php $this->load->view($menu_top_view); ?>
					<div class="space100"></div>
					<h1><?php echo $pg_data->title; ?></h1>
					<div class="wynalazek_bar_full">
						<?php echo $pg_data->body; ?>
					</div>
					<div class="clearfix"></div>
					<div class="back_home_scr center-block">
						<a class="center-block" href="#home">Wróć</a>
					</div>
				</div>
			</div>
		</div>	
	</div>
<?php endforeach ?>

</div>
<script>
	$("body").css("background","url(<?php echo site_url('images/photography.png'); ?>)");
	$("body").css("overflow-x","hidden");
	$("body").css("overflow-y","hidden");
</script>
<?php $this->load->view('include/footer'); ?>