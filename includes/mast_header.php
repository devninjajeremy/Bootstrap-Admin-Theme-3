<div class="header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-5">
			<!-- Logo -->
				<div class="logo">
					<h1><a href="<?= base_url(); ?>">Bootstrap Admin Theme</a></h1>
				</div>
			</div>
			<div class="col-md-5">
				<div class="row">
					<div class="col-lg-12">
						<?= modules::run('geonosis/search'); ?>
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<?= modules::run('geonosis/utility_nav'); ?>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>