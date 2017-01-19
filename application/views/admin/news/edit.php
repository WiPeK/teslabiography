<div class="row">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<h3><?php echo empty($article->id) ? 'Dodaj artykuł' : 'Edycja artykułu: ' . $article->title; ?></h3>
			</div>
		</div>
		<?php if(isset($error)): ?>
				<div class="alert alert-warning no_border_radius" role="alert">
					<?php echo $error; ?>
				</div>
			<?php endif; ?>	
		<?php if(validation_errors()): ?>
			<div class="alert alert-warning no_border_radius" role="alert">
				<?php echo validation_errors(); ?>
			</div>
		<?php endif; ?>
		<?php echo form_open_multipart(); ?>
		<div class="row">
			<div class="col-lg-2 col-lg-offset-1">
				<?php echo form_label('Logo','article_logo','class="pull-right"'); ?>
				<?php if($article->logo != '0'): ?>
					<div class="article_logo">
						<img src="<?php echo site_url() . $article->logo; ?>" alt="" class="logo_edit img-responsive">
						<span>
							<?php echo anchor('admin/news/deletelogo/' . $article->id, '<i class="glyphicon glyphicon-remove"></i>', array(
								'onclick' => "return confirm('Czy napewno chcesz usunąć logo? Wszystkie niezapisane edytowane elementy zostaną niezapisane. Zapisz edycję a następnie usuń logo. Czy nadal chcesz usunąć logo?');"
							)) ?>
						</span>
					</div>
				<?php elseif($article->logo == '0'): ?>
					<?php echo form_upload('article_logo','','class="input_file"'); ?>
				<?php endif; ?>	
			</div>
			<div class="col-lg-3 col-lg-offset-2">
				<?php echo form_label('Strona artykułu','parent_page','class="pull-right"'); ?>
				<?php echo form_dropdown('parent_page', array('wynalazki' => 'wynalazki','biografia' => 'biografia'), 'class="input_wp"'); ?>
			</div>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-lg-4 col-lg-offset-1">
				<p class="input_label"><b>Tytuł</b></p>
				<?php echo form_input('title', set_value('title', $article->title),'class="input_wp"'); ?>
			</div>
			<div class="col-lg-3">
				<p class="input_label"><b>Data publikacji</b></p>
				<?php echo form_input('pubdate', set_value('pubdate', $article->pubdate), 'class="datepicker no_border_radius"'); ?>
			</div>
			<div class="col-lg-2">
				<p class="input_label"><b>Rok wydarzenia</b></p>
				<?php echo form_input('event_year',set_value('event_year', $article->event_year),'class="input_wp"'); ?>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<?php echo form_textarea('body', set_value('body', $article->body), 'id="ckeditor"'); ?>
			</div>
		</div>
		<br>	
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<?php echo form_submit('submit', 'Zapisz', 'class="btn btn-primary btn-lg btn-block no_border_radius"'); ?>
			</div>
		</div>	
		<?php echo form_close();?>
	</div>
</div>
<script>
	$(function() {
		$('.datepicker').datepicker({ format : 'yyyy-mm-dd' });
	});
</script>