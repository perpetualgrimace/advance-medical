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
    $items = $page->children()->listed()->sortBy('date', 'desc');
  }

?>

<div class="g-col <?= $layout ?>">

    <!-- display cards -->
    <div class="g-columns card-list<?php if (isset($query)) { echo ' u-margin-top';} ?>">
      <?php
      // get the first row
      foreach ($items as $item) {
        snippet('career-card', array('item' => $item, 'cardLayout' => $cardLayout));
      }
      ?>
    </div>


    <!-- more link -->
    <?php if($page->isHomePage() && ($visibleContent->count() > 3)): ?>
      <div class="g-columns u-left-right">
        <div class="g-col">
          <a href="blog" class="more-link button"><?= $pages->find('careers')->moreButton() ?></a>
        </div>
      </div>
    <?php endif ?>


</div>
