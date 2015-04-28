
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php if(!empty($this->config->item('front_theme_name'))) : ?>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    	<script src="<?= base_url(); ?>themes/<?= $this->config->item('front_theme_name'); ?>/js/custom.js"></script>
    <?php else : ?>
    	<script src="<?= base_url(); ?>themes/<?= $this->config->item('front_theme_name'); ?>/js/custom.js"></script>
	<?php endif; ?>
  </body>
</html>