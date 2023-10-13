<?php

  // determine card type
  $contentType = $item->intendedTemplate();

  // find the corresponding field in blog-list.md
  $contentTypeField = str_replace(['blog-', '-release'], '', $contentType) . 'Post';
  $contentTypeDisplay = ucfirst($pages->find('blog')->$contentTypeField());

  // get thumbnail image
  $blog = $pages->find('blog');
  $placeholder = $blog->placeholderImg();
  $placeholderUrl = $blog->url() . '/' . $placeholder;

  if ($contentType == 'blog-video') {
    // custom thumbnail image
    if ($item->thumbImg() != '') {
      $thumbImg = $item->image($item->thumbImg())->url();
    // generated youtube thumbnail
    } elseif ($item->youtubeId() != '') {
      $thumbImg = 'http://img.youtube.com/vi/' . $item->youtubeId() . '/mqdefault.jpg';
    // fallback image
    } else {
      $thumbImg = $placeholderUrl;
    }
  // custom thumbnail image
  } elseif ($item->thumbImg() != '') {
    $thumbImg = $item->image($item->thumbImg())->url();
    // fallback image
  } else {
    $thumbImg = $placeholderUrl;
  }

  // get category
  if($item->category() != '') {
    $category = $item->category();
    $categorySanitized = sanitize($category);
  } else {
    $category = NULL;
    $categorySanitized = NULL;
  }

  // get layout
  if($cardLayout != '') {
    $cardLayout = $cardLayout;
  } else {
    $cardLayout = '';
  }

?>

<article class="<?= $contentType ?>-card-container card-container g-col <?= $cardLayout ?>" data-category="<?= $categorySanitized ?>" data-type="<?= $contentType ?>">
  <div class="<?= $contentType ?>-card-inner card-inner">

    <?php if ($thumbImg != $placeholderUrl): ?>
      <a href="<?= $item->url() ?>" class="<?= $contentType ?>-card-thumb card-thumb" tabindex="-1">
        <img class="<?= $contentType ?>-card-img card-img" data-src="<?= $thumbImg ?>" alt="" draggable="false">
        <noscript>
          <img class="<?= $contentType ?>-card-img card-img" src="<?= $thumbImg ?>" alt="" draggable="false">
        </noscript>
          <?php if ($contentType == 'blog-video') {
            snippet('retina-img', [
              'baseUrl' => $site->url() . '/assets/img/icons/',
              'filename' => 'play',
              'class' => 'blog-video-card-thumb-icon u-margin-top-off'
            ]);
          } ?>
      </a>
    <?php endif ?>

    <div class="<?= $contentType ?>-card-caption card-caption u-margin-top-off">
       <a class="<?= $contentType ?>-card-title card-title display u-left" href="<?= $item->url() ?>">
         <?php // if ($contentType != 'blog-video') {
            snippet('svg-img', [
              'filename' => 'icons/' . $contentType,
              'class' => 'card-icon'
            ]);
          // } ?> <?= $item->title() ?>
       </a>
       <?php if ($category != NULL): ?>
        <p class="<?= $contentType ?>-card-meta card-meta milli">Posted in <a href="<?php e($page->intendedTemplate() != 'blog-list', $site->url() . '/blog') ?>#<?= $categorySanitized ?>" class="card-link card-meta-link" tabindex="-1" data-category-trigger><?= $category ?></a></p>
      <?php endif ?>
      <?php if ($thumbImg == $placeholderUrl): ?>
        <a href="<?= $item->url() ?>" class="<?= $contentType ?>-card-link card-link card-more-link milli" tabindex="-1">View post &rsaquo;</a>
      <?php endif; ?>
    </div>

  </div>
</article>
