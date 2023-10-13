<?

// main menu items
$items = $pages->visible();

?>

<ul id="nav" class="nav-list is-collapsed">

<? foreach($items as $item): ?>

  <li class="main-nav-item nav-item<? e(in_array($item->uri(), $site->dropdownable()->yaml()), ' has-dropdown" aria-haspopup="true'); ?>">
    <a class="main-nav-link nav-link<? e($item->isOpen(), ' is-active-pg') ?>" <? e( ($item->slug() == $page->slug()), 'aria-describedby="current"' ) ?> href="<? e( $item->isOpen() && ( $page->slug() == $item->slug() ), '#main', $item->url() ) ?>">
    <? if($item->uri() == 'blog') { echo '<span class="u-hide-in-between">Medical </span>Blog'; } else { echo $item->title(); } if($item->uri() == 'about'): ?>
      <span class="u-screenreader"> <?= $site->title() ?></span>
    <? endif; ?>
    </a>


    <!-- dropdown, checked against $site->dropdownable() list -->
    <? if($item->hasChildren() &&
    in_array($item->uri(), explode(', ', $site->dropdownable()))): ?>

    <ul class="dropdown" role="group">
      <? foreach($item->children()->visible() as $child): ?>

        <li class="nav-item dropdown-item" role="menuitem">
          <a id="dropdown-item-<?= $child->slug() ?>" class="nav-link dropdown-link<? e($child->isOpen(), ' is-active-pg') ?>" <? e( ($child->slug() == $page->slug() ), 'aria-describedby="current"') ?> href="<? e( $child->isOpen() && ( $page->slug() == $child->slug() ), '#main', $child->url() ) ?>">
            <?= $child->title() ?>
          </a>
        </li><!-- dropdown-item -->

      <? endforeach ?>
    </ul><!-- dropdown -->

  <? endif ?>

  </li><!-- nav-item -->

<? endforeach ?>

</ul> <!-- nav-list -->
