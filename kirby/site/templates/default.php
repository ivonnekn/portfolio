<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <article>
    <h1><?php echo html($page->heading()) ?></h1>
    <?php echo kirbytext($page->text()) ?>
	
  </article>

</section>

<?php snippet('footer') ?>