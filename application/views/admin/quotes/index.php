<div class="row">
	<div class="col-lg-12 col-lg-offset-1">
		<h2>Dodaj cytat</h2>
		<?php if(validation_errors()): ?>
			<div class="alert alert-warning no_border_radius" role="alert">
				<?php echo validation_errors(); ?>
			</div>
		<?php endif; ?>
		<div class="row">
			<div class="col-lg-3">
			<?php echo form_open(); ?>
			<?php echo form_label('Cytat','quote','class=""'); ?>
			<?php echo form_input('quote','','class="input_wp"'); ?>
			</div>
			<div class="col-lg-1 no_space">
				<?php echo form_submit('submit', 'Zapisz', 'class="btn btn-primary btn-lg no_border_radius"'); ?>
				<?php echo form_close(); ?>
			</div>
		</div>	
	</div>

	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
		<br><br>
			<table class="table">
				<thead>
					<tr>
						<th>Cytat</th>
						<th>Usuń</th>
					</tr>
				</thead>
				<tbody>
					<?php if(isset($quotes) && count($quotes) > 0): ?>
						<?php foreach ($quotes as $quote): ?>
							<tr>
								<th>
									<?php echo $quote->quote; ?>
								</th>
								<th>
									<a href="<?php echo site_url() . 'admin/wiki_quotes/delete_quote/' . $quote->id; ?>">
										<i class="glyphicon glyphicon-remove"></i>
									</a>
								</th>
							</tr>
						<?php endforeach; ?>
					<?php else: ?>
						<tr>
							<th>Brak cytatów</th>
							<th></th>
						</tr>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>