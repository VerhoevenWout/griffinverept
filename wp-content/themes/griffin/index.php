
	<?php get_header(); ?>
		<?php if ( $successSessionIsSet ): ?>
			<div class="alert alert-success">
				<div class="col-md-4">
					<p class="text-center"><?= $successMessage?></p>
					test
				</div>
			</div>
		<?php endif ?>
		<?php if ( $errorSessionIsSet ): ?>
			<div class="alert alert-danger ">
				<div class="col-md-4">
					<p class="text-center"><?= $errorMessage?></p>
				</div>
			</div>
		<?php endif ?>

		<div id="content" class="">
			<div id="header">
				<div id="headerContent" class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0">
					<img src="<?php bloginfo('template_url'); ?>/img/quote.png">
				</div>
			</div>

			<div id="section1" class="row">
				<div class="fadeInScroll">
					<div class="section col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0 noColPadding">
						<div id="representationContainer">

							<div class="col-md-12 col-sm-12">
									<div class="col-md-4 col-md-offset-4 col-sm-12 col-xs-12">
										<div id="representation">
											<div class="row">
												<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
													<div class="circle-avatar"></div>
												</div>
											</div>
											<h3>
												Griffin Verept
											</h3>
											<p>
												Advocaat
											</p>
											<div id="socialIcons">
												<a class="mail" href="#section4">
													<!-- <i class="fa fa-envelope-o" aria-hidden="true"></i> -->
													<i class="fa fa-envelope-open-o" aria-hidden="true"></i>
												</a>
												<a class="twitter" target="_blank" href="https://twitter.com/vereptg">
													<i class="fa fa-twitter" aria-hidden="true"></i>
												</a>
												<a class="linkedIn" target="_blank" href="https://be.linkedin.com/in/griffin-verept-a467b5a4">
													<i class="fa fa-linkedin" aria-hidden="true"></i>
												</a>
											</div>

										</div>
									</div>
							</div>

							<div id="representationText" class="extraPadding col-md-10 col-md-offset-1 col-sm-12">
								<h3>
									Ongeremd.
								</h3>
								<p>
									<?php if(function_exists('show_text_block')) { echo show_text_block('representationText1', false); } ?>
								</p>
								<h3 class="extraPaddingTop">
									Strijdlust.
								</h3>
								<p>
									<?php if(function_exists('show_text_block')) { echo show_text_block('representationText2', false); } ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="section2" class="row">
				<div class="fadeInScroll">
					<div class="section col-md-12 col-md-offset-0 col-xs-12 col-xs-offset-0 noColPadding">
						<div class="col-md-12">

							<div id="materiesContainer">
								<div class="col-md-12 extraPadding">
								<h3 class="text-center">
									MATERIES
								</h3>
							</div>
								<div class="col-md-10 col-md-offset-1 col-sm-12 iconContainerMateries">
									<div class="col-md-4 col-sm-4 col-xs-4">
										<img id="materiesIcon1" src="<?php bloginfo('template_url'); ?>/img/icons/courthouse.png" class="materiesImg img-responsive center-block">
										<p class="text-center iconText">Burgerlijk recht</p>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4">
										<img id="materiesIcon2" src="<?php bloginfo('template_url'); ?>/img/icons/libra.png" class="materiesImg img-responsive center-block">
										<p class="text-center iconText">Handelsrecht</p>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4">
										<img id="materiesIcon3" src="<?php bloginfo('template_url'); ?>/img/icons/justice.png" class="materiesImg img-responsive center-block">
										<p class="text-center iconText">Strafrecht</p>
									</div>
								</div>

								<div id="materiesText" class="col-md-8 col-md-offset-2 col-sm-12">
									<?php if(function_exists('show_text_block')) { echo show_text_block('materies', false); } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="section3" class="row">
				<div class="fadeInScroll">
					<div class="section col-md-12 col-md-offset-0 col-xs-12 col-xs-offset-0 noColPadding">
						<div class="col-md-12">

							<div id="ereloonContainer">
							<div class="col-md-12 extraPadding">
								<h3 class="text-center">
									ERELOON
								</h3>
							</div>
								<div class="col-md-10 col-md-offset-1 col-sm-12 iconContainerEreloon">
									<div class="col-md-4 col-sm-4 col-xs-4">
										<img id="ereloonIcon1" src="<?php bloginfo('template_url'); ?>/img/icons/agreement.png" class="ereloonImg img-responsive center-block">
										<p class="text-center iconText">Kosten</p>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4">
										<img id="ereloonIcon2" src="<?php bloginfo('template_url'); ?>/img/icons/funds.png" class="ereloonImg img-responsive center-block">
										<p class="text-center iconText">Ereloon</p>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4">
										<img id="ereloonIcon3" src="<?php bloginfo('template_url'); ?>/img/icons/wallet.png" class="ereloonImg img-responsive center-block">
										<p class="text-center iconText">Forfait</p>
									</div>
								</div>

								<div id="ereloonText" class="col-md-8 col-md-offset-2 col-sm-12 ">
									<?php if(function_exists('show_text_block')) { echo show_text_block('ereloon', false); } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="section4" class="row">
				<div class="fadeInScroll">
					<div class="section col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0 noColPadding">

						<div id="contactContainer">
						<div class="col-md-12 extraPadding">
							<h3 class="text-center">
								CONTACT
							</h3>
						</div>
							<div class="col-md-6 col-md-offset-0 col-sm-12">
								<p>ADVOCATENKANTOOR GRIFFIN VEREPT</p>
								<div id="map"></div>
								<div id="contactText">
									<?php if(function_exists('show_text_block')) { echo show_text_block('contact', false); } ?>
								</div>
							</div>

							<div class="col-md-6 col-md-offset-0 col-sm-12 col-xs-12">
								<?php echo do_shortcode("[huge_it_forms id='3']"); ?>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	<?php get_footer(); ?>
