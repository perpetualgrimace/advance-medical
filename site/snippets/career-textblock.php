<?php

// check for optional variables passed from template
if(isset($layout)) { $layout = $layout; } else { $layout = 'g-8'; }

// get application link
if($page->applicationLink() != '') {
  $link = $page->applicationLink();
} else {
  $link = $pages->find('contact')->url();
}

?>

<article class="content g-col <?= $layout ?>">
  <?= $page->text()->kirbytext() ?>

  <p class="u-margin-top-lg">
    <a href="mailto:<?= $pages->find('contact')->email() ?>" class="button u-hide-below-m"><?= $page->parent()->applyButton() ?></a>
  </p>

</article>
