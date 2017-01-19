<?php $this->load->view('include/header'); ?>
<div class="container-fluid no_space">
	<div class="menu_bar_page">
		<?php $this->load->view('inc/top_menu'); ?>
	</div>
	
	<ul class="menu_left">
		<?php $cnt_pg = count($page_data); ?>
		<?php 
			for($i=0;$i<$cnt_pg;$i++)
			{
				echo '<li>' . anchor(site_url() . 'wynalazki#page' . $i, $page_data[$i]->title) . '</li>';
			} 
		?>
	</ul>
	<div id="pagepiling">
		<?php if(isset($page_data)): ?>
			<?php $i=1; foreach ($page_data as $pg_data): ?>
				<div class="section" id="<?php echo 'section' . $i; ?>">
					<div class="space50"></div>
					<div class="space100"></div>
					<div class="wynalazek_bar">
						<h1><?php echo $pg_data->title; ?></h1>
						<?php echo $pg_data->body; ?>
					</div>
					<?php $i++; ?>
				</div>
			<?php endforeach ?>
		<?php endif; ?>
	</div>

</div>	
<?php $this->load->view('include/footer'); ?>