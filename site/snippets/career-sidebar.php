<?

// check for optional variables passed from template
if(isset($layout)): $layout = $layout; else: $layout = 'g-4'; endif;

// get application link
if($page->applicationLink() != '') {
  $link = $page->applicationLink();
} else {
  $link = $pages->find('contact')->url();
}

// search text
$searchText = $page->parent()->searchText();

?>

<aside class="sidebar g-col u-center <?= $layout ?>">
  <p>
    <a href="mailto:<?= $pages->find('contact')->email() ?>" class="button block-button"><?= $page->parent()->applyButton() ?><span class="u-screenreader">: <?= $page->title() ?></span></a>

    <span class="delta">or<label for="search" class="u-screenreader"><?= $searchText ?></label></span>
  </p>

  <? snippet('search-bar', array(
    'searchTarget' => 'career-list',
    'searchPlaceholder' => $searchText
  )) ?>
</aside>
