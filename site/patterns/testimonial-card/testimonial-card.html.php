<?

$parent = $item->parent();
$category = $parent->slug();
$categorySanitized = strtolower($category);

// get name and images
if($item->img() != '') {
  $testimonialImg = $item->image($item->img())->url();
} else {
  $testimonialImg = NULL;
}

if($item->testimonee() != '') {
  $testimonee = $item->testimonee();
} else {
  $testimonee = $parent->testimonee();
}

$featured = $item->featured();


/* TESTING
<h2>variables:</h2>
<ul>
  <li>$parent: <strong><?= $parent ?></strong></li>
  <li>$category: <strong><?= $category ?></strong></li>
  <li>$categorySanitized: <strong><?= $categorySanitized ?></strong></li>
  <li>$testimonee: <strong><?= $testimonee ?></strong></li>
  <li>$featured: <strong><?= $featured ?></strong></li>
  <li>$testimonialImg: <img src="<?= $testimonialImg ?>" alt=""></li>
</ul>
*/

?>


<blockquote class="testimonial-card-container u-margin-top-off u-margin-bottom<? if($featured != '' && $featured == 'true') { echo ' is-featured'; } ?>" data-category="<?= $categorySanitized ?>">
  <div class="testimonial-card-inner">
    <? if ($testimonialImg != NULL): ?>
      <img data-src="<?= $testimonialImg ?>" class="testimonial-card-img" alt="" draggable="false">
      <noscript>
        <img src="<?= $testimonialImg ?>" class="testimonial-card-img" alt="" draggable="false">
      </noscript>
    <? endif ?>
    <p class="testimonial-card-text">&ldquo;<?= $item->text() ?>&rdquo;</p>
    <p class="testimonial-card-attribution"><?= $testimonee ?>
      <? if ($item->credentials() != ''): ?>
        <span class="testimonial-card-credentials"><?= $item->credentials() ?></span>
      <? elseif ($categorySanitized == 'physician'): ?>
        <span class="testimonial-card-credentials"><?= $pages->find('authors')->defaultCredentials(); ?></span>
      <? endif ?>
    </p>
  </div>
  <? /* if ($testimonialImg != NULL): ?>
    <div class="testimonial-img testimonial-card-img u-margin-top-off" data-bg-src="<?= $testimonialImg ?>"></div>
  <? endif */ ?>
</blockquote>
