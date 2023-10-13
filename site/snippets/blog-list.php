 <?php

  // check for optional variables passed from template
  if(isset($layout)): $layout = $layout; else: $layout = ''; endif;
  if(isset($cardLayout)): $cardLayout = $cardLayout; else: $cardLayout = 'g-6'; endif;


  // number of items to show on each page (articles list page)
  if (isset($pagNum)) {
    $pagNum = $pagNum;
  } else {
    $pagNum = 12;
  }


  // if a query exists, get the search results...
  if(isset($query) && ($query != '')) {
    $items = $results;
  // ...otherwise, grab the most recent of each content type
  } else {
    // temporarily show all
    $visibleContent = $pages->find('blog')->children()->visible()->flip();
    $items = $visibleContent;
    /*
    $visibleContent = $pages->find('blog')->children()->visible()->flip();
    $latestArticle  = $visibleContent->filterBy('template', 'blog-article')->first();
    $latestVideo    = $visibleContent->filterBy('template', 'blog-video')->first();
    $latestRelease  = $visibleContent->filterBy('template', 'blog-release')->first();

    $firstRow = array($latestArticle, $latestVideo, $latestRelease);
    $items = $firstRow;

    // get the rest
    if ($page->slug() == 'blog') {
      $remainders = $visibleContent->not($firstRow);
    }
    */
  }


  // define heading text
  if ($page->isHomePage()) {
    $headingText = $pages->find('blog')->title();
    $bodyText = NULL;
    $limit = 4;

  // intro text
  } else {
    $headingText = NULL;
    $bodyText = $page->text();
    $limit = NULL;
  }

?>

<div class="g-col <?= $layout ?>">

    <?php if ($headingText != NULL): ?>
      <h2><?= $headingText ?></h2>
    <?php endif ?>

    <?php if ($bodyText != NULL && !isset($query)): ?>
      <p class="u-margin-bottom-lg"><?= $bodyText ?></p>
    <?php endif ?>

    <!-- display cards -->
    <div class="g-columns card-list u-margin-top">
      <?php
      // get the first row
      foreach ($items->limit($limit) as $item) {
        pattern('card', array('item' => $item, 'cardLayout' => $cardLayout));
      }
      // if we're looking at the blog page, get the rest
      /*
      if ($page->slug() == 'blog' && (!isset($query))) {
        foreach ($remainders as $item) {
          pattern('card', array('item' => $item, 'cardLayout' => $cardLayout));
        }
      }
      */
      ?>
    </div>


    <!-- more link -->
    <?php if($page->isHomePage() && ($visibleContent->count() > 3)): ?>
      <div class="g-columns u-left-right">
        <div class="g-col">
          <a href="blog" class="more-link button u-margin-top-off"><?= $pages->find('blog')->moreButton() ?></a>
        </div>
      </div>
    <?php endif ?>

</div>
