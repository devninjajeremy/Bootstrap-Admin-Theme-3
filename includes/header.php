<!DOCTYPE html>
<html>
  <head>
    <title><?= (isset($page_title)) ? $page_title : DEFAULT_PAGE_TITLE; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <?php 
      if(!empty($this->config->item('front_theme_name'))) : 
    ?>
        <!-- include custom <?= $this->config->item('front_theme_name'); ?> theme -->
        <link href="<?= base_url(); ?>themes/<?= $this->config->item('front_theme_name'); ?>/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>themes/<?= $this->config->item('front_theme_name'); ?>/css/min/styles.css" rel="stylesheet">
    
    <?php
      else : 
    ?>
        <!-- include custom <?= $this->config->item('default_theme_name'); ?> theme -->
        <link href="<?= base_url(); ?>themes/<?= $this->config->item('default_theme_name'); ?>/css/min/styles.css" rel="stylesheet">

    <?php endif; ?>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>