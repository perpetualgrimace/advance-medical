<?

$limit = 2;

// get location
if($page->location() != '') {
  $location = $page->location();
  $locationSanitized = sanitize($location);
} else {
  $location = NULL;
  $locationSanitized = NULL;
}

$relatedPages = $page->siblings()->visible()->filterBy('location', $location)->not($page)->sortBy('date', 'desc')->limit($limit);
$relatedCount = $relatedPages->count();

if ($location != '' && $relatedCount >= 1): ?>

<div class="section cta blog-cta">
  <div class="g-col u-margins-auto u-padding-bottom-sm u-padding-top-off u-center">
    <h2 class="display beta u-margin-bottom"><?= ktStrip($page->ctaHeading()); ?></h2>
  </div>

  <? foreach ($relatedPages as $relatedPage):
    pattern('career-card', array('item' => $relatedPage, 'cardLayout' => 'g-6'));
  endforeach; ?>

</div>

<? endif ?>
