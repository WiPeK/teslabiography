<?php $this->load->view('include/header'); ?>
<div class="container-fluid">
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
	</div>
</div>
<?php $this->load->view('include/footer'); ?>