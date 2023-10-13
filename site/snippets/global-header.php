<?php
//set headline
if (isset($query)) { $headline = 'Your search for &lsquo;' . $query . '&rsquo; returned the following results:'; }
elseif($page->headline() != '') { $headline = $page->headline(); }
else { $headline = $page->title(); }
// get page depth
$depthClass = 'l' . $page->depth() . '-header';
$breadcrumbs = $site->breadcrumb();
?>

<header class="default-header <?= $depthClass ?> header u-fullwidth dark-theme" role="banner">

  <div class="g-container">
    <div class="g-col">
      <h1 class="header-headline display"><?= $headline ?></h1>

      <?php if ($page->subtitle() != ''): ?>
        <h2 class="header-subtitle delta"><?= $page->subtitle() ?></h2>
      <?php endif ?>

    </div>


  </div>

  <?php pattern('breadcrumbs') ?>
  <?php snippet('global-header-hero') ?>
  <?php snippet('global-header-graphic') ?>

</header>
