<?php $this->load->view('include/header'); ?>
<div id="page_full">
	<div id="home" class="home">
		<div class="container-fluid no_space">
			<div class="row">
				<div class="col-lg-2">
					<?php $this->load->view('inc/menu_gall'); ?>
				</div>
				<div class="col-lg-10">
				<div class="space100"></div>
				<div class="space100"></div>
					<div class="circle_bar_about">
						<div class="row">
							<div class="col-lg-4">
								<a href="#technologie">Technologie</a>
							</div>
							<div class="col-lg-4">
								<a href="#autor">Autor</a>
							</div>
							<div class="col-lg-4">
								<a href="#support">Kontakt</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="technologie" style="overflow-y: auto; overflow-x: hidden;">
		<div class="container-fluid no_space">
			<div class="row">
				<div class="col-lg-2">
					<?php $this->load->view('inc/menu_gall'); ?>
				</div>
				<div class="col-lg-10">
					<div class="space50"></div>
					<div class="techn_tiles">
						<div class="row">
							<div class="col-lg-3">		
								<div class="thumbnail no_border_radius">
									<img class="img-responsive" src="<?php echo site_url() . 'assets/technologie/codeigniter-logo.png'; ?>" alt="codeigniter">
									<div class="caption">
										<h3>Codeigniter</h3>
										<p>Framework PHP, na którym został zbudowany CMS</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3">		
								<div class="thumbnail no_border_radius">
									<img class="img-responsive" src="<?php echo site_url() . 'assets/technologie/wipek.png'; ?>" alt="wipekcms">
									<div class="caption">
										<h3>WiPeK CMS</h3>
										<p>Autorski system zarządzania treścią stworzony przez Krzysztofa Adamczyka</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3">		
								<div class="thumbnail no_border_radius">
									<img class="img-responsive" src="<?php echo site_url() . 'assets/technologie/html.png'; ?>" alt="html">
									<div class="caption">
										<h3>HTML</h3>
										<p>Niezbędny przy tworzeniu stron www</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3">		
								<div class="thumbnail no_border_radius">
									<img class="img-responsive" src="<?php echo site_url() . 'assets/technologie/css.png'; ?>" alt="css3">
									<div class="caption">
										<h3>CSS3</h3>
										<p>Służy do stylizacji graficznej strony</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3">		
								<div class="thumbnail no_border_radius">
									<img class="img-responsive" src="<?php echo site_url() . 'assets/technologie/boot.jpg'; ?>" alt="bootstrap">
									<div class="caption">
										<h3>Twitter Bootstrap 3</h3>
										<p>Framework HTML, zawierający dużo gotowych rozwiązań w tym najważniejsze RWD</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3">		
								<div class="thumbnail no_border_radius">
									<img class="img-responsive" src="<?php echo site_url() . 'assets/technologie/jq.png'; ?>" alt="jQuery">
									<div class="caption">
										<h3>jQuery</h3>
										<p>Najsłynniejsza biblioteka Java Script</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3">		
								<div class="thumbnail no_border_radius">
									<img class="img-responsive" src="<?php echo site_url() . 'assets/technologie/less.png'; ?>" alt="less">
									<div class="caption">
										<h3>Less</h3>
										<p>Środowisko, które jest kompilowane do css3</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="back_home_scr center-block">
						<a class="center-block" href="#home">Wróć</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="autor" style="overflow-y: auto; overflow-x:hidden;">
		<div class="container-fluid no_space">
			<div class="row">
				<div class="col-lg-2">
					<?php $this->load->view('inc/menu_gall'); ?>
				</div>
				<div class="col-lg-10">
					<div class="contact_bar">
						<div class="row">
							<div class="col-lg-4">
								<div class="space100"></div>
								<div class="space100"></div>
								<div class="space100"></div>
								<img src="" height="256" width="220" alt="" id="foto" class="img-thumbnail center-block no_border_radius">
									
									<hr>
									<div class="well no_border_radius">
										<strong class="text-center">Nikola Tesla</strong> <br>
											Strona wykonana na potrzeby XIII Powiatowego Konkursu Informatycznego<p></p>
									</div>
									
									<div class="well no_border_radius">
										<p class="wellkontakt">
											<!-- Opiekun: Mgr. Inż. M. Armata -->
										</p>
									</div>
							</div>
							<div class="col-lg-7">
								<h1 class="page_bar_head text-center">Informacje</h1>
								<div class="well well-sm wellkontakt no_border_radius">
										<strong>Krzysztof</strong>
										<strong>Adamczyk</strong>
									</div>
									<div class="well well-sm wellkontakt no_border_radius">
										<strong>Zespół Szkół Ekonomicznych im. Mikołaja Kopernika w Skarżysku Kamiennej</strong>
									</div>
									<div class="well well-sm wellkontakt no_border_radius">
										<strong>Klasa IVa</strong>
										<br>
										<strong>profil Technik Informatyk</strong>
									</div>
									<div class="well well-sm wellkontakt no_border_radius">
										<strong>Telefon &nbsp;</strong>
										 	791-517-315
									</div>
									<div class="well well-sm wellkontakt no_border_radius">
									<strong>E-mail &nbsp;</strong>
										 kris95@onet.pl <br>
										 <div class="dremail">wipekxxx@gmail.com</div>
									</div>
									<div class="well well-sm wellkontakt no_border_radius">
									<strong>Facebook &nbsp;</strong>
										 <a href="https://www.facebook.com/krzysiek.adamczyk.5?ref=tn_tnmn">Zobacz</a>
									</div>
									<div class="well well-sm wellkontakt no_border_radius">
									<strong>Skype &nbsp;</strong>
										 <a href="skype:kris9553?call">Zadzwoń</a>
									</div>
							</div>
						</div>		
					</div>
					<div class="clearfix"></div>
					<div class="back_home_scr center-block">
						<a class="center-block" href="#home">Wróć</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="support">
		<div class="container-fluid no_space">
			<div class="row">
				<div class="col-lg-2">
					<?php $this->load->view('inc/menu_gall'); ?>
				</div>
				<div class="col-lg-10">
					<h1 class="page_bar_head text-center">Kontakt</h1>
					<div class="contact_form center-block">
						<?php echo form_open(site_url('support')); ?>
						<?php echo form_label('Email kontaktowy:', 'email_support', ''); ?>
						<div class="clearfix"></div>
						<?php echo form_input('email_support','','class="input_wp input_supp"'); ?>
						<div class="clearfix"></div>
						<div class="space50"></div>
						<?php echo form_label('Treść wiadomości:', 'support_body', ''); ?>
						<div class="clearfix"></div>
						<?php echo form_textarea('support_body','','class="input_wp input_supp"'); ?>
						<div class="clearfix"></div>
						<?php echo form_submit('submit', 'Wyślij wiadomość', 'class="btn btn-primary btn-lg btn-block no_border_radius btn_supp"'); ?>
						<?php echo form_close(); ?>
					</div>
					<div class="clearfix"></div>
					<div class="back_home_scr center-block">
						<a class="center-block" href="#home">Wróć</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('include/footer'); ?>