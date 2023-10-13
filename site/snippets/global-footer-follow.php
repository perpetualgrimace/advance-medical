<?php

// get social items
$items = ['Facebook', 'Twitter', 'LinkedIn']

?>

<h3 class="footer-heading delta u-upper"><?= $site->footerFollowHeading() ?></h3>

<ul class="footer-follow-list inline-list u-margin-top-sm">
  <?php
    foreach ($items as $item):

    $urlField      = $item . 'Url';
    $socialUrl     = $pages->find('contact')->$urlField();
    $socialAccount = $pages->find('contact')->$item();
    $socialIcon    = 'icons/' . strtolower($item) . '-white';

    if ($socialUrl != '' && $socialAccount != ''):
  ?>
    <li class="footer-follow-item milli">
      <a class="footer-follow-link footer-link nav-link u-inline-img" href="<?= $socialUrl . $socialAccount ?>">
        <?php snippet('svg-img', array('filename' => $socialIcon, 'class' => 'footer-follow-img')) ?>
        <?= $item ?>
      </a>
    </li>
  <?php endif; endforeach ?>
</ul>
