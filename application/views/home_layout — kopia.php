<?php $this->load->view('include/header'); ?>
<div class="container-fluid">
	<?php $this->load->view('inc/top_menu'); ?>
	<div class="space100"></div>
	<div class="space100"></div>
	<div class="row">
		<div class="col-lg-12">
			<div class="timeline_bar center-block">
				<div class="hrtimeline"></div>
				<div class="event_bar_top event_bar">
					<div class="event_point"></div>
					<div class="event_name" data-popover="true" data-trigger="hover" data-title="Urodziny" data-container="body" data-toggle="popover" data-placement="auto" data-content="<img src='<?php echo site_url() . 'images/niko.jpg'; ?>'>Vivamus sagittis lacus vel augue laoreet rutrum faucibus. </br><a href=''>Przeczytaj więcej...</a>">Narodziny</div>
					<div class="event_year">1234</div>
				</div>
				<div class="event_bar_bot event_bar">
					<div class="event_point"></div>
					<div class="event_name" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Narodziny</div>
					<div class="event_year">1234</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('include/footer'); ?>