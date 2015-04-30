<div class="header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
			<!-- Logo -->
				<div class="logo">
					<h1><a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>themes/<?= $this->config->item('front_theme_name'); ?>/images/circle_logo.png" alt="RavenCMS" style="height:35px;" /></a></h1>
				</div>
			</div>
			<div class="col-md-5">
				<div class="row">
					<div class="col-lg-12">
						<?= modules::run('geonosis/company_switcher'); ?>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<?= modules::run('geonosis/utility_nav'); ?>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>