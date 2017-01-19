<?php $this->load->view('include/header'); ?>
<div class="container-fluid">
	<nav class="navbar navbar-default navbar-fixed-top fixed_bs_nav" style="margin-top:-1px;">
		<div class="container-fluid">
			<div class="menu_bar_top">
				<div class="bar_menu_top">
					<div class="row no_space">
						<div class="col-lg-6 col-xs-12 no_space">
							<ul class="ul_menu_bar">
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
						</div>
						<div class="col-lg-6 no_space">
							<p class="ciquote">
								<?php
									$los_cyt = array_rand($quotes_rand, 1);
									echo $quotes_rand[$los_cyt];
								?>
							</p>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</nav>
	<div class="container_onesite no_space">
	<div class="space100"></div>
		<div class="row">
			<div class="col-lg-5 col-xs-12">
				<img src="<?php echo site_url() . $cmscfg->logo_url; ?>" alt="logo" class="big_logo">
			</div>
			<div class="col-lg-7 col-xs-12 text-center">
				<h1 class="site_name_h"><?php echo $cmscfg->name; ?></h1>
				<p class="site_quote">Szalony naukowiec a moze geniusz...</p>
			</div>
		</div>
	</div>
	<div id="dupa"></div>
	<div class="container_timeline no_space">
		<div class="row">
			<div class="col-lg-12">
			<div class="space100"></div>
			<div class="space100"></div>
				<div class="timeline_bar center-block scrollme animateme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-scale="1.5" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">
					<div class="hrtimeline"></div>
					<?php $i = 0; while($i < count($life_event)){ ?>
						<?php if(isset($life_event[$i])): ?>
							<div class="event_bar_top event_bar event_life_jq">
								<div class="event_point"></div>
								<?php $link = site_url() . $life_event[$i]->parent_page . '#' . $life_event[$i]->event_year . $life_event[$i]->id; ?>
								<div class="event_name" data-popover="true" data-trigger="hover" data-title="<?php echo $life_event[$i]->title; ?>" data-container="body" data-toggle="popover" data-placement="right left" data-content="<img src='<?php echo site_url() . $life_event[$i]->logo; ?>'><?php echo word_limiter(strip_tags($life_event[$i]->body),10); ?></br><a href='<?php echo $link; ?>'>Przeczytaj więcej...</a>"><?php echo $life_event[$i]->title; ?></div>
								<div class="event_year"><?php echo $life_event[$i]->event_year; ?></div>
							</div>
						<?php else: ?>
						<?php break; ?>
						<?php endif; ?>	
						<?php $i++; ?>
						<?php if (isset($life_event[$i])): ?>
							<div class="event_bar_bot event_bar event_life_jq">
								<div class="event_point"></div>
								<?php $link = site_url() . $life_event[$i]->parent_page . '#' . $life_event[$i]->event_year . $life_event[$i]->id; ?>
								<div class="event_name" data-popover="true" data-trigger="hover" data-title="<?php echo $life_event[$i]->title; ?>" data-container="body" data-toggle="popover" data-placement="top" data-content="<img src='<?php echo site_url() . $life_event[$i]->logo; ?>'><?php echo word_limiter(strip_tags($life_event[$i]->body),10); ?>. </br><a href='<?php echo site_url() . $life_event[$i]->parent_page . "#page" . $i; ?>'>Przeczytaj więcej...</a>"><?php echo $life_event[$i]->title; ?></div>
								<div class="event_year"><?php echo $life_event[$i]->event_year; ?></div>
							</div>
						<?php else: ?>
						<?php break; ?>
						<?php endif; ?>					
					<?php $i++;} ?>
				</div>
			</div>
		</div>	
			<div class="space100"></div>
			<div class="space50"></div>
		<div class="row">	
			<div class="col-lg-12">
				<div class="timeline_bar center-block scrollme animateme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-scale="1.5" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">
					<div class="hrtimeline"></div>
					<?php $i = 0; while($i < count($life_event_wyn)){ ?>
						<?php if(isset($life_event_wyn[$i])): ?>
							<div class="event_bar_top event_bar event_wyn_jq">
								<div class="event_point"></div>
								<?php $link = site_url() . $life_event_wyn[$i]->parent_page . '#' . $life_event_wyn[$i]->event_year . $life_event_wyn[$i]->id; ?>
								<?php if(strlen($life_event_wyn[$i]->title) > 14): ?>
								<?php $mg_top_yr = 'top: -130px'; $mg_top_nm = 'top: -140px'; ?>
									<div style="<?php echo $mg_top_nm; ?>" class="event_name" data-popover="true" data-trigger="hover" data-title="<?php echo $life_event_wyn[$i]->title; ?>" data-container="body" data-toggle="popover" data-placement="right left" data-content="<img src='<?php echo site_url() . $life_event_wyn[$i]->logo; ?>'><?php echo word_limiter(strip_tags($life_event_wyn[$i]->body),10); ?></br><a href='<?php echo $link; ?>'>Przeczytaj więcej...</a>"><?php echo $life_event_wyn[$i]->title; ?></div>
									<div style="<?php echo $mg_top_yr; ?>" class="event_year"><?php echo $life_event_wyn[$i]->event_year; ?></div>
								<?php else: ?>
									<div class="event_name" data-popover="true" data-trigger="hover" data-title="<?php echo $life_event_wyn[$i]->title; ?>" data-container="body" data-toggle="popover" data-placement="right left" data-content="<img src='<?php echo site_url() . $life_event_wyn[$i]->logo; ?>'><?php echo word_limiter(strip_tags($life_event_wyn[$i]->body),10); ?></br><a href='<?php echo $link; ?>'>Przeczytaj więcej...</a>"><?php echo $life_event_wyn[$i]->title; ?></div>
									<div class="event_year"><?php echo $life_event_wyn[$i]->event_year; ?></div>
								<?php endif; ?>							
								
							</div>
						<?php else: ?>
						<?php break; ?>
						<?php endif; ?>	
						<?php $i++; ?>
						<?php if (isset($life_event_wyn[$i])): ?>
							<div class="event_bar_bot event_bar event_wyn_jq">
								<div class="event_point"></div>
								<?php $link = site_url() . $life_event_wyn[$i]->parent_page . '#' . $life_event_wyn[$i]->event_year . $life_event_wyn[$i]->id; ?>
								<div class="event_name" data-popover="true" data-trigger="hover" data-title="<?php echo $life_event_wyn[$i]->title; ?>" data-container="body" data-toggle="popover" data-placement="top" data-content="<img src='<?php echo site_url() . $life_event_wyn[$i]->logo; ?>'><?php echo word_limiter(strip_tags($life_event_wyn[$i]->body),10); ?>. </br><a href='<?php echo site_url() . $life_event_wyn[$i]->parent_page . "#page" . $i; ?>'>Przeczytaj więcej...</a>"><?php echo $life_event_wyn[$i]->title; ?></div>
								<div class="event_year"><?php echo $life_event_wyn[$i]->event_year; ?></div>
							</div>
						<?php else: ?>
						<?php break; ?>
						<?php endif; ?>					
					<?php $i++;} ?>
				</div>
			</div>
			<div class="space100"></div>
			<div class="space100"></div>
			<div class="space100"></div>
		</div>
	</div>
	<footer class="footer scrollme">
		<div class="container_footer animateme" data-when="enter" data-from="1" data-to="0" data-rotatex="90" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(9.4deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">
			<div style="color:white;" class="row">
				<div class="col-lg-4">
					<div class="foot_desc">
						<?php echo $cmscfg->about; ?>
					</div>
				</div>
				<div class="col-lg-4"></div>
				<div class="col-lg-4">
					<a class="cont_foot pull-right" href="<?php echo site_url('about#support'); ?>">
						<button type="button" class="btn btn-primary btn-lg no_border_radius foot_btn">Kontakt</button>
					</a>
				</div>
			</div>
		</div>
	</footer>
</div>
<!-- <div class="container-fluid">
	<?php $this->load->view('inc/top_menu'); ?>
	<div class="space100"></div>
	<div class="space100"></div>
	<div class="row">
		<div class="col-lg-12">
			<div class="timeline_bar center-block">
				<div class="hrtimeline"></div>
				<?php $i = 0; while($i < count($life_event)){ ?>
					<?php if(isset($life_event[$i])): ?>
						<div class="event_bar_top event_bar">
							<div class="event_point"></div>
							<?php $link = site_url() . $life_event[$i]->parent_page . '#page' . $i; ?>
							<div class="event_name" data-popover="true" data-trigger="hover" data-title="<?php echo $life_event[$i]->title; ?>" data-container="body" data-toggle="popover" data-placement="right left" data-content="<img src='<?php echo site_url() . $life_event[$i]->logo; ?>'><?php echo word_limiter(strip_tags($life_event[$i]->body),10); ?></br><a href='<?php echo $link; ?>'>Przeczytaj więcej...</a>"><?php echo $life_event[$i]->title; ?></div>
							<div class="event_year"><?php echo $life_event[$i]->event_year; ?></div>
						</div>
					<?php else: ?>
					<?php break; ?>
					<?php endif; ?>	
					<?php $i++; ?>
					<?php if (isset($life_event[$i])): ?>
						<div class="event_bar_bot event_bar">
							<div class="event_point"></div>
							<?php $link = site_url() . $life_event[$i]->parent_page . '#page' . $i; ?>
							<div class="event_name" data-popover="true" data-trigger="hover" data-title="<?php echo $life_event[$i]->title; ?>" data-container="body" data-toggle="popover" data-placement="top" data-content="<img src='<?php echo site_url() . $life_event[$i]->logo; ?>'><?php echo word_limiter(strip_tags($life_event[$i]->body),10); ?>. </br><a href='<?php echo site_url() . $life_event[$i]->parent_page . "#page" . $i; ?>'>Przeczytaj więcej...</a>"><?php echo $life_event[$i]->title; ?></div>
							<div class="event_year"><?php echo $life_event[$i]->event_year; ?></div>
						</div>
					<?php else: ?>
					<?php break; ?>
					<?php endif; ?>					
				<?php $i++;} ?>
			</div>
		</div>
		<div class="space100"></div>
		<div class="space100"></div>
		<div class="space100"></div>
		<div class="col-lg-12">
			<div class="timeline_bar center-block">
				<div class="hrtimeline"></div>
				<?php $i = 0; while($i < count($life_event_wyn)){ ?>
					<?php if(isset($life_event_wyn[$i])): ?>
						<div class="event_bar_top event_bar">
							<div class="event_point"></div>
							<?php $link = site_url() . $life_event_wyn[$i]->parent_page . '#page' . $i; ?>
							<?php if(strlen($life_event_wyn[$i]->title) > 14): ?>
							<?php $mg_top_yr = 'top: -130px'; $mg_top_nm = 'top: -140px'; ?>
								<div style="<?php echo $mg_top_nm; ?>" class="event_name" data-popover="true" data-trigger="hover" data-title="<?php echo $life_event_wyn[$i]->title; ?>" data-container="body" data-toggle="popover" data-placement="right left" data-content="<img src='<?php echo site_url() . $life_event_wyn[$i]->logo; ?>'><?php echo word_limiter(strip_tags($life_event_wyn[$i]->body),10); ?></br><a href='<?php echo $link; ?>'>Przeczytaj więcej...</a>"><?php echo $life_event_wyn[$i]->title; ?></div>
								<div style="<?php echo $mg_top_yr; ?>" class="event_year"><?php echo $life_event_wyn[$i]->event_year; ?></div>
							<?php else: ?>
								<div class="event_name" data-popover="true" data-trigger="hover" data-title="<?php echo $life_event_wyn[$i]->title; ?>" data-container="body" data-toggle="popover" data-placement="right left" data-content="<img src='<?php echo site_url() . $life_event_wyn[$i]->logo; ?>'><?php echo word_limiter(strip_tags($life_event_wyn[$i]->body),10); ?></br><a href='<?php echo $link; ?>'>Przeczytaj więcej...</a>"><?php echo $life_event_wyn[$i]->title; ?></div>
								<div class="event_year"><?php echo $life_event_wyn[$i]->event_year; ?></div>
							<?php endif; ?>							
							
						</div>
					<?php else: ?>
					<?php break; ?>
					<?php endif; ?>	
					<?php $i++; ?>
					<?php if (isset($life_event_wyn[$i])): ?>
						<div class="event_bar_bot event_bar">
							<div class="event_point"></div>
							<?php $link = site_url() . $life_event_wyn[$i]->parent_page . '#page' . $i; ?>
							<div class="event_name" data-popover="true" data-trigger="hover" data-title="<?php echo $life_event_wyn[$i]->title; ?>" data-container="body" data-toggle="popover" data-placement="top" data-content="<img src='<?php echo site_url() . $life_event_wyn[$i]->logo; ?>'><?php echo word_limiter(strip_tags($life_event_wyn[$i]->body),10); ?>. </br><a href='<?php echo site_url() . $life_event_wyn[$i]->parent_page . "#page" . $i; ?>'>Przeczytaj więcej...</a>"><?php echo $life_event_wyn[$i]->title; ?></div>
							<div class="event_year"><?php echo $life_event_wyn[$i]->event_year; ?></div>
						</div>
					<?php else: ?>
					<?php break; ?>
					<?php endif; ?>					
				<?php $i++;} ?>
			</div>
		</div>
	</div>
	<div class="space50"></div>
</div> -->
<?php $this->load->view('include/footer'); ?>