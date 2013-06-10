<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <link href='http://fonts.googleapis.com/css?family=Domine' rel='stylesheet' type='text/css'>

  <?php echo css('assets/styles/sass-test/stylesheets/screen.css') ?>
  <!--styles/styles.css') ?>-->

</head>

<body>

  <header>
    <h1><a href="<?php echo url() ?>"><img src="<?php echo url('assets/images/logo.png') ?>" width="115" height="41" alt="<?php echo html($site->title()) ?>" /></a></h1>
  </header>