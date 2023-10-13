<? /* <div class="g-col u-left-center list-select is-hidden">
  <p class="delta"><span class="u-hide-below-m"><?= $page->fragment1() ?> </span><? snippet('career-select-position') ?> <span class="u-hide-below-m"> <?= $page->fragment2() ?> </span><? snippet('career-select-location') ?></p>
</div>*/ ?>

<div class="g-col g-6 u-left-center u-margin-top-sm">
  <? snippet('career-select-location') ?>
</div>

<div class="g-col g-6 u-left-center u-padding-top u-hide-below-m">
  <label for="search" class="u-screenreader"><?= $page->searchText() ?></label>
  <? snippet('search-bar', array(
    'searchTarget' => 'career-list',
    'searchPlaceholder' => $page->searchText()
  )) ?>
</div>
