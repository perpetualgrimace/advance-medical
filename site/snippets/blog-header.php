<?php
//set headline
if($page->headline() != '') { $headline = $page->headline(); }
else { $headline = $page->title(); }

// get category
if($page->category() != '') {
  $category = $page->category();
  $categorySanitized = sanitize($category);
} else {
  $category = NULL;
  $categorySanitized = NULL;
}

?>

<header class="default-header header u-fullwidth dark-theme" role="banner">

  <div class="g-container">
    <div class="g-col">
      <h1 class="header-headline display"><?= $headline ?></h1>

      <?php if ($page->subtitle() != ''): ?>
        <h2 class="header-subtitle gamma"><?= $page->subtitle() ?></h2>
      <?php endif ?>

      <?php if ($page->category() != ''): ?>
        <p class="header-meta milli"><?= $page->parent()->categoryHeading() ?> <a href="<?= $site->url() . '/blog#' . $categorySanitized ?>" class="header-meta-link"><?= $page->category() ?></a></p>
      <?php endif ?>

    </div>
  </div>

  <?php pattern('breadcrumbs') ?>
  <?php snippet('global-header-hero') ?>
  <?php snippet('global-header-graphic') ?>

</header>
