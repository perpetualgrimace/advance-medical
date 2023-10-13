<?php

// main menu items
$items = $pages->listed();

?>

<ul id="nav" class="nav-list is-collapsed">

<?php foreach($items as $item): ?>

  <li class="main-nav-item nav-item<?php e(in_array($item->uri(), $site->dropdownable()->yaml()), ' has-dropdown" aria-haspopup="true'); ?>">
    <a class="main-nav-link nav-link<?php e($item->isOpen(), ' is-active-pg') ?>" <?php e( ($item->slug() == $page->slug()), 'aria-describedby="current"' ) ?> href="<?php e( $item->isOpen() && ( $page->slug() == $item->slug() ), '#main', $item->url() ) ?>">
    <?php if($item->uri() == 'blog') { echo '<span class="u-hide-in-between">Medical </span>Blog'; } else { echo $item->title(); } if($item->uri() == 'about'): ?>
      <span class="u-screenreader"> <?= $site->title() ?></span>
    <?php endif; ?>
    </a>


    <!-- dropdown, checked against $site->dropdownable() list -->
    <?php if($item->hasChildren() &&
    in_array($item->uri(), explode(', ', $site->dropdownable()))): ?>

    <ul class="dropdown" role="group">
      <?php foreach($item->children()->listed() as $child): ?>

        <li class="nav-item dropdown-item" role="menuitem">
          <a id="dropdown-item-<?= $child->slug() ?>" class="nav-link dropdown-link<?php e($child->isOpen(), ' is-active-pg') ?>" <?php e( ($child->slug() == $page->slug() ), 'aria-describedby="current"') ?> href="<?php e( $child->isOpen() && ( $page->slug() == $child->slug() ), '#main', $child->url() ) ?>">
            <?= $child->title() ?>
          </a>
        </li><!-- dropdown-item -->

      <?php endforeach ?>
    </ul><!-- dropdown -->

  <?php endif ?>

  </li><!-- nav-item -->

<?php endforeach ?>

</ul> <!-- nav-list -->
