<?php

// author slug
if (isset($source)) {
  $source = $source;
} else {
  $source = 'kreynolds';
}

// get author page object
$author = $pages->find('authors/' . $source);

// author name
$authorName = $author->title();

// author credentials
if ($author->credentials() != '') {
  $authorCredentials = $author->credentials();
} else {
  $authorCredentials = $pages->find('authors')->defaultCredentials();
}

// author avatar image
if ($author->img() != '') {
  $authorImg = $author->image($author->img())->url();
} else {
  $authorImg = NULL;
}

?>

<div class="g-col">
  <div class="g-col author-container">
    <?php if ($authorImg != '') : ?>
      <img class="author-img" data-src="<?= $authorImg ?>" alt="" draggable="false">
      <noscript>
        <img class="author-img" src="<?= $authorImg ?>" alt="" draggable="false">
      </noscript>
    <?php endif ?>
    <div class="author-info">
      <p class="author-name heading"><?= $authorName ?></p>
      <p class="author-credentials"><?= $authorCredentials ?></p>
    </div>
  </div>
</div>

<?php /*

<blockquote class="testimonial-card-container u-margin-top-off u-margin-bottom<?php if($featured != '' && $featured == 'true') { echo ' is-featured'; } ?>" data-category="<?= $categorySanitized ?>">
  <div class="testimonial-card-inner">
    <?php if ($testimonialImg != NULL): ?>
      <img data-src="<?= $testimonialImg ?>" class="testimonial-card-img" alt="" draggable="false">
      <noscript>
        <img src="<?= $testimonialImg ?>" class="testimonial-card-img" alt="" draggable="false">
      </noscript>
    <?php endif ?>
    <p class="testimonial-card-text">&ldquo;<?= $item->text() ?>&rdquo;</p>
    <p class="testimonial-card-attribution"><?= $testimonee ?>
      <?php if ($item->credentials()): ?>
        <span class="testimonial-card-credentials"><?= $item->credentials() ?></span>
      <?php endif ?>
    </p>
  </div>
</blockquote>

*/ ?>
