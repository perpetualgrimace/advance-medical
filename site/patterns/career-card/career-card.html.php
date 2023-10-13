<?php

// get hours
if($item->hours() != '') {
  $hours = $item->hours();
  // $hoursSanitized = sanitize($hours);
} else {
  $hours = NULL;
  // $hoursSanitized = NULL;
}

// get location
if($item->location() != '') {
  $location = $item->location();
  $locationSanitized = sanitize($location);
} else {
  $location = NULL;
  $locationSanitized = NULL;
}

// get position
if($item->position() != '') {
  $position = $item->position();
  $positionSanitized = sanitize($position);
} else {
  $position = NULL;
  $positionSanitized = NULL;
}

// get layout
if($cardLayout != '') {
  $cardLayout = $cardLayout;
} else {
  $cardLayout = 'g-6';
}

?>

<article class="career-card-container card-container g-col <?= $cardLayout ?>" data-location="<?= $locationSanitized ?>" data-position="<?= $positionSanitized ?>">
  <div class="career-card-inner card-inner">

    <div class="career-card-caption card-caption u-margin-top-off">
      <a class="career-card-title card-title display u-left" href="<?= $item->url() ?>">
        <?= $item->position() ?>
      </a>
      <ul class="career-card-meta-list card-meta milli u-margin-top-sm inline-list">
      <?php if ($location != NULL): ?>
        <li class="career-card-meta-item card-meta-item">
          <?php snippet('svg-img', ['filename' => 'icons/location-gray', 'class' => 'career-card-icon career-card-icon-location']) ?>
          <span class="u-screenreader">Location: </span><?= $location ?>
        </li>
      <?php endif ?>
      <?php if ($hours != NULL): ?>
        <li class="career-card-meta-item card-meta-item">
          <?php snippet('svg-img', ['filename' => 'icons/time-gray', 'class' => 'career-card-icon career-card-icon-hours']) ?>
          <span class="u-screenreader">Hours: </span><?= $hours ?>
        </li>
      <?php endif ?>
    </ul>
      <a href="<?= $item->url() ?>" class="career-card-link card-link card-more-link milli" tabindex="-1"><?= $pages->find('careers')->moreLink() ?> &rsaquo;</a>
    </div>

  </div>
</article>
