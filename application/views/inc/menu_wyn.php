<img src="<?php echo site_url() . $cmscfg->logo_url; ?>" alt="logo" class="img-responsive">
<ul class="menu_life">
	<?php foreach ($page_data as $pg_data): ?>
		<li>
			<?php if ($this->uri->segment(1) == 'wynalazki'): ?>
				<a href="<?php echo site_url() . 'wynalazki#' . $pg_data->event_year . $pg_data->id; ?>">
					<?php echo $pg_data->title; ?>
				</a>
			<?php elseif($this->uri->segment(1) == 'biografia'): ?>
				<a href="<?php echo site_url() . 'biografia#' . $pg_data->event_year . $pg_data->id; ?>">
					<?php echo $pg_data->title; ?>
				</a>
			<?php endif ?>
		</li>
	<?php endforeach ?>
</ul>