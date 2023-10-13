<?php
//set headline
if($page->position() != '') { $headline = $page->position(); }
else { $headline = $page->title(); }

// get hours
if($page->hours() != '') {
  $hours = $page->hours();
  // $hoursSanitized = sanitize($hours);
} else {
  $hours = NULL;
  // $hoursSanitized = NULL;
}

// get location
if($page->location() != '') {
  $location = $page->location();
  // $locationSanitized = sanitize($location);
} else {
  $location = NULL;
  // $locationSanitized = NULL;
}

?>

<header class="default-header header u-fullwidth dark-theme" role="banner">

  <div class="g-container">
    <div class="g-col">
      <h1 class="header-headline display"><?= $headline ?></h1>

      <?php if ($page->subtitle() != ''): ?>
        <h2 class="header-subtitle delta"><?= $page->subtitle() ?></h2>
      <?php endif ?>

      <ul class="header-meta milli u-margin-top-sm inline-list">
        <?php if ($location != NULL): ?>
          <li class="career-header-meta-item header-meta-item">
            <?php snippet('svg-img', ['filename' => 'icons/location-white', 'class' => 'career-header-icon career-header-icon-location']) ?>
            <span class="u-screenreader"><?= $page->parent()->locationLabel() ?>: </span><?= $location ?>
          </li>
        <?php endif ?>
        <?php if ($hours != NULL): ?>
          <li class="career-header-meta-item header-meta-item">
            <?php snippet('svg-img', ['filename' => 'icons/time-white', 'class' => 'career-header-icon career-header-icon-hours']) ?>
            <?= $hours ?>
          </li>
        <?php endif ?>
      </ul>

    </div>
  </div>

  <?php snippet('breadcrumbs') ?>
  <?php snippet('global-header-hero') ?>
  <?php snippet('global-header-graphic') ?>

</header>
