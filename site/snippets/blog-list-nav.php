<div class="g-col g-6 u-left-center">
  <p class="delta u-upper u-secondary-color"><?= $page->sortHeading() ?></p>
  <div class="button-group">
    <a href="#all" class="button is-selected" data-type-trigger><?= $page->allPosts() ?></a>
    <a href="#blog-article" class="button" data-type-trigger><?php snippet('icon-article-white.svg') ?> <?= $page->articlePost() ?></a>
    <a href="#blog-video" class="button" data-type-trigger><?php snippet('icon-video-white.svg') ?> <?= $page->videoPost() ?></a>
    <?php /* <a href="#blog-release" class="button" data-type-trigger><?php snippet('icon-release-white.svg') ?> <?= $page->releasePost() ?></a> */ ?>
  </div>
</div>

<div class="g-col g-6 u-left-center">
  <label for="search" class="delta u-underline-off u-margin-bottom-sm u-upper u-secondary-color"><?= $page->searchHeading() ?></label>
  <?php snippet('search-bar', array(
    'searchTarget' => 'blog-list',
    'searchPlaceholder' => 'Search blog posts'
  )) ?>
</div>

<div class="g-col u-left-center is-hidden list-category-alert" data-categorized>
  <p class="milli"><?= $page->filteringBy() ?> &lsquo;<em data-categorized-title></em>&rsquo;. <a href="#all" data-categorized-close><?= $page->showAll() ?></a></p>
</div>
