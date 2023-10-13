<?php

// main menu items
if ($page->depth() == '1') {
  $items = $page->children()->visible();
  $parent = $page;
} elseif ($page->depth() == '2') {
  $items = $page->siblings()->visible();
  $parent = $page->parent();
} elseif ($page->depth() == '3') {
  $items = $page->parent()->siblings()->visible();
  $parent = $page->parent()->parent();
} else {
  $items = NULL;
  $error = 'Sidebar nav is currently configured for pages nested up to 3 levels deep. This page is level ' . $page->depth();
}



?>

<nav class="sidebar-nav g-col dark-theme">

  <h2 class="sidebar-title delta"><a class="sidebar-title-link u-underline-off<?php e($page->depth() == 1, ' is-active-pg') ?>" href="<?= $parent->url() ?>"><?= $parent ?></a></h2>

  <ul class="sidebar-nav-list">

  <?php if ($items != NULL):
    foreach($items as $item): ?>

    <li class="sidebar-nav-item nav-item">
      <a class="sidebar-nav-link nav-link<?php e($item->isOpen() && $page->depth() == 2, ' is-active-pg') ?>" href="<?php e( $item->isOpen() && ( $page->slug() == $item->slug() ), '#main', $item->url() ) ?>">
        <?= $item->title() ?>
      </a>

      <?php if($item->hasVisibleChildren()): ?>

      <ul class="nested-sidebar-nav-list" role="group">
        <?php foreach($item->children()->visible() as $child): ?>

          <li class="nested-sidebar-nav-item nav-item" role="menuitem">
            <a class="nested-sidebar-nav-link nav-link<?php e($child->isOpen(), ' is-active-pg') ?>" href="<?php e( $child->isOpen() && ( $page->slug() == $child->slug() ), '#main', $child->url() ) ?>">
              <?= $child->title() ?>
            </a>
          </li><!-- dropdown-item -->

        <?php endforeach ?>
      </ul><!-- dropdown -->

    <?php endif ?>

    </li><!-- nav-item -->

  <?php endforeach;
  endif; ?>

  </ul> <!-- nav-list -->
</nav>
