<?php

// check for optional variables passed from template
if(isset($layout)) { $layout = $layout; } else { $layout = 'g-12'; }
if($page->cta() != '') { $cta = $page->cta(); } else { $cta = $site->cta(); }
if($page->ctaButton() != '') { $ctaButton = $page->ctaButton(); } else { $ctaButton = $site->ctaButton(); }
if($page->ctaLink() != '') { $ctaLink = $page->ctaLink(); } else { $ctaLink = $site->ctaLink(); }
if($page->ctaText() != '') { $ctaText = $page->ctaText(); } else { $ctaText = NULL; }
if (isset($class)) { $class = $class; } else { $class = NULL; }

?>

<div class="section cta <?= $class ?>">
  <div class="g-col <?= $layout ?> u-margins-auto u-padding-bottom-sm u-padding-top-off u-center">
    <h2 class="display alpha u-margin-bottom"><?= $cta ?></h2>
    <?php if ($ctaText != NULL): ?>
      <p class="g-8 u-margins-auto"><?= $ctaText ?></p>
    <?php endif ?>
    <p>
      <a class="button u-margin-bottom" href="<?= $pages->find($ctaLink)->url() ?>">
        <?= $ctaButton ?>
      </a>
    </p>
  </div>
</div>
