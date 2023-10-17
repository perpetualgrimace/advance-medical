<?php

// custom thumbnail image
if ($item->thumbImg() != '') {
  $thumbImg = $item->image($item->thumbImg())->url();
  // fallback image
} elseif ($page->image('placeholder.png')) {
  $thumbImg = $page->image('placeholder.png')->url();
} else {
  $thumbImg = NULL;
}

if ($item->description() != '') {
  $teaserText = $item->description();
} else {
  $teaserText = $item->text()->chopper(120);
}

?>


<li class="teaser-item">

  <a href="<?= $item->url() ?>" class="teaser-thumb" tabindex="-1">
    <img class="teaser-img" src="<?= $thumbImg ?>" alt="" draggable="false">
  </a>

  <div class="teaser-caption">

    <a href="<?= $item->url() ?>" class="teaser-title display gamma u-underline-off">
      <?= $item->title() ?>
    </a>

    <p class="teaser-blurb delta">
      <?= $teaserText ?>
    </p>

    <a href="<?= $item->url()?>" class="more-link teaser-more-link milli" tabindex="-1">
      Learn more &rsaquo;
    </a>

  </div>
</li>
