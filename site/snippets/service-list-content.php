<?php

// check for optional variables passed from template
if(isset($layout)) { $layout = $layout; } else { $layout = 'g-9'; }

// get children
$children = $page->children()->listed();

?>

<article class="g-col <?= $layout ?>">
  <?= $page->text()->kirbytext() ?>

  <ul class="teaser-list u-margin-top-lg">
    <?php foreach ($children as $child): ?>
      <?php snippet('teaser', ['item' => $child]) ?>
    <?php endforeach ?>
  </ul>

</article>
