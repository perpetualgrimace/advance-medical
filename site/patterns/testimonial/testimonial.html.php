<?php

$testimonials = $pages->find('testimonials')->grandChildren();

// if a source is specified, pull that one
if(isset($source) && $source != '') {
  // $testimonial = $testimonials->findBy('slug', 'participant-1');
  $testimonial = $testimonials->findBy('slug', $source);
  $parent = $testimonial->parent();
  $category = $parent->slug();

// otherwise, pull a random one
} else {
  $category = 'physician';
  $testimonial = $pages->find('testimonials/physicians')->children()->visible()->shuffle()->first();
  $parent = $testimonial->parent();
}

// get name and images
if($testimonial->backgroundImg() != '') {
  $testimonialBackgroundImg = $testimonial->image($testimonial->backgroundImg())->url();
} elseif($category == 'participant') {
  $testimonialBackgroundImg = NULL;
} else {
  $testimonialBackgroundImg = $parent->image($parent->backgroundImg())->url();
}

/*
if($testimonial->img() != '') {
  $testimonialImg = $testimonial->image($testimonial->img())->url();
} else {
  $testimonialImg = NULL;
}
*/

if($testimonial->testimonee() != '') {
  $testimonee = $testimonial->testimonee();
} else {
  $testimonee = $parent->testimonee();
}

?>

<div class="section testimonial u-fullwidth">
  <div class="g-col g-8<?php e($testimonialBackgroundImg == NULL, ' u-margins-auto') ?>">
    <blockquote class="testimonial-quote">
      <p class="testimonial-text">&ldquo;<?= $testimonial->text() ?>&rdquo;</p>
      <p class="testimonial-attribution"><?= $testimonee ?>
        <?php /* if ($testimonialImg != NULL): ?>
          <img src="<?= $testimonialImg ?>" class="testimonial-img" alt="" draggable="false">
        <?php endif  */ ?>
      </p>
    </blockquote>
  </div>
  <?php if ($testimonialBackgroundImg != NULL): ?>
    <div class="testimonial-background-img" data-bg-src="<?= $testimonialBackgroundImg ?>"></div>
    <noscript>
      <div class="testimonial-background-img" style="background-image: url(<?= $testimonialBackgroundImg ?>)"></div>
    </noscript>
  <?php else: ?>
    <div class="testimonial-background-img"></div>
  <?php endif ?>

</div>
