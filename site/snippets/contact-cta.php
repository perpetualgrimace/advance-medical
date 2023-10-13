<?php

$cta = $page->cta();
$emailAddress = $page->email();

?>

<div class="section contact-cta cta">
  <div class="g-col g-12 u-margins-auto u-padding-bottom u-padding-top-off u-center">
    <h2 class="display alpha u-margin-bottom"><?= $cta ?></h2>
    <a href="mailto:<?= $emailAddress ?>" class="contact-cta-link g-8 gamma u-margins-auto u-underline-off"><?php snippet('icon-mail.svg') ?> <span class="u-underline"><?= $emailAddress ?></span></a>
  </div>
</div>
