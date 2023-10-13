<?php

// main menu items
$items = $pages->listed();
$i = 0;

?>


<h3 class="footer-heading delta u-upper"><?= $site->footerNavHeading() ?></h3>

<ul class="footer-nav-list u-margin-top-sm">
  <?php foreach($items as $item):
    $i++;
  ?>

    <li class="footer-nav-item">
      <a class="footer-link footer-nav-link nav-link<?php e($item->isOpen(), ' is-active-pg') ?>" <?php e( ($item->slug() == $page->slug()), 'aria-describedby="current"' ) ?> href="<?php e( $item->isOpen() && ( $page->slug() == $item->slug() ), '#main', $item->url() ) ?>">
      <?= $item->title(); if($item->uri() == 'about'): ?>
        <span class="u-screenreader"> <?= $site->title() ?></span>
      <?php endif; ?>
      </a>
    </li>
    <?php if ($i == 4) { echo '<br class="footer-nav-break">'; } ?>

  <?php endforeach ?>
</ul>
