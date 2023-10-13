<?php

$limit = 2;

// get category
if($page->category() != '') {
  $category = $page->category();
  $categorySanitized = sanitize($category);
} else {
  $category = NULL;
  $categorySanitized = NULL;
}

$relatedPages = $page->siblings()->visible()->filterBy('category', $category)->not($page)->sortBy('date', 'desc')->limit($limit);
$relatedCount = $relatedPages->count();

if ($category != '' && $relatedCount >= 1):

  if($relatedCount == 1) {
    $cardLayout = 'g-6 u-margins-auto';
  } else {
    $cardLayout = 'g-6';
  }

  ?>

<div class="section cta blog-cta">
  <div class="g-col u-margins-auto u-padding-bottom-sm u-padding-top-off">
    <h2 class="display beta u-margin-bottom u-center"><?= ktStrip($page->parent()->ctaHeading()) ?></h2>
  </div>

  <?php foreach ($relatedPages as $relatedPage):
    pattern('card', array('item' => $relatedPage, 'cardLayout' => $cardLayout));
  endforeach; ?>

</div>

<?php endif ?>
